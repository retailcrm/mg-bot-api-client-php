<?php

/**
 * PHP version 7.0
 *
 * Messages Test
 *
 * @package  RetailCrm\Mg\Bot\Tests
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Tests;

use RetailCrm\Mg\Bot\Model\Constants;
use RetailCrm\Mg\Bot\Model\Request\MessageEditRequest;
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
    public function testMessageSendError()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getErrorsResponse(
                400,
                'chat_id is a required field'
            )
        );

        $request = new MessageSendRequest();
        $request->setChatId(0);
        $request->setScope(Constants::MESSAGE_SCOPE_PUBLIC);
        $request->setContent("Hello");

        $response = $client->messageSend($request);

        self::assertTrue(!$response->isSuccessful());
        self::assertEquals(1, count($response->getErrors()));
    }

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
                '{"message_id":3636,"time":"2019-06-24T06:02:04.434291791Z"}',
                201
            )
        );

        $request = new MessageSendRequest();
        $request->setChatId(28);
        $request->setScope(Constants::MESSAGE_SCOPE_PUBLIC);
        $request->setContent("Hello");

        $response = $client->messageSend($request);

        self::assertTrue($response->isSuccessful());
        self::assertEquals(0, count($response->getErrors()));
        self::assertEquals(3636, $response->getMessageId());
    }

    /**
     * @group("messages")
     * @throws \Exception
     */
    public function testMessageEditError()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getErrorsResponse(
                400,
                'Incorrect message_id'
            )
        );

        $request = new MessageEditRequest();
        $request->setId(0);
        $request->setContent("Hello");

        $response = $client->messageEdit($request);

        self::assertTrue(!$response->isSuccessful());
        self::assertEquals(1, count($response->getErrors()));
    }

    /**
     * @group("messages")
     * @throws \Exception
     */
    public function testMessageEdit()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getResponse('{}', 200)
        );

        $request = new MessageEditRequest();
        $request->setId(3636);
        $request->setContent("123");

        $response = $client->messageEdit($request);

        self::assertTrue($response->isSuccessful());
        self::assertEquals(0, count($response->getErrors()));
    }

    /**
     * @group("messages")
     * @throws \Exception
     */
    public function testMessageDeleteError()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getErrorsResponse(
                400,
                'Incorrect message_id'
            )
        );

        $response = $client->messageDelete('0');

        self::assertTrue(!$response->isSuccessful());
        self::assertEquals(1, count($response->getErrors()));
    }

    /**
     * @group("messages")
     * @throws \Exception
     */
    public function testMessageDelete()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getResponse('{}', 200)
        );

        $response = $client->messageDelete('3636');

        self::assertTrue($response->isSuccessful());
        self::assertEquals(0, count($response->getErrors()));
    }
}
