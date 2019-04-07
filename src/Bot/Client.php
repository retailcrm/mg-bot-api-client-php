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
use RetailCrm\Common\Url;
use RetailCrm\Common\Serializer;
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
        $url = sprintf("%sapi/bot/%s", Url::normalizeUrl($url), self::VERSION);
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
        return $this->client->makeRequest('/bots', Request::METHOD_GET, $request, Serializer::S_ARRAY);
    }

    /**
     * Edit bot info
     *
     * @param Model\Request\InfoRequest $request
     *
     * @throws InvalidArgumentException
     * @throws CurlException
     * @throws CurlException
     * @throws Exception
     *
     * @return Response
     */
    public function info(Model\Request\InfoRequest $request)
    {
        return $this->client->makeRequest('/my/info', Request::METHOD_PATCH, $request);
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
        return $this->client->makeRequest('/channels', Request::METHOD_GET, $request, Serializer::S_ARRAY);
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
        return $this->client->makeRequest('/chats', Request::METHOD_GET, $request, Serializer::S_ARRAY);
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
        return $this->client->makeRequest('/my/commands', Request::METHOD_GET, $request, Serializer::S_ARRAY);
    }

    /**
     * Edit commands for exact bot
     *
     * @param Model\Request\CommandEditRequest $request
     *
     * @throws InvalidArgumentException
     * @throws CurlException
     * @throws InvalidJsonException
     * @throws Exception
     *
     * @return Response
     */
    public function commandEdit(Model\Request\CommandEditRequest $request)
    {
        return $this->client->makeRequest(
            sprintf("/my/commands/%s", $request->getName()),
            Request::METHOD_PUT,
            $request
        );
    }

    /**
     * Delete command for exact bot
     *
     * @param string $request
     *
     * @throws InvalidArgumentException
     * @throws CurlException
     * @throws InvalidJsonException
     * @throws Exception
     *
     * @return Response
     */
    public function commandDelete(string $request)
    {
        return $this->client->makeRequest(sprintf("/my/commands/%s", $request), Request::METHOD_DELETE);
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
        return $this->client->makeRequest('/customers', Request::METHOD_GET, $request, Serializer::S_ARRAY);
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
        return $this->client->makeRequest('/dialogs', Request::METHOD_GET, $request, Serializer::S_ARRAY);
    }

    /**
     * Assign dialog to exact user
     *
     * @param Model\Request\DialogAssignRequest $request
     *
     * @throws InvalidArgumentException
     * @throws CurlException
     * @throws InvalidJsonException
     * @throws Exception
     *
     * @return Response
     */
    public function dialogAssign(Model\Request\DialogAssignRequest $request)
    {
        return $this->client->makeRequest(
            sprintf("/dialogs/%d/assign", $request->getDialogId()),
            Request::METHOD_PATCH,
            $request
        );
    }

    /**
     * Close exact dialog
     *
     * @param string $request
     *
     * @throws InvalidArgumentException
     * @throws CurlException
     * @throws InvalidJsonException
     * @throws Exception
     *
     * @return Response
     */
    public function dialogClose(string $request)
    {
        return $this->client->makeRequest(sprintf("/dialogs/%d/close", $request), Request::METHOD_DELETE);
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
        return $this->client->makeRequest('/members', Request::METHOD_GET, $request, Serializer::S_ARRAY);
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
        return $this->client->makeRequest('/messages', Request::METHOD_GET, $request, Serializer::S_ARRAY);
    }

    /**
     * Send a message
     *
     * @param Model\Request\MessageSendRequest $request
     *
     * @throws InvalidArgumentException
     * @throws CurlException
     * @throws InvalidJsonException
     * @throws Exception
     *
     * @return Response
     */
    public function messageSend(Model\Request\MessageSendRequest $request)
    {
        return $this->client->makeRequest('/messages', Request::METHOD_POST, $request);
    }

    /**
     * Edit a message
     *
     * @param Model\Request\MessageEditRequest $request
     *
     * @throws InvalidArgumentException
     * @throws CurlException
     * @throws InvalidJsonException
     * @throws Exception
     *
     * @return Response
     */
    public function messageEdit(Model\Request\MessageEditRequest $request)
    {
        return $this->client->makeRequest('/messages/%d', Request::METHOD_PATCH, $request->getId());
    }

    /**
     * Delete a message
     *
     * @param string $request
     *
     * @throws InvalidArgumentException
     * @throws CurlException
     * @throws InvalidJsonException
     * @throws Exception
     *
     * @return Response
     */
    public function messageDelete(string $request)
    {
        return $this->client->makeRequest(sprintf("/messages/%d", $request), Request::METHOD_DELETE);
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
        return $this->client->makeRequest('/users', Request::METHOD_GET, $request, Serializer::S_ARRAY);
    }
}
