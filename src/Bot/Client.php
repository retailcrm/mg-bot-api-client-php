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

use RetailCrm\Common\Exception\InvalidJsonException;
use RetailCrm\Common\Url;
use RetailCrm\Common\Serializer;
use RetailCrm\Mg\Bot\Model\Request\GetFileRequest;
use RetailCrm\Mg\Bot\Model\Request\UploadFileByUrlRequest;
use RetailCrm\Mg\Bot\Model\Response\FullFileResponse;
use RetailCrm\Mg\Bot\Model\Response\ListResponse;

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
    /**
     * @internal
     */
    const VERSION = 'v1';

    /**
     * @internal
     */
    const ERROR_ONLY_RESPONSE = 'ErrorOnlyResponse';

    /**
     * @var HttpClient
     */
    protected $client;

    /**
     * Init
     *
     * @param string $url   MG API URL
     * @param string $token MG API Key
     * @param bool   $debug Enable or disable debug mode - will log all requests to STDOUT (default: false)
     * @param \GuzzleHttp\HandlerStack $handler GuzzleHttp::HandlerStack instance (default: null)
     */
    public function __construct($url, $token, $debug = false, $handler = null)
    {
        $url = sprintf("%sapi/bot/%s", Url::normalizeUrl($url), self::VERSION);
        $this->client = new HttpClient($url, $token, $debug ? STDOUT : null, $handler);
    }

    /**
     * @param string      $path
     * @param string      $method
     * @param object|null $request Request parameters
     * @param string      $responseType
     * @param string      $serializeTo
     * @param bool        $arrayOfObjects
     *
     * @return object|null
     * @throws \Exception
     */
    private function submitRequest(
        $path,
        $method,
        $request,
        $responseType,
        $serializeTo = Serializer::S_JSON,
        $arrayOfObjects = false
    ) {
        $response = $this->client->makeRequest(
            $path,
            $method,
            $request,
            $serializeTo
        );

        $data = json_decode((string) $response->getBody(), true);

        if (json_last_error() == JSON_ERROR_NONE) {
            if ($arrayOfObjects) {
                return new ListResponse($responseType, $data);
            } else {
                $obj = Serializer::deserialize($data, $responseType, Serializer::S_ARRAY);

                if ($response->getStatusCode() >= 400
                    && method_exists($obj, 'setErrors')
                    && method_exists($obj, 'getErrors')
                    && count(call_user_func([$obj, 'getErrors'])) == 0
                ) {
                    call_user_func_array([$obj, 'setErrors'], [['Status Code ' . $response->getStatusCode()]]);
                }

                return $obj;
            }
        } else {
            throw new InvalidJsonException('Received invalid JSON', 1);
        }
    }

    /**
     * @param bool $fromRoot
     * @param string ...$classes
     *
     * @return string
     */
    private static function concatClasspath($fromRoot, ...$classes)
    {
        $path = '';

        foreach ($classes as $class) {
            if (empty($path) && !$fromRoot) {
                $path .= $class;
            } else {
                $path .= '\\' . $class;
            }
        }

        return $path;
    }

    /**
     * @param string ...$classes
     *
     * @return string
     */
    private static function getEntityClass(...$classes)
    {
        return static::concatClasspath(true, 'RetailCrm', 'Mg', 'Bot', 'Model', 'Entity', ...$classes);
    }

    /**
     * @param string ...$classes
     *
     * @return string
     */
    private static function getResponseClass(...$classes)
    {
        return static::concatClasspath(true, 'RetailCrm', 'Mg', 'Bot', 'Model', 'Response', ...$classes);
    }

    /**
     * Returns filtered bots list
     *
     * @param Model\Request\BotsRequest $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\Response\ListResponse|object
     * @throws \Exception
     */
    public function bots(Model\Request\BotsRequest $request)
    {
        return $this->submitRequest(
            '/bots',
            HttpClient::METHOD_GET,
            $request,
            static::getEntityClass('Bot'),
            Serializer::S_ARRAY,
            true
        );
    }

    /**
     * Edit bot info
     *
     * @param Model\Request\InfoRequest $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\Response\ErrorOnlyResponse|object
     * @throws \Exception
     */
    public function info(Model\Request\InfoRequest $request)
    {
        return $this->submitRequest(
            '/my/info',
            HttpClient::METHOD_PATCH,
            $request,
            static::getResponseClass(self::ERROR_ONLY_RESPONSE)
        );
    }

    /**
     * Returns filtered channels list
     *
     * @param Model\Request\ChannelsRequest $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\Response\ListResponse|object
     * @throws \Exception
     */
    public function channels(Model\Request\ChannelsRequest $request)
    {
        return $this->submitRequest(
            '/channels',
            HttpClient::METHOD_GET,
            $request,
            static::getEntityClass('Channel', 'Channel'),
            Serializer::S_ARRAY,
            true
        );
    }

    /**
     * Returns filtered chats list
     *
     * @param Model\Request\ChatsRequest $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\Response\ListResponse|object
     * @throws \Exception
     */
    public function chats(Model\Request\ChatsRequest $request)
    {
        return $this->submitRequest(
            '/chats',
            HttpClient::METHOD_GET,
            $request,
            static::getEntityClass('Chat', 'Chat'),
            Serializer::S_ARRAY,
            true
        );
    }

    /**
     * Returns filtered commands list
     *
     * @param Model\Request\CommandsRequest $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\Response\ListResponse|object
     * @throws \Exception
     */
    public function commands(Model\Request\CommandsRequest $request)
    {
        return $this->submitRequest(
            '/my/commands',
            HttpClient::METHOD_GET,
            $request,
            static::getEntityClass('Command'),
            Serializer::S_ARRAY,
            true
        );
    }

    /**
     * Edit commands for exact bot
     *
     * @param Model\Request\CommandEditRequest $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\Response\ErrorOnlyResponse|object
     * @throws \Exception
     */
    public function commandEdit(Model\Request\CommandEditRequest $request)
    {
        return $this->submitRequest(
            sprintf("/my/commands/%s", $request->getName()),
            HttpClient::METHOD_PUT,
            $request,
            static::getResponseClass(self::ERROR_ONLY_RESPONSE),
            Serializer::S_JSON
        );
    }

    /**
     * Delete command for exact bot
     *
     * @param string $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\Response\ErrorOnlyResponse|object
     * @throws \Exception
     */
    public function commandDelete(string $request)
    {
        return $this->submitRequest(
            sprintf("/my/commands/%s", $request),
            HttpClient::METHOD_DELETE,
            null,
            static::getResponseClass(self::ERROR_ONLY_RESPONSE),
            Serializer::S_JSON
        );
    }

    /**
     * Returns filtered customers list
     *
     * @param Model\Request\CustomersRequest $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\Response\ListResponse|object
     * @throws \Exception
     */
    public function customers(Model\Request\CustomersRequest $request)
    {
        return $this->submitRequest(
            '/customers',
            HttpClient::METHOD_GET,
            $request,
            static::getEntityClass('Customer'),
            Serializer::S_ARRAY,
            true
        );
    }

    /**
     * Returns filtered dialogs list
     *
     * @param Model\Request\DialogsRequest $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\Response\ListResponse|object
     * @throws \Exception
     */
    public function dialogs(Model\Request\DialogsRequest $request)
    {
        return $this->submitRequest(
            '/dialogs',
            HttpClient::METHOD_GET,
            $request,
            static::getEntityClass('Dialog'),
            Serializer::S_ARRAY,
            true
        );
    }

    /**
     * Assign dialog to exact user
     *
     * @param Model\Request\DialogAssignRequest $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\Response\AssignResponse|object
     * @throws \Exception
     */
    public function dialogAssign(Model\Request\DialogAssignRequest $request)
    {
        return $this->submitRequest(
            sprintf("/dialogs/%d/assign", $request->getDialogId()),
            HttpClient::METHOD_PATCH,
            $request,
            static::getResponseClass('AssignResponse'),
            Serializer::S_JSON
        );
    }

    /**
     * Close exact dialog
     *
     * @param string $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\Response\ErrorOnlyResponse|object
     * @throws \Exception
     */
    public function dialogClose(string $request)
    {
        return $this->submitRequest(
            sprintf("/dialogs/%d/close", $request),
            HttpClient::METHOD_DELETE,
            null,
            static::getResponseClass(self::ERROR_ONLY_RESPONSE)
        );
    }

    /**
     * Returns filtered members list
     *
     * @param Model\Request\MembersRequest $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\Response\ListResponse|object
     * @throws \Exception
     */
    public function members(Model\Request\MembersRequest $request)
    {
        return $this->submitRequest(
            '/members',
            HttpClient::METHOD_GET,
            $request,
            static::getEntityClass('Chat', 'ChatMember'),
            Serializer::S_ARRAY,
            true
        );
    }

    /**
     * Returns filtered messages list
     *
     * @param Model\Request\MessagesRequest $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\Response\ListResponse|object
     * @throws \Exception
     */
    public function messages(Model\Request\MessagesRequest $request)
    {
        return $this->submitRequest(
            '/messages',
            HttpClient::METHOD_GET,
            $request,
            self::getEntityClass('Message', 'Message'),
            Serializer::S_ARRAY,
            true
        );
    }

    /**
     * Send a message
     *
     * @param Model\Request\MessageSendRequest $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\Response\MessageSendResponse|object
     * @throws \Exception
     */
    public function messageSend(Model\Request\MessageSendRequest $request)
    {
        return $this->submitRequest(
            '/messages',
            HttpClient::METHOD_POST,
            $request,
            static::getResponseClass('MessageSendResponse')
        );
    }

    /**
     * Edit a message
     *
     * @param Model\Request\MessageEditRequest $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\Response\MessageSendResponse|object
     * @throws \Exception
     */
    public function messageEdit(Model\Request\MessageEditRequest $request)
    {
        return $this->submitRequest(
            sprintf("/messages/%d", $request->getId()),
            HttpClient::METHOD_PATCH,
            $request,
            static::getResponseClass('MessageSendResponse')
        );
    }

    /**
     * Delete a message
     *
     * @param string $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\Response\ErrorOnlyResponse|object
     * @throws \Exception
     */
    public function messageDelete(string $request)
    {
        return $this->submitRequest(
            sprintf("/messages/%d", $request),
            HttpClient::METHOD_DELETE,
            null,
            static::getResponseClass(self::ERROR_ONLY_RESPONSE)
        );
    }

    /**
     * Returns filtered users list
     *
     * @param Model\Request\UsersRequest $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\Response\ListResponse|object
     * @throws \Exception
     */
    public function users(Model\Request\UsersRequest $request)
    {
        return $this->submitRequest(
            '/users',
            HttpClient::METHOD_GET,
            $request,
            self::getEntityClass('User'),
            Serializer::S_ARRAY,
            true
        );
    }

    /**
     * Returns filtered users list
     *
     * @param string $url File URL
     *
     * @return \RetailCrm\Mg\Bot\Model\Response\UploadFileResponse|object
     * @throws \Exception
     */
    public function uploadFileByUrl(string $url)
    {
        $request = new UploadFileByUrlRequest();
        $request->setUrl($url);

        return $this->submitRequest(
            '/files/upload_by_url',
            HttpClient::METHOD_POST,
            $request,
            self::getResponseClass('UploadFileResponse')
        );
    }

    /**
     * @param string $filename
     * @return Model\Response\UploadFileResponse
     *
     * @throws \Exception
     */
    public function uploadFile(string $filename)
    {
        return $this->client->postFile($filename);
    }

    /**
     * @param string $fileId
     * @return Model\Response\FullFileResponse|null
     *
     * @throws \Exception
     */
    public function getFileById(string $fileId)
    {
        $obj = $this->submitRequest(
            \sprintf('/files/%s', $fileId),
            HttpClient::METHOD_GET,
            null,
            self::getResponseClass('FullFileResponse')
        );

        return ($obj instanceof FullFileResponse) ? $obj : null;
    }
}
