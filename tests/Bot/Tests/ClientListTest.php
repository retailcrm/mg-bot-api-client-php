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
use RetailCrm\Mg\Bot\Model\Request;
use RetailCrm\Mg\Bot\Model\Response;
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
        $client = self::getApiClient();

        $request = new Request\ChannelsRequest();
        $request->setActive(true);
        $request->setTypes([Constants::CHANNEL_TYPE_FACEBOOK, Constants::CHANNEL_TYPE_INSTAGRAM]);

        $response = $client->channels($request);
        var_dump($response[0]);

        //self::assertTrue($response->isSuccessful() == true);
    }

    /**
     * @group("list")
     * @throws \Exception
     */
    public function testChats()
    {
        $client = self::getApiClient();

        $request = new Request\ChatsRequest();
        $request->setChannelType(Constants::CHANNEL_TYPE_FACEBOOK);

        $response = $client->chats($request);

        self::assertTrue($response->isSuccessful() == true);
    }

    /**
     * @group("list")
     * @throws \Exception
     */
    public function testMembers()
    {
        $client = self::getApiClient();

        $request = new Request\MembersRequest();

        $response = $client->members($request);

        self::assertTrue($response->isSuccessful() == true);
    }

    /**
     * @group("list")
     * @throws \Exception
     */
    public function testMessages()
    {
        $client = self::getApiClient();

        $request = new Request\MessagesRequest();
        $request->setChannelType(Constants::CHANNEL_TYPE_INSTAGRAM);
        $request->setType(Constants::MESSAGE_TYPE_TEXT);

        $response = $client->messages($request);

        self::assertTrue($response->isSuccessful() == true);
    }

    /**
     * @group("list")
     * @throws \Exception
     */
    public function testCommands()
    {
        $client = self::getApiClient();

        $request = new Request\CommandsRequest();

        $response = $client->commands($request);

        self::assertTrue($response->isSuccessful() == true);
    }

    /**
     * @group("list")
     * @throws \Exception
     */
    public function testBots()
    {
        $client = self::getApiClient();

        $request = new Request\BotsRequest();
        $request->setActive(1);
        $request->setRoles([Constants::BOT_ROLE_RESPONSIBLE]);

        $data = $client->bots($request);

        self::assertTrue($data instanceof \RetailCrm\Mg\Bot\Model\Response\GenericListResponse);
    }

    /**
     * @group("list")
     * @throws \Exception
     */
    public function testUsers()
    {
        $client = self::getApiClient();

        $request = new Request\UsersRequest();
        $request->setActive(1);
        $request->setOnline(0);

        $response = $client->users($request);

        self::assertTrue($response->isSuccessful() == true);
    }

    /**
     * @group("list")
     * @throws \Exception
     */
    public function testDialogs()
    {
        $client = self::getApiClient();

        $request = new Request\DialogsRequest();
        $request->setActive(1);
        $request->setAssign(1);

        $response = $client->dialogs($request);

        self::assertTrue($response->isSuccessful() == true);
    }

    /**
     * @group("list")
     * @throws \Exception
     */
    public function testCustomers()
    {
        $client = self::getApiClient();

        $request = new Request\CustomersRequest();

        $response = $client->customers($request);

        self::assertTrue($response->isSuccessful() == true);
    }
}
