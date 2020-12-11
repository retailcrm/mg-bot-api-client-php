<?php

/**
 * PHP version 7.1
 *
 * Test case class
 *
 * @package  Test
 */

namespace RetailCrm\Mg\Bot\Test;

use PHPUnit\Framework\TestCase as BaseCase;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use RetailCrm\Mg\Bot\Client;

/**
 * Class TestCase
 *
 * @package  Test
 */
class TestCase extends BaseCase
{
    /**
     * Return bot api client object
     *
     * @param string $url         (default: null)
     * @param string $key         (default: null)
     * @param bool   $debug       (default: false)
     * @param array  ...$response (default: null)
     *
     * @return Client
     */
    public static function getApiClient(
        $url = null,
        $key = null,
        $debug = false,
        ...$response
    ) {
        $configUrl = getenv('MG_BOT_URL');
        $configKey = getenv('MG_BOT_KEY');
        $configDbg = getenv('MG_BOT_DBG');
        $mock = new MockHandler($response ?: []);

        return new Client(
            $url ?: $configUrl,
            $key ?: $configKey,
            $debug ?: $configDbg,
            empty($response) ? null : HandlerStack::create($mock)
        );
    }

    /**
     * Returns mocked GuzzleHttp response
     *
     * @param string|null $body       HTTP Body
     * @param int         $statusCode HTTP status code
     *
     * @return Response
     */
    public function getResponse(string $body = null, int $statusCode = 200)
    {
        return new Response(
            $statusCode,
            array_filter(
                [
                    'Server' => 'openresty/1.13.6.2',
                    'Date' => gmdate("D, d M Y H:m:s \G\M\T"),
                    'Content-Type' => 'application/json; charset=utf-8',
                    'Content-Length' => is_null($body) ? null : strlen($body),
                    'Connection' => 'keep-alive',
                    'Access-Control-Allow-Credentials' => 'true',
                    'Access-Control-Allow-Headers' => 'X-Requested-With, Content-Type, X-Api-Key, X-Client-Token',
                    'Access-Control-Allow-Methods' => 'GET, POST, PUT, DELETE, OPTIONS'
                ]
            ),
            $body
        );
    }

    /**
     * Generate and return mocked response.
     * Response data should be stored in Resources directory as json file.
     * Only file name (without extension or any other data) should be provided,
     * e.g. `getJsonResponse('bots', 200)`
     *
     * @param string $jsonFile   mocked body
     * @param int    $statusCode mocked status code
     *
     * @return Response|null
     */
    public function getJsonResponse(string $jsonFile, int $statusCode = 200)
    {
        $fileName = realpath(
            join(
                DIRECTORY_SEPARATOR,
                [__DIR__, '..', '..', 'Resources', \sprintf('%s.json', $jsonFile)]
            )
        );

        if (file_exists($fileName)) {
            $json = file_get_contents($fileName);
            json_decode($json, true);

            if (json_last_error() == JSON_ERROR_NONE) {
                return $this->getResponse($json, $statusCode);
            }
        } else {
            return null;
        }
    }

    /**
     * @param int   $statusCode response code
     * @param array ...$errors  response errors
     *
     * @return Response
     */
    public function getErrorsResponse(int $statusCode = 400, ...$errors)
    {
        $json = ['errors' => []];

        foreach ($errors as $error) {
            $json['errors'][] = is_string($error) ? $error : null;
        }

        return $this->getResponse(json_encode(array_filter($json)), $statusCode);
    }

    /**
     * Generate and return empty response
     *
     * @param int $statusCode HTTP status code
     *
     * @return Response|null
     */
    public function getEmptyResponse(int $statusCode = 200)
    {
        return $this->getResponse(null, $statusCode);
    }
}
