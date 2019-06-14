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

use RetailCrm\Common\Deserializer;
use RetailCrm\Common\Exception\CurlException;
use RetailCrm\Common\Exception\InvalidJsonException;
use RetailCrm\Common\Url;
use RetailCrm\Common\Serializer;
use RetailCrm\Mg\Bot\Model\Response\AssignResponse;
use RetailCrm\Mg\Bot\Model\Response\GenericListResponse;
use RetailCrm\Mg\Bot\Model\Response\ErrorOnlyResponse;
use Exception;
use InvalidArgumentException;
use RetailCrm\Mg\Bot\Model\Response\MessageSendResponse;

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

    const ENTITY_CLASSPATH = 'RetailCrm\\Mg\\Bot\\Model\\Entity\\';
    const RESPONSE_MODEL_CLASSPATH = 'RetailCrm\\Mg\\Bot\\Model\\Response\\';
    const GENERIC_LIST_RESPONSE = self::RESPONSE_MODEL_CLASSPATH . 'GenericListResponse';
    const ERROR_ONLY_RESPONSE = self::RESPONSE_MODEL_CLASSPATH . 'ErrorOnlyResponse';

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
        $this->client = new HttpClient($url, $token, $debug);
    }

    /**
     * @param string $path
     * @param string $method
     * @param object $request
     * @param string $responseType
     * @param int    $serializeTo
     * @param string $deserializeType
     *
     * @return object|null
     * @throws \Exception
     */
    private function getData(
        $path,
        $method,
        $request,
        $responseType = self::GENERIC_LIST_RESPONSE,
        $serializeTo = Serializer::S_JSON,
        $deserializeType = Deserializer::DS_JSON
    ) {
        $response = $this->client->makeRequest(
            $path,
            $method,
            $request,
            $serializeTo
        );

        return Deserializer::deserialize(
            (string) $response->getBody(),
            $responseType,
            $deserializeType
        );
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
     * @return array
     */
    public function bots(Model\Request\BotsRequest $request)
    {
        return $this->getData(
            '/bots',
            HttpClient::METHOD_GET,
            $request,
            self::GENERIC_LIST_RESPONSE,
            Serializer::S_ARRAY
        );
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
     * @return ErrorOnlyResponse|object|null
     */
    public function info(Model\Request\InfoRequest $request)
    {
        return $this->getData('/my/info', HttpClient::METHOD_PATCH, $request, self::ERROR_ONLY_RESPONSE);
    }

    /**
     * Returns filtered channels list
     *
     * @param Model\Request\ChannelsRequest $request
     *
     * @return array|object|null
     * @throws \Exception
     */
    public function channels(Model\Request\ChannelsRequest $request)
    {
        return $this->getData(
            '/channels',
            HttpClient::METHOD_GET, $request,
            \sprintf("array<%s%s>", self::ENTITY_CLASSPATH, 'Channel\\Channel'),
            Serializer::S_ARRAY
        );
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
     * @return GenericListResponse|object|null
     */
    public function chats(Model\Request\ChatsRequest $request)
    {
        return $this->getData(
            '/chats',
            HttpClient::METHOD_GET,
            $request,
            self::GENERIC_LIST_RESPONSE,
            Serializer::S_ARRAY
        );
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
     * @return GenericListResponse|object|null
     */
    public function commands(Model\Request\CommandsRequest $request)
    {
        return $this->getData(
            '/my/commands',
            HttpClient::METHOD_GET, $request,
            self::GENERIC_LIST_RESPONSE,
            Serializer::S_ARRAY
        );
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
     * @return ErrorOnlyResponse|object|null
     */
    public function commandEdit(Model\Request\CommandEditRequest $request)
    {
        return $this->getData(
            sprintf("/my/commands/%s", $request->getName()),
            HttpClient::METHOD_PUT,
            $request,
            self::ERROR_ONLY_RESPONSE
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
     * @return ErrorOnlyResponse|object|null
     */
    public function commandDelete(string $request)
    {
        $response = $this->client->makeRequest(sprintf("/my/commands/%s", $request), HttpClient::METHOD_DELETE);

        return Deserializer::deserialize(
            $response->getResponse(),
            self::ERROR_ONLY_RESPONSE,
            Deserializer::DS_ARRAY
        );
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
     * @return GenericListResponse|object|null
     */
    public function customers(Model\Request\CustomersRequest $request)
    {
        return $this->getData(
            '/customers',
            HttpClient::METHOD_GET,
            $request,
            self::GENERIC_LIST_RESPONSE,
            Serializer::S_ARRAY
        );
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
     * @return GenericListResponse|object|null
     */
    public function dialogs(Model\Request\DialogsRequest $request)
    {
        return $this->getData(
            '/dialogs',
            HttpClient::METHOD_GET,
            $request,
            self::GENERIC_LIST_RESPONSE,
            Serializer::S_ARRAY
        );
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
     * @return AssignResponse|object|null
     */
    public function dialogAssign(Model\Request\DialogAssignRequest $request)
    {
        return $this->getData(
            sprintf("/dialogs/%d/assign", $request->getDialogId()),
            HttpClient::METHOD_PATCH,
            $request,
            self::RESPONSE_MODEL_CLASSPATH . 'AssignResponse'
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
     * @return ErrorOnlyResponse|object|null
     */
    public function dialogClose(string $request)
    {
        return $this->getData(
            sprintf("/dialogs/%d/close", $request),
            HttpClient::METHOD_DELETE,
            null,
            self::ERROR_ONLY_RESPONSE
        );
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
     * @return GenericListResponse|object|null
     */
    public function members(Model\Request\MembersRequest $request)
    {
        return $this->getData(
            '/members',
            HttpClient::METHOD_GET,
            $request,
            self::GENERIC_LIST_RESPONSE,
            Serializer::S_ARRAY
        );
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
     * @return GenericListResponse|object|null
     */
    public function messages(Model\Request\MessagesRequest $request)
    {
        return $this->getData(
            '/messages',
            HttpClient::METHOD_GET,
            $request,
            self::GENERIC_LIST_RESPONSE,
            Serializer::S_ARRAY
        );
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
     * @return MessageSendResponse|object|null
     */
    public function messageSend(Model\Request\MessageSendRequest $request)
    {
        return $this->getData(
            '/messages',
            HttpClient::METHOD_POST,
            $request,
            self::RESPONSE_MODEL_CLASSPATH . 'MessageSendResponse'
        );
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
     * @return MessageSendResponse|object|null
     */
    public function messageEdit(Model\Request\MessageEditRequest $request)
    {
        return $this->getData(
            sprintf("/messages/%d", $request->getId()),
            HttpClient::METHOD_PATCH,
            $request,
            self::RESPONSE_MODEL_CLASSPATH . 'MessageSendResponse'
        );
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
     * @return ErrorOnlyResponse|object|null
     */
    public function messageDelete(string $request)
    {
        return $this->getData(
            sprintf("/messages/%d", $request),
            HttpClient::METHOD_DELETE,
            null,
            self::ERROR_ONLY_RESPONSE
        );
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
     * @return GenericListResponse|object|null
     */
    public function users(Model\Request\UsersRequest $request)
    {
        return $this->getData(
            '/users',
            HttpClient::METHOD_GET,
            $request,
            self::GENERIC_LIST_RESPONSE,
            Serializer::S_ARRAY
        );
    }
}
