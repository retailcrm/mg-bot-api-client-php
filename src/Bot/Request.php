<?php

/**
 * PHP version 7.0
 *
 * Request
 *
 * @package  RetailCrm\Mg\Bot
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot;

use RetailCrm\Common\Exception\CurlException;
use RetailCrm\Common\Exception\LimitException;
use Exception;
use InvalidArgumentException;
use RetailCrm\Common\Serializer;
use RetailCrm\Common\Url;
use Symfony\Component\Validator\Validation;

/**
 * PHP version 7.0
 *
 * Request class
 *
 * @package  RetailCrm\Mg\Bot
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class Request
{
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';
    const METHOD_PUT = 'PUT';
    const METHOD_PATCH = 'PATCH';
    const METHOD_DELETE = 'DELETE';

    protected $url;
    protected $token;
    private $debug;
    private $allowedMethods;
    private $stdout;

    /**
     * Client constructor.
     *
     * @param string        $url    api url
     * @param string        $token  api token
     * @param bool          $debug  make request verbose
     * @param bool|resource $stdout default output for debug
     */
    public function __construct($url, $token, $debug, $stdout = STDOUT)
    {
        if (false === stripos($url, 'https://')) {
            throw new InvalidArgumentException('API schema requires HTTPS protocol');
        }

        $this->url = $url;
        $this->token = $token;
        $this->debug = $debug;
        $this->stdout = $stdout;
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
     * @param string $path   request url
     * @param string $method (default: 'GET')
     * @param mixed  $request (default: null)
     * @param int    $serializeTo
     *
     * @return Response
     * @throws \Exception
     */
    public function makeRequest($path, $method, $request = null, $serializeTo = Serializer::S_JSON)
    {
        $this->validateMethod($method);

        if (!is_null($request)) {
            $this->validateRequest($request);
        }

        $urlBuilder = new Url();

        $parameters = is_null($request) ? null : Serializer::serialize($request, $serializeTo);
        $url = $method == self::METHOD_GET
            ? $this->url . $urlBuilder->buildUrl($path, $parameters, Url::RFC_CUSTOM)
            : $this->url . $path
            ;

        $curlHandler = curl_init();
        curl_setopt($curlHandler, CURLOPT_URL, $url);
        curl_setopt($curlHandler, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandler, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curlHandler, CURLOPT_FAILONERROR, false);
        curl_setopt($curlHandler, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curlHandler, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curlHandler, CURLOPT_TIMEOUT, 60);
        curl_setopt($curlHandler, CURLOPT_CONNECTTIMEOUT, 60);
        curl_setopt($curlHandler, CURLOPT_VERBOSE, $this->debug);
        curl_setopt($curlHandler, CURLOPT_STDERR, $this->stdout);

        curl_setopt($curlHandler, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            sprintf("X-Bot-Token: %s", $this->token)
        ]);

        if (in_array($method, [self::METHOD_POST, self::METHOD_PUT, self::METHOD_PATCH, self::METHOD_DELETE])) {
            curl_setopt($curlHandler, CURLOPT_CUSTOMREQUEST, $method);
            curl_setopt($curlHandler, CURLOPT_POSTFIELDS, $parameters);
        }

        $responseBody = curl_exec($curlHandler);
        $statusCode = curl_getinfo($curlHandler, CURLINFO_HTTP_CODE);

        $response = Response::parseJSON($responseBody);
        $errorMessage = !empty($response['errorMsg']) ? $response['errorMsg'] : '';

        /**
         * responses with 400 & 460 http codes contains extended error data
         * therefore they are not handled as exceptions
         */

        if (in_array($statusCode, [403, 404, 500])) {
            throw new Exception($errorMessage);
        }

        if ($statusCode == 503) {
            throw new LimitException($errorMessage);
        }

        $errno = curl_errno($curlHandler);
        $error = curl_error($curlHandler);

        curl_close($curlHandler);

        if ($errno) {
            throw new CurlException($error, $errno);
        }

        return new Response($statusCode, $responseBody);
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
            $message = (string) $errors;
            throw new InvalidArgumentException($message);
        }
    }
}
