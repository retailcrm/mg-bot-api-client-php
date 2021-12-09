<?php

/**
 * PHP version 7.1
 *
 * HttpClient
 *
 * @package  RetailCrm\Mg\Bot
 */

namespace RetailCrm\Mg\Bot;

use BadMethodCallException;
use ErrorException;
use Exception;
use InvalidArgumentException;
use RetailCrm\Common\Exception\InvalidJsonException;
use RetailCrm\Common\Exception\LimitException;
use RetailCrm\Common\Exception\NotFoundException;
use RetailCrm\Common\Exception\UnauthorizedException;
use RetailCrm\Common\Serializer;
use RetailCrm\Common\Url;
use RuntimeException;
use Symfony\Component\Validator\Validation;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;
use function GuzzleHttp\Psr7\stream_for;

/**
 * Class HttpClient
 *
 * @package  RetailCrm\Mg\Bot
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
     * @return \Psr\Http\Message\ResponseInterface
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
            $getParameters = Url::buildGetParameters((array)Serializer::serialize($request, Serializer::S_ARRAY));
        }

        $requestBody = is_null($request) ? '' : Serializer::serialize($request, Serializer::S_JSON);
        $request = new Request(
            $method,
            sprintf("%s%s%s", $this->basePath, $path, $getParameters),
            [
                'Content-Type' => 'application/json',
                'X-Bot-Token' => $this->token
            ]
        );

        if (in_array(
            $method,
            [self::METHOD_POST, self::METHOD_PUT, self::METHOD_PATCH, self::METHOD_DELETE]
        ) && is_string($requestBody)
        ) {
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
            throw new Exception($exception->getMessage(), $exception->getCode(), $exception);
        }

        $this->validateResponse($responseObject);

        return $responseObject;
    }

    /**
     * @param string $filename
     * @return ResponseInterface|null
     *
     * @throws \Exception
     */
    public function postFile(string $filename)
    {
        if (!file_exists($filename)) {
            throw new InvalidArgumentException("File doesn't exist");
        }

        if (filesize($filename) == 0) {
            throw new InvalidArgumentException("Empty file provided");
        }

        try {
            $responseData = $this->client->request(
                self::METHOD_POST,
                sprintf("%s/files/upload", $this->basePath),
                [
                    'headers' => [
                        'X-Bot-Token' => $this->token
                    ],
                    'body' => fopen($filename, 'r')
                ]
            );
        } catch (GuzzleException $exception) {
            throw new Exception($exception->getMessage(), $exception->getCode(), $exception);
        }

        return isset($responseData) ? $responseData : null;
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
        $validator = Validation::createValidatorBuilder()
            ->enableAnnotationMapping()
            ->getValidator();

        $errors = $validator->validate($class);

        if ($errors->count() > 0) {
            $message = '';

            foreach ($errors as $error) {
                $message .= $error->getMessage();
            }

            throw new InvalidArgumentException($message);
        }
    }

    /**
     * @param \Psr\Http\Message\ResponseInterface $responseObject
     *
     * @throws \ErrorException
     * @throws \Exception
     */
    private function validateResponse(ResponseInterface $responseObject)
    {
        $statusCode = $responseObject->getStatusCode();
        $response = self::parseJSON((string)$responseObject->getBody());

        $errorMessage = !empty($response['errorMsg']) ? $response['errorMsg'] : '';
        $errorMessage = !empty($response['errors']) ? $this->getErrors($response['errors']) : $errorMessage;

        if ($statusCode == 400) {
            throw new RuntimeException($errorMessage);
        }

        if (in_array($statusCode, [401, 403])) {
            throw new UnauthorizedException($errorMessage);
        }

        if ($statusCode == 404) {
            throw new NotFoundException($errorMessage);
        }

        if (in_array($statusCode, [405, 501])) {
            throw new BadMethodCallException($errorMessage);
        }

        if (in_array($statusCode, [500, 502])) {
            throw new ErrorException($errorMessage);
        }

        if ($statusCode == 503) {
            throw new LimitException($errorMessage);
        }

        if ($statusCode >= 400) {
            throw new Exception($errorMessage);
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
