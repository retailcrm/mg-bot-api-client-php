<?php

/**
 * PHP version 7.0
 *
 * Client Test
 *
 * @package  RetailCrm\Mg\Bot\Tests
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Tests;

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
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
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

        static::assertEquals(4, count($response), "Incorrect channels count");
        static::assertTrue($response[0] instanceof Channel\Channel, "Incorrect channel instance");
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

        static::assertEquals(2, count($response), "Incorrect chats count");
        static::assertTrue($response[0] instanceof Chat, "Incorrect chat instance");
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

        static::assertEquals(4, count($response), "Incorrect members count");
        static::assertTrue($response[0] instanceof ChatMember, "Incorrect member instance");
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

        $response = $client->messages($request);

        static::assertEquals(2, count($response), "Incorrect message count");
        static::assertTrue($response[0] instanceof Message, "Incorrect message instance");
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

        self::assertEquals(0, count($response), "Invalid commands count");
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

        static::assertEquals(3, count($data));
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

        self::assertEquals(2, count($response));
        self::assertTrue($response[0] instanceof User);
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

        self::assertEquals(2, count($response));
        self::assertTrue($response[0] instanceof Dialog);
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

        self::assertEquals(2, count($response));
        self::assertTrue($response[0] instanceof Customer);
    }
}
