<?php

/**
 * PHP version 7.1
 *
 * Client
 *
 * @package RetailCrm\Mg\Bot
 * @author  retailCRM <integration@retailcrm.ru>
 * @license https://opensource.org/licenses/MIT MIT License
 * @link    http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot;

use Psr\Http\Message\ResponseInterface;
use RetailCrm\Common\Url;
use RetailCrm\Common\Serializer;
use RetailCrm\Mg\Bot\Adapter\ModelAdapter;
use RetailCrm\Mg\Bot\Model\Entity\Bot;
use RetailCrm\Mg\Bot\Model\Entity\Channel\Channel;
use RetailCrm\Mg\Bot\Model\Entity\Chat\Chat;
use RetailCrm\Mg\Bot\Model\Entity\Chat\ChatMember;
use RetailCrm\Mg\Bot\Model\Entity\Command;
use RetailCrm\Mg\Bot\Model\Entity\Customer;
use RetailCrm\Mg\Bot\Model\Entity\Dialog;
use RetailCrm\Mg\Bot\Model\Entity\Message\Message;
use RetailCrm\Mg\Bot\Model\Entity\User;
use RetailCrm\Mg\Bot\Model\Request\UploadFileByUrlRequest;
use RetailCrm\Mg\Bot\Model\Response\AssignResponse;
use RetailCrm\Mg\Bot\Model\Response\ErrorOnlyResponse;
use RetailCrm\Mg\Bot\Model\Response\FullFileResponse;
use RetailCrm\Mg\Bot\Model\Response\MessageSendResponse;
use RetailCrm\Mg\Bot\Model\Response\UploadFileResponse;

/**
 * Class Client
 *
 * @package RetailCrm\Mg\Bot
 * @author  retailCRM <integration@retailcrm.ru>
 * @license https://opensource.org/licenses/MIT MIT License
 * @link    http://help.retailcrm.pro/docs/Developers
 */
class Client
{
    /**
     * @internal
     */
    const VERSION = 'v1';

    /**
     * @var HttpClient
     */
    protected $client;

    /**
     * Init
     *
     * @param string                   $url     MG API URL
     * @param string                   $token   MG API Key
     * @param bool                     $debug   Enable or disable debug mode - will log all requests to STDOUT (default: false)
     * @param \GuzzleHttp\HandlerStack $handler GuzzleHttp::HandlerStack instance (default: null)
     */
    public function __construct($url, $token, $debug = false, $handler = null)
    {
        $url = sprintf("%sapi/bot/%s", Url::normalizeUrl($url), self::VERSION);
        $this->client = new HttpClient($url, $token, $debug ? STDOUT : null, $handler);
    }

    /**
     * Returns filtered bots list
     *
     * @param Model\Request\BotsRequest $request Request parameters
     *
     * @return array
     * @throws \Exception
     */
    public function bots(Model\Request\BotsRequest $request): array
    {
        $response = $this->client->makeRequest(
            '/bots',
            HttpClient::METHOD_GET,
            $request
        );

        $adapter = new ModelAdapter(Bot::class);

        return $adapter->getResponseList($response);
    }

    /**
     * Edit bot info
     *
     * @param Model\Request\InfoRequest $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\ModelInterface
     * @throws \Exception
     */
    public function info(Model\Request\InfoRequest $request)
    {
        $response = $this->client->makeRequest(
            '/my/info',
            HttpClient::METHOD_PATCH,
            $request
        );

        $adapter = new ModelAdapter(ErrorOnlyResponse::class);

        return $adapter->getResponseModel($response);
    }

    /**
     * Returns filtered channels list
     *
     * @param Model\Request\ChannelsRequest $request Request parameters
     *
     * @return array
     * @throws \Exception
     */
    public function channels(Model\Request\ChannelsRequest $request): array
    {
        $response = $this->client->makeRequest(
            '/channels',
            HttpClient::METHOD_GET,
            $request
        );

        $adapter = new ModelAdapter(Channel::class);

        return $adapter->getResponseList($response);
    }

    /**
     * Returns filtered chats list
     *
     * @param Model\Request\ChatsRequest $request Request parameters
     *
     * @return array
     * @throws \Exception
     */
    public function chats(Model\Request\ChatsRequest $request): array
    {
        $response = $this->client->makeRequest(
            '/chats',
            HttpClient::METHOD_GET,
            $request
        );

        $adapter = new ModelAdapter(Chat::class);

        return $adapter->getResponseList($response);
    }

    /**
     * Returns filtered commands list
     *
     * @param Model\Request\CommandsRequest $request Request parameters
     *
     * @return array
     * @throws \Exception
     */
    public function commands(Model\Request\CommandsRequest $request): array
    {
        $response = $this->client->makeRequest(
            '/my/commands',
            HttpClient::METHOD_GET,
            $request
        );

        $adapter = new ModelAdapter(Command::class);

        return $adapter->getResponseList($response);
    }

    /**
     * Edit commands for exact bot
     *
     * @param Model\Request\CommandEditRequest $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\ModelInterface
     * @throws \Exception
     */
    public function commandEdit(Model\Request\CommandEditRequest $request)
    {
        $response = $this->client->makeRequest(
            sprintf("/my/commands/%s", $request->getName()),
            HttpClient::METHOD_PUT,
            $request
        );

        $adapter = new ModelAdapter(ErrorOnlyResponse::class);

        return $adapter->getResponseModel($response);
    }

    /**
     * Delete command for exact bot
     *
     * @param string $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\ModelInterface
     * @throws \Exception
     */
    public function commandDelete(string $request)
    {
        $response = $this->client->makeRequest(
            sprintf("/my/commands/%s", $request),
            HttpClient::METHOD_DELETE
        );

        $adapter = new ModelAdapter(ErrorOnlyResponse::class);

        return $adapter->getResponseModel($response);
    }

    /**
     * Returns filtered customers list
     *
     * @param Model\Request\CustomersRequest $request Request parameters
     *
     * @return array
     * @throws \Exception
     */
    public function customers(Model\Request\CustomersRequest $request): array
    {
        $response = $this->client->makeRequest(
            '/customers',
            HttpClient::METHOD_GET,
            $request
        );

        $adapter = new ModelAdapter(Customer::class);

        return $adapter->getResponseList($response);
    }

    /**
     * Returns filtered dialogs list
     *
     * @param Model\Request\DialogsRequest $request Request parameters
     *
     * @return array
     * @throws \Exception
     */
    public function dialogs(Model\Request\DialogsRequest $request): array
    {
        $response = $this->client->makeRequest(
            '/dialogs',
            HttpClient::METHOD_GET,
            $request
        );

        $adapter = new ModelAdapter(Dialog::class);

        return $adapter->getResponseList($response);
    }

    /**
     * Assign dialog to exact user
     *
     * @param Model\Request\DialogAssignRequest $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\ModelInterface
     * @throws \Exception
     */
    public function dialogAssign(Model\Request\DialogAssignRequest $request)
    {
        $response = $this->client->makeRequest(
            sprintf("/dialogs/%d/assign", $request->getDialogId()),
            HttpClient::METHOD_PATCH,
            $request
        );

        $adapter = new ModelAdapter(AssignResponse::class);

        return $adapter->getResponseModel($response);
    }

    /**
     * Close exact dialog
     *
     * @param string $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\ModelInterface
     * @throws \Exception
     */
    public function dialogClose(string $request)
    {
        $response = $this->client->makeRequest(
            sprintf("/dialogs/%d/close", $request),
            HttpClient::METHOD_DELETE,
            null
        );

        $adapter = new ModelAdapter(ErrorOnlyResponse::class);

        return $adapter->getResponseModel($response);
    }

    /**
     * Returns filtered members list
     *
     * @param Model\Request\MembersRequest $request Request parameters
     *
     * @return array
     * @throws \Exception
     */
    public function members(Model\Request\MembersRequest $request): array
    {
        $response = $this->client->makeRequest(
            '/members',
            HttpClient::METHOD_GET,
            $request
        );

        $adapter = new ModelAdapter(ChatMember::class);

        return $adapter->getResponseList($response);
    }

    /**
     * Returns filtered messages list
     *
     * @param Model\Request\MessagesRequest $request Request parameters
     *
     * @return array
     * @throws \Exception
     */
    public function messages(Model\Request\MessagesRequest $request): array
    {
        $response = $this->client->makeRequest(
            '/messages',
            HttpClient::METHOD_GET,
            $request
        );

        $adapter = new ModelAdapter(Message::class);

        return $adapter->getResponseList($response);
    }

    /**
     * Send a message
     *
     * @param Model\Request\MessageSendRequest $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\ModelInterface
     * @throws \Exception
     */
    public function messageSend(Model\Request\MessageSendRequest $request)
    {
        $response = $this->client->makeRequest(
            '/messages',
            HttpClient::METHOD_POST,
            $request
        );

        $adapter = new ModelAdapter(MessageSendResponse::class);

        return $adapter->getResponseModel($response);
    }

    /**
     * Edit a message
     *
     * @param Model\Request\MessageEditRequest $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\ModelInterface
     * @throws \Exception
     */
    public function messageEdit(Model\Request\MessageEditRequest $request)
    {
        $response = $this->client->makeRequest(
            sprintf("/messages/%d", $request->getId()),
            HttpClient::METHOD_PATCH,
            $request
        );

        $adapter = new ModelAdapter(MessageSendResponse::class);

        return $adapter->getResponseModel($response);
    }

    /**
     * Delete a message
     *
     * @param string $request Request parameters
     *
     * @return \RetailCrm\Mg\Bot\Model\ModelInterface
     * @throws \Exception
     */
    public function messageDelete(string $request)
    {
        $response = $this->client->makeRequest(
            sprintf("/messages/%d", $request),
            HttpClient::METHOD_DELETE,
            null
        );

        $adapter = new ModelAdapter(ErrorOnlyResponse::class);

        return $adapter->getResponseModel($response);
    }

    /**
     * Returns filtered users list
     *
     * @param Model\Request\UsersRequest $request Request parameters
     *
     * @return array
     * @throws \Exception
     */
    public function users(Model\Request\UsersRequest $request): array
    {
        $response = $this->client->makeRequest(
            '/users',
            HttpClient::METHOD_GET,
            $request
        );

        $adapter = new ModelAdapter(User::class);

        return $adapter->getResponseList($response);
    }

    /**
     * Returns filtered users list
     *
     * @param string $url File URL
     *
     * @return \RetailCrm\Mg\Bot\Model\ModelInterface
     * @throws \Exception
     */
    public function uploadFileByUrl(string $url)
    {
        $request = new UploadFileByUrlRequest();
        $request->setUrl($url);

        $response = $this->client->makeRequest(
            '/files/upload_by_url',
            HttpClient::METHOD_POST,
            $request
        );

        $adapter = new ModelAdapter(UploadFileResponse::class);

        return $adapter->getResponseModel($response);
    }

    /**
     * @param string $filename
     * @return \RetailCrm\Mg\Bot\Model\ModelInterface
     *
     * @throws \Exception
     */
    public function uploadFile(string $filename)
    {
        $obj = new ErrorOnlyResponse();
        $response = $this->client->postFile($filename);

        if ($response instanceof ResponseInterface) {
            $obj = Serializer::deserialize(
                (string) $response->getBody(),
                UploadFileResponse::class
            );
        }

        return $obj;
    }

    /**
     * @param string $fileId
     * @return \RetailCrm\Mg\Bot\Model\ModelInterface
     *
     * @throws \Exception
     */
    public function getFileById(string $fileId)
    {
        $response = $this->client->makeRequest(
            sprintf('/files/%s', $fileId),
            HttpClient::METHOD_GET,
            null
        );

        $adapter = new ModelAdapter(FullFileResponse::class);

        return $adapter->getResponseModel($response);
    }
}
