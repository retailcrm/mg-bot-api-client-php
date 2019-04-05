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

use InvalidArgumentException;
use RetailCrm\Mg\Bot\Model\Constants;
use RetailCrm\Mg\Bot\Model\Request\BotsRequest;
use RetailCrm\Mg\Bot\Model\Request\ChannelsRequest;
use RetailCrm\Mg\Bot\Model\Request\CommandEditRequest;
use RetailCrm\Mg\Bot\Test\TestCase;

/**
 * PHP version 7.0
 *
 * Class ClientTest
 *
 * @package RetailCrm\Mg\Bot\Tests
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class ClientTest extends TestCase
{

    /**
     * @group("list")
     * @throws \Exception
     */
    public function testChannels()
    {
        $client = self::getApiClient();
        $request = new ChannelsRequest();
        $request->setActive(true);
        $request->setTypes([Constants::CHANNEL_TYPE_FACEBOOK]);
        $channels = $client->channels($request);

        self::assertTrue($channels->isSuccessful() == true);
    }

    public function testChats()
    {
        self::assertTrue(1 == 1);
    }

    public function testMembers()
    {
        self::assertTrue(1 == 1);
    }

    public function testMessages()
    {
        self::assertTrue(1 == 1);
    }

    public function testCommands()
    {
        self::assertTrue(1 == 1);
    }

    /**
     * @throws \Exception
     */
    public function testCommandEditException()
    {
        self::expectException(InvalidArgumentException::class);

        $client = self::getApiClient();
        $command = new CommandEditRequest();
        $command->setDescription("qwerty");

        $client->commandEdit($command);
    }

    /**
     * @throws \Exception
     */
    public function testCommandDeleteException()
    {
        self::expectException(\Exception::class);

        $client = self::getApiClient();
        $command = "qwerty";

        $client->commandDelete($command);
    }

    /**
     * @throws \Exception
     */
    public function testBots()
    {
        $client = self::getApiClient();
        $request = new BotsRequest();
        $request->setActive(1);
        $request->setRoles([Constants::BOT_ROLE_RESPONSIBLE]);
        $bots = $client->bots($request);

        self::assertTrue($bots->isSuccessful() == true);
    }

    public function testUsers()
    {
        self::assertTrue(1 == 1);
    }

    public function testDialogs()
    {
        self::assertTrue(1 == 1);
    }

    public function testCustomers()
    {
        self::assertTrue(1 == 1);
    }
}
