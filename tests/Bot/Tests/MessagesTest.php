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
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getResponse(
                '{"errors":["chat_id is a required field"]}',
                400
            )
        );

        $request = new MessageSendRequest();
        $request->setChatId(0);
        $request->setScope(Constants::MESSAGE_SCOPE_PUBLIC);
        $request->setContent("Hello");

        $response = $client->messageSend($request);

        self::assertTrue($response->isError());
        self::assertEquals(1, count($response->getErrors()));
    }
}
