<?php

/**
 * PHP version 7.0
 *
 * Client
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
use Exception;
use InvalidArgumentException;

/**
 * PHP version 7.0
 *
 * Client class
 *
 * @category RetailCrm
 * @package  Bot
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class Client
{
    const VERSION = 'v1';

    protected $client;

    /**
     * Init
     *
     * @param string $url   api url
     * @param string $token api key
     * @param bool   $debug debug flag
     */
    public function __construct($url, $token, $debug = false)
    {
        if ('/' !== $url[strlen($url) - 1]) {
            $url .= '/';
        }

        $url = $url . 'api/bot/' . self::VERSION;
        $this->client = new Request($url, $token, $debug);
    }

    /**
     * Returns filtered bots list
     *
     * @param array $parameters (default: array())
     *
     * @throws InvalidArgumentException
     * @throws CurlException
     * @throws InvalidJsonException
     * @throws Exception
     *
     * @return Response
     */
    public function bots(array $parameters = [])
    {
        return $this->client->makeRequest('/bots', 'GET', $parameters);
    }

    /**
     * Returns filtered channels list
     *
     * @param array $parameters (default: array())
     *
     * @throws InvalidArgumentException
     * @throws CurlException
     * @throws InvalidJsonException
     * @throws Exception
     *
     * @return Response
     */
    public function channels(array $parameters = [])
    {
        return $this->client->makeRequest('/channels', 'GET', $parameters);
    }

    /**
     * Returns filtered chats list
     *
     * @param array $parameters (default: array())
     *
     * @throws InvalidArgumentException
     * @throws CurlException
     * @throws InvalidJsonException
     * @throws Exception
     *
     * @return Response
     */
    public function chats(array $parameters = [])
    {
        return $this->client->makeRequest('/chats', 'GET', $parameters);
    }

    /**
     * Returns filtered customers list
     *
     * @param array $parameters (default: array())
     *
     * @throws InvalidArgumentException
     * @throws CurlException
     * @throws InvalidJsonException
     * @throws Exception
     *
     * @return Response
     */
    public function customers(array $parameters = [])
    {
        return $this->client->makeRequest('/customers', 'GET', $parameters);
    }
}
