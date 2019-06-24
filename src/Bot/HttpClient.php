<?php

/**
 * PHP version 7.0
 *
 * HttpClient
 *
 * @package  RetailCrm\Mg\Bot
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot;

use RetailCrm\Common\Exception\InvalidJsonException;
use RetailCrm\Common\Exception\LimitException;
use InvalidArgumentException;
use RetailCrm\Common\Serializer;
use RetailCrm\Common\Url;
use RetailCrm\Mg\Bot\Model\Response\UploadFileResponse;
use Symfony\Component\Validator\Validation;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;
use function GuzzleHttp\Psr7\stream_for;

/**
 * PHP version 7.0
 *
 * HttpClient class
 *
 * @package  RetailCrm\Mg\Bot
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class HttpClient
{
    /**
     * GET HTTP Method constant
     */
    const METHOD_GET = 'GET';

    /**
     * POST HTTP Method constant
     */
    const METHOD_POST = 'POST';

    /**
     * PUT HTTP Method constant
     */
    const METHOD_PUT = 'PUT';

    /**
     * PATCH HTTP Method constant
     */
    const METHOD_PATCH = 'PATCH';

    /**
     * DELETE HTTP Method constant
     */
    const METHOD_DELETE = 'DELETE';

    protected $basePath;
    protected $token;
    private $allowedMethods;
    private $stdout;
    private $client;

    /**
     * HTTP Client constructor.
     * Provide $stdout (for example: STDOUT) to log all requests.
     *
     * @param string                   $url     MG API URL
     * @param string                   $token   MG API Key
     * @param null|resource            $stdout  Output to log all requests (optional, default: null)
     * @param \GuzzleHttp\HandlerStack $handler GuzzleHttp::HandlerStack instance (default: null)
     */
    public function __construct($url, $token, $stdout = null, $handler = null)
    {
        if (false === stripos($url, 'https://')) {
            throw new InvalidArgumentException('API schema requires HTTPS protocol');
        }

        $this->basePath = parse_url($url, PHP_URL_PATH);
        $this->token = $token;
        $this->stdout = $stdout;
        $this->client = new Client(array_filter([
            'base_uri' => Url::normalizeUrl($url),
            'timeout' => 60,
            'handler' => $handler
        ]));
        $this->allowedMethods = [
            self::METHOD_GET,
            self::METHOD_POST,
            self::METHOD_PUT,
            self::METHOD_PATCH,
            self::METHOD_DELETE
        ];
    }

    /**
     * Make HTTP request
     *
     * @param string $path   Request URL
     * @param string $method Request method (default: 'GET')
     * @param mixed  $request Request model (default: null)
     *
     * @return ResponseInterface
     * @throws \Exception
     */
    public function makeRequest($path, $method, $request = null)
    {
        $getParameters = '';

        $this->validateMethod($method);

        if (!is_null($request)) {
            $this->validateRequest($request);
        }

        if ($method == self::METHOD_GET && !is_null($request)) {
            $getParameters = Url::buildGetParameters(Serializer::serialize($request, Serializer::S_ARRAY));
        }

        $requestBody = is_null($request) ? null : Serializer::serialize($request, Serializer::S_JSON);
        $request = new Request(
            $method,
            \sprintf("%s%s%s", $this->basePath, $path, $getParameters),
            [
                'Content-Type' => 'application/json',
                'X-Bot-Token' => $this->token
            ]
        );

        if (in_array($method, [self::METHOD_POST, self::METHOD_PUT, self::METHOD_PATCH, self::METHOD_DELETE])) {
            $request = $request->withBody(stream_for($requestBody));
        }

        $responseObject = null;

        try {
            $responseObject = $this->client->send(
                $request,
                [
                    'debug' => $this->stdout,
                    'allow_redirects' => true,
                    'http_errors' => false,
                    'verify' => false
                ]
            );
        } catch (GuzzleException $exception) {
            throw new \Exception($exception->getMessage(), $exception->getCode(), $exception);
        }

        $statusCode = $responseObject->getStatusCode();
        $response = self::parseJSON((string) $responseObject->getBody());
        $errorMessage = !empty($response['errorMsg']) ? $response['errorMsg'] : '';
        $errorMessage = !empty($response['errors']) ? $this->getErrors($response['errors']) : $errorMessage;

        /**
         * responses with 400 & 460 http codes contains extended error data
         * therefore they are not handled as exceptions
         */
        if (in_array($statusCode, [403, 404, 500])) {
            throw new \InvalidArgumentException($errorMessage);
        }

        if ($statusCode == 503) {
            throw new LimitException($errorMessage);
        }

        return $responseObject;
    }

    /**
     * @param string $filename
     * @return UploadFileResponse
     *
     * @throws \Exception
     */
    public function postFile(string $filename): UploadFileResponse
    {
        if (!file_exists($filename)) {
            throw new \InvalidArgumentException("File doesn't exist");
        }

        if (filesize($filename) == 0) {
            throw new \InvalidArgumentException("Empty file provided");
        }

        try {
            $responseData = $this->client->request(
                self::METHOD_POST,
                \sprintf("%s/files/upload", $this->basePath),
                [
                    'headers' => [
                        'X-Bot-Token' => $this->token
                    ],
                    'body' => fopen($filename, 'r')
                ]
            );
        } catch (GuzzleException $exception) {
            throw new \Exception($exception->getMessage(), $exception->getCode(), $exception);
        }

        $obj = Serializer::deserialize(
            (string) $responseData->getBody(),
            'RetailCrm\Mg\Bot\Model\Response\UploadFileResponse'
        );

        return $obj instanceof UploadFileResponse ? $obj : null;
    }

    /**
     * Validate HTTP method
     *
     * @param string $method
     */
    private function validateMethod($method)
    {
        if (!in_array($method, $this->allowedMethods, false)) {
            throw new InvalidArgumentException(
                sprintf(
                    'Method "%s" is not valid. Allowed methods are %s',
                    $method,
                    implode(', ', $this->allowedMethods)
                )
            );
        }
    }

    /**
     * Validate given class
     *
     * @param string $class
     *
     * @return void
     */
    private function validateRequest($class)
    {
        if (!is_string($class) && method_exists($class, 'validate')) {
            $errors = $class->validate();
        } else {
            $validator = Validation::createValidatorBuilder()
                ->enableAnnotationMapping()
                ->getValidator();

            $errors = $validator->validate($class);
        }

        if ((is_object($errors) && call_user_func([$errors, 'count']) > 0) || is_string($errors)) {
            $message = (string) $errors;
            throw new InvalidArgumentException($message);
        }
    }

    /**
     * @param array $errors
     *
     * @return string
     */
    private function getErrors(array $errors)
    {
        $errorString = '';

        foreach ($errors as $error) {
            $errorString .= $error . " ";
        }

        return $errorString;
    }

    /**
     * @param string $responseBody
     *
     * @return array
     */
    public static function parseJSON($responseBody): array
    {
        $result = [];

        if (!empty($responseBody)) {
            $response = json_decode($responseBody, true);

            if (!$response && JSON_ERROR_NONE !== ($error = json_last_error())) {
                throw new InvalidJsonException("Invalid JSON in the API response body. Error code #$error", $error);
            }

            $result = $response;
        }

        return $result;
    }
}
