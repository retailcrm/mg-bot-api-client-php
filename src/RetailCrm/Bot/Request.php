<?php

/**
 * PHP version 7.0
 *
 * Request
 *
 * @category RetailCrm
 * @package  Bot
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Bot;

use RetailCrm\Bot\Exception\CurlException;
use RetailCrm\Bot\Exception\InvalidJsonException;
use RetailCrm\Bot\Exception\LimitException;
use Exception;
use InvalidArgumentException;

/**
 * PHP version 7.0
 *
 * Request class
 *
 * @category RetailCrm
 * @package  Bot
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

    protected $url;
    protected $token;
    private $debug;

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
    }

    /**
     * Make HTTP request
     *
     * @param string $path       request url
     * @param string $method     (default: 'GET')
     * @param array  $parameters (default: array())
     *
     * @throws \InvalidArgumentException
     * @throws \Exception
     * @throws CurlException
     * @throws InvalidJsonException
     *
     * @return Response
     */
    public function makeRequest(
        $path,
        $method,
        array $parameters = []
    ) {
        $allowedMethods = [self::METHOD_GET, self::METHOD_POST, self::METHOD_PUT, self::METHOD_DELETE];

        if (!in_array($method, $allowedMethods, false)) {
            throw new InvalidArgumentException(
                sprintf(
                    'Method "%s" is not valid. Allowed methods are %s',
                    $method,
                    implode(', ', $allowedMethods)
                )
            );
        }

        $url = $this->url . $path;

        if (self::METHOD_GET === $method && count($parameters)) {
            $url .= '?' . http_build_query($parameters, '', '&');
        }

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
            curl_setopt($curlHandler, CURLOPT_POSTFIELDS, json_encode($parameters));
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
}
