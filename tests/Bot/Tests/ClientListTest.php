<?php

/**
 * PHP version 7.1
 *
 * Client Test
 *
 * @package  RetailCrm\Mg\Bot\Tests
 */

namespace RetailCrm\Mg\Bot\Tests;

use Psr\Http\Message\ResponseInterface;
use RetailCrm\Mg\Bot\Client;
use RetailCrm\Mg\Bot\HttpClient;
use RetailCrm\Mg\Bot\Model\Constants;
use RetailCrm\Mg\Bot\Model\Entity\Channel;
use RetailCrm\Mg\Bot\Model\Entity\Chat\Chat;
use RetailCrm\Mg\Bot\Model\Entity\Chat\ChatMember;
use RetailCrm\Mg\Bot\Model\Entity\Customer;
use RetailCrm\Mg\Bot\Model\Entity\Dialog;
use RetailCrm\Mg\Bot\Model\Entity\Message\Message;
use RetailCrm\Mg\Bot\Model\Entity\User;
use RetailCrm\Mg\Bot\Model\Request;
use RetailCrm\Mg\Bot\Test\TestCase;

/**
 * PHP version 7.0
 *
 * Class ClientListTest
 *
 * @package RetailCrm\Mg\Bot\Tests
 */
class ClientListTest extends TestCase
{
    /**
     * @group("list")
     * @throws \Exception
     */
    public function testChannels()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getJsonResponse('channels')
        );

        $request = new Request\ChannelsRequest();
        $request->setActive(true);
        $request->setTypes([Constants::CHANNEL_TYPE_TELEGRAM, Constants::CHANNEL_TYPE_INSTAGRAM]);

        $response = $client->channels($request);

        static::assertCount(5, $response, "Incorrect channels count");
        static::assertInstanceOf(Channel\Channel::class, $response[0], "Incorrect channel instance");

        $textSuggestions = $response[0]->getSettings()->getSuggestions()->getText();
        static::assertStringContainsString("both", $textSuggestions, "Incorrect text suggestions");
    }

    /**
     * @group("list")
     * @throws \Exception
     */
    public function testChats()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getJsonResponse('chats')
        );

        $request = new Request\ChatsRequest();
        $request->setChannelType(Constants::CHANNEL_TYPE_TELEGRAM);

        $response = $client->chats($request);

        static::assertCount(3, $response, "Incorrect chats count");
        static::assertInstanceOf(Chat::class, $response[0], "Incorrect chat instance");
    }

    /**
     * @group("list")
     * @throws \Exception
     */
    public function testGetChatsByCustomerId(): void
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getJsonResponse('chatsByCustomerId')
        );

        $request = new Request\ChatsRequest();
        $request->setCustomerId(39);

        $response = $client->chats($request);
        static::assertCount(1, $response, "Incorrect chats count");
        static::assertInstanceOf(Chat::class, $response[0], "Incorrect chat instance");
    }

    /**
     * @group("list")
     * @throws \Exception
     */
    public function testMembers()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getJsonResponse('members')
        );

        $request = new Request\MembersRequest();
        $response = $client->members($request);

        static::assertCount(5, $response, "Incorrect members count");
        static::assertInstanceOf(ChatMember::class, $response[0], "Incorrect member instance");
    }

    /**
     * @group("list")
     * @throws \Exception
     */
    public function testMessages()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getJsonResponse('messages')
        );

        $request = new Request\MessagesRequest();
        $request->setChannelType(Constants::CHANNEL_TYPE_INSTAGRAM);
        $request->setType(Constants::MESSAGE_TYPE_TEXT);
        $request->setLimit(1000);

        $response = $client->messages($request);

        static::assertCount(3, $response, "Incorrect message count");
        static::assertInstanceOf(Message::class, $response[0], "Incorrect message instance");
    }

    /**
     * @group("list")
     * @throws \Exception
     */
    public function testCommands()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getResponse('[]')
        );

        $request = new Request\CommandsRequest();
        $response = $client->commands($request);

        self::assertCount(0, $response, "Invalid commands count");
    }

    /**
     * @group("list")
     * @throws \Exception
     */
    public function testBots()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getJsonResponse('bots')
        );

        $request = new Request\BotsRequest();
        $request->setActive(1);
        $request->setRoles([Constants::BOT_ROLE_RESPONSIBLE]);

        $data = $client->bots($request);

        static::assertCount(4, $data);
    }

    /**
     * @group("list")
     * @throws \Exception
     */
    public function testUsers()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getJsonResponse('users')
        );

        $request = new Request\UsersRequest();
        $request->setActive(1);
        $request->setOnline(0);

        $response = $client->users($request);

        self::assertCount(3, $response);
        self::assertInstanceOf(User::class, $response[0]);
    }

    /**
     * @group("list")
     * @throws \Exception
     */
    public function testDialogs()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getJsonResponse('dialogs')
        );

        $request = new Request\DialogsRequest();
        $request->setActive(1);
        $request->setAssign(1);

        $response = $client->dialogs($request);

        self::assertCount(3, $response);
        self::assertInstanceOf(Dialog::class, $response[0]);
    }

    /**
     * @group("list")
     * @throws \Exception
     */
    public function testCustomers()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getJsonResponse('customers')
        );

        $request = new Request\CustomersRequest();

        $response = $client->customers($request);

        self::assertCount(3, $response);
        self::assertInstanceOf(Customer::class, $response[0]);

        $utm = $response[0]->getUtm()->getCampaign();
        static::assertEquals('spring_sale', $utm, "Incorrect utm data");
    }
}
