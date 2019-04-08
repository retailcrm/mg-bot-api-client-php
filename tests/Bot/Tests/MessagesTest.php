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

use Exception;
use InvalidArgumentException;
use RetailCrm\Common\Exception\CurlException;
use RetailCrm\Common\Exception\InvalidJsonException;
use RetailCrm\Mg\Bot\Model\Constants;
use RetailCrm\Mg\Bot\Model\Request\CommandEditRequest;
use RetailCrm\Mg\Bot\Model\Request\MessageSendRequest;
use RetailCrm\Mg\Bot\Test\TestCase;

/**
 * PHP version 7.0
 *
 * Class MessagesTest
 *
 * @package RetailCrm\Mg\Bot\Tests
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class MessagesTest extends TestCase
{
    /**
     * @group("messages")
     * @throws \Exception
     */
    public function testMessageSend()
    {
        $client = self::getApiClient();

        $request = new MessageSendRequest();
        $request->setChatId(0);
        $request->setScope(Constants::MESSAGE_SCOPE_PUBLIC);
        $request->setContent("Hello");

        $request = $client->messageSend($request);

        self::assertEquals($request->getStatusCode(), 400);
    }
}
