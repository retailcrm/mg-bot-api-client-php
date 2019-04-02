<?php

/**
 * PHP version 7.0
 *
 * Client
 *
 * @package  RetailCrm\Mg\Bot
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot;

use RetailCrm\Common\Exception\CurlException;
use RetailCrm\Common\Exception\InvalidJsonException;
use RetailCrm\Mg\Bot\Model;
use Exception;
use InvalidArgumentException;

/**
 * PHP version 7.0
 *
 * Client class
 *
 * @package  RetailCrm\Mg\Bot
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
        $url = sprintf("%sapi/bot/%s", Request::normalizeUrl($url), self::VERSION);
        $this->client = new Request($url, $token, $debug);
    }

    /**
     * Returns filtered bots list
     *
     * @param Model\Request\BotsRequest $request
     *
     * @throws InvalidArgumentException
     * @throws CurlException
     * @throws InvalidJsonException
     * @throws Exception
     *
     * @return Response
     */
    public function bots(Model\Request\BotsRequest $request)
    {
        return $this->client->makeRequest('/bots', 'GET', $request, Request::S_ARRAY);
    }

    /**
     * Returns filtered channels list
     *
     * @param Model\Request\ChannelsRequest $request
     *
     * @return Response
     * @throws \Exception
     */
    public function channels(Model\Request\ChannelsRequest $request)
    {
        return $this->client->makeRequest('/channels', 'GET', $request, Request::S_ARRAY);
    }

    /**
     * Returns filtered chats list
     *
     * @param Model\Request\ChatsRequest $request
     *
     * @throws InvalidArgumentException
     * @throws CurlException
     * @throws InvalidJsonException
     * @throws Exception
     *
     * @return Response
     */
    public function chats(Model\Request\ChatsRequest $request)
    {
        return $this->client->makeRequest('/chats', 'GET', $request, Request::S_ARRAY);
    }

    /**
     * Returns filtered commands list
     *
     * @param Model\Request\CommandsRequest $request
     *
     * @throws InvalidArgumentException
     * @throws CurlException
     * @throws InvalidJsonException
     * @throws Exception
     *
     * @return Response
     */
    public function commands(Model\Request\CommandsRequest $request)
    {
        return $this->client->makeRequest('/my/commands', 'GET', $request, Request::S_ARRAY);
    }

    /**
     * Returns filtered customers list
     *
     * @param Model\Request\CustomersRequest $request
     *
     * @throws InvalidArgumentException
     * @throws CurlException
     * @throws InvalidJsonException
     * @throws Exception
     *
     * @return Response
     */
    public function customers(Model\Request\CustomersRequest $request)
    {
        return $this->client->makeRequest('/customers', 'GET', $request, Request::S_ARRAY);
    }

    /**
     * Returns filtered dialogs list
     *
     * @param Model\Request\DialogsRequest $request
     *
     * @throws InvalidArgumentException
     * @throws CurlException
     * @throws InvalidJsonException
     * @throws Exception
     *
     * @return Response
     */
    public function dialogs(Model\Request\DialogsRequest $request)
    {
        return $this->client->makeRequest('/dialogs', 'GET', $request, Request::S_ARRAY);
    }

    /**
     * Returns filtered members list
     *
     * @param Model\Request\MembersRequest $request
     *
     * @throws InvalidArgumentException
     * @throws CurlException
     * @throws InvalidJsonException
     * @throws Exception
     *
     * @return Response
     */
    public function members(Model\Request\MembersRequest $request)
    {
        return $this->client->makeRequest('/members', 'GET', $request, Request::S_ARRAY);
    }

    /**
     * Returns filtered messages list
     *
     * @param Model\Request\MessagesRequest $request
     *
     * @throws InvalidArgumentException
     * @throws CurlException
     * @throws InvalidJsonException
     * @throws Exception
     *
     * @return Response
     */
    public function messages(Model\Request\MessagesRequest $request)
    {
        return $this->client->makeRequest('/messages', 'GET', $request, Request::S_ARRAY);
    }

    /**
     * Returns filtered users list
     *
     * @param Model\Request\UsersRequest $request
     *
     * @throws InvalidArgumentException
     * @throws CurlException
     * @throws InvalidJsonException
     * @throws Exception
     *
     * @return Response
     */
    public function users(Model\Request\UsersRequest $request)
    {
        return $this->client->makeRequest('/users', 'GET', $request, Request::S_ARRAY);
    }
}
