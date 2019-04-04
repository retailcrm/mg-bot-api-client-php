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

use JMS\Serializer\SerializerBuilder;
use RetailCrm\Common\Exception\CurlException;
use RetailCrm\Common\Exception\LimitException;
use Exception;
use InvalidArgumentException;
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
    const METHOD_DELETE = 'DELETE';

    const S_ARRAY = 0;
    const S_JSON = 1;

    protected $url;
    protected $token;
    private $debug;
    private $allowedMethods;

    /**
     * Client constructor.
     *
     * @param string $url   api url
     * @param string $token api token
     * @param bool   $debug make request verbose
     */
    public function __construct($url, $token, $debug)
    {
        if (false === stripos($url, 'https://')) {
            throw new InvalidArgumentException('API schema requires HTTPS protocol');
        }

        $this->url = $url;
        $this->token = $token;
        $this->debug = $debug;
        $this->allowedMethods = [self::METHOD_GET, self::METHOD_POST, self::METHOD_PUT, self::METHOD_DELETE];
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
    public function makeRequest($path, $method, $request = null, $serializeTo = self::S_JSON)
    {
        $this->validateMethod($method);
        $this->validateRequest($request);

        $parameters = $this->serialize($request, $serializeTo);
        $url = $this->buildUrl($path, $method, $parameters);

        var_dump($url);

        $curlHandler = curl_init();
        curl_setopt($curlHandler, CURLOPT_URL, $url);
        curl_setopt($curlHandler, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandler, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curlHandler, CURLOPT_FAILONERROR, false);
        curl_setopt($curlHandler, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curlHandler, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curlHandler, CURLOPT_TIMEOUT, 60);
        curl_setopt($curlHandler, CURLOPT_CONNECTTIMEOUT, 60);
        curl_setopt($curlHandler, CURLOPT_VERBOSE, (int)$this->debug);

        curl_setopt($curlHandler, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            sprintf("X-Bot-Token: %s", $this->token)
        ]);

        if (in_array($method, [self::METHOD_POST, self::METHOD_PUT, self::METHOD_DELETE])) {
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
     * Check trailing slash into url
     *
     * @param string $url
     *
     * @return string
     */
    public static function normalizeUrl($url)
    {
        if ('/' !== $url[strlen($url) - 1]) {
            $url .= '/';
        }

        return $url;
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
            ->addMethodMapping('loadValidatorMetadata')
            ->getValidator();

        $errors = $validator->validate($class);

        if ($errors->count() > 0) {
            $message = (string) $errors;
            throw new InvalidArgumentException($message);
        }
    }

    /**
     * Serialize given object to JSON or Array
     *
     * @param object $request
     * @param int    $serialize
     *
     * @return array|string
     */
    private function serialize($request, $serialize)
    {
        $serialized = null;

        switch ($serialize) {
            case self::S_ARRAY:
                $serialized = (array)$request;
                break;
            case self::S_JSON:
                $serializer = SerializerBuilder::create()->build();
                $serialized = $serializer->serialize($request, 'json');
        }

        return $serialized;
    }

    /**
     * Build request url
     *
     * @param string $path
     * @param string $method
     * @param array  $parameters
     *
     * @return string
     */
    private function buildUrl($path, $method, $parameters)
    {
        $url = $this->url . $path;

        if (self::METHOD_GET === $method && count($parameters)) {
            $queryString = http_build_query($parameters, '', '&');
            $url = sprintf("%s?%s", $url, $queryString);
        }

        return $url;
    }
}
