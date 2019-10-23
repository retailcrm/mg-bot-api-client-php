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
use RetailCrm\Mg\Bot\Model\Entity\Message\MessageCost;
use RetailCrm\Mg\Bot\Model\Entity\Message\MessageDelivery;
use RetailCrm\Mg\Bot\Model\Entity\Message\MessageOrder;
use RetailCrm\Mg\Bot\Model\Entity\Message\MessageOrderItem;
use RetailCrm\Mg\Bot\Model\Entity\Message\MessageOrderPaymentStatus;
use RetailCrm\Mg\Bot\Model\Entity\Message\MessageProduct;
use RetailCrm\Mg\Bot\Model\Entity\Message\MessageQuantity;
use RetailCrm\Mg\Bot\Model\Entity\Message\MessageStatus;
use RetailCrm\Mg\Bot\Model\Request\MessageEditRequest;
use RetailCrm\Mg\Bot\Model\Request\MessageSendRequest;
use RetailCrm\Mg\Bot\Model\Response\MessageSendResponse;
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
        $this->expectException(\RuntimeException::class);
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

        $client->messageSend($request);
    }

    /**
     * @group("messages")
     * @throws \Exception
     */
    public function testMessageSendText()
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

        self::assertInstanceOf(MessageSendResponse::class, $response);

        if ($response instanceof MessageSendResponse) {
            self::assertTrue($response->isSuccessful());
            self::assertCount(0, $response->getErrors());
            self::assertEquals(3636, $response->getMessageId());
        }
    }

    /**
     * @group("messages")
     * @throws \Exception
     */
    public function testMessageSendOrder()
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

        $cost = new MessageCost();
        $cost->setCurrency("₽");
        $cost->setValue(500);

        $delivery = new MessageDelivery();
        $delivery->setAddress('address');
        $delivery->setComment('comment');
        $delivery->setName('test delivery');
        $delivery->setPrice($cost);

        $quantity = new MessageQuantity();
        $quantity->setUnit('pcs');
        $quantity->setValue(1);

        $item = new MessageOrderItem();
        $item->setName('product');
        $item->setPrice($cost);
        $item->setImg('https://example.com/image.jpeg');
        $item->setQuantity($quantity);
        $item->setUrl('https://example.com');

        $orderStatus = new MessageStatus();
        $orderStatus->setName('name');
        $orderStatus->setCode('code');

        $payment = new MessageOrderPaymentStatus();
        $payment->setName('card');
        $payment->setPayed(true);

        $order = new MessageOrder();
        $order->setCost($cost);
        $order->setDelivery($delivery);
        $order->setDate(date('Y-m-d\TH:i:s\.u\Z'));
        $order->setItems([$item]);
        $order->setUrl('https://example.com');
        $order->setNumber('2038C');
        $order->setPayments([$payment]);
        $order->setStatus($orderStatus);

        $request = new MessageSendRequest();
        $request->setChatId(28);
        $request->setType(Constants::MESSAGE_TYPE_ORDER);
        $request->setScope(Constants::MESSAGE_SCOPE_PUBLIC);
        $request->setOrder($order);

        $response = $client->messageSend($request);

        self::assertInstanceOf(MessageSendResponse::class, $response);

        if ($response instanceof MessageSendResponse) {
            self::assertTrue($response->isSuccessful());
            self::assertCount(0, $response->getErrors());
            self::assertEquals(3636, $response->getMessageId());
        }
    }

    /**
     * @group("messages")
     * @throws \Exception
     */
    public function testMessageSendProduct()
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

        $cost = new MessageCost();
        $cost->setCurrency("₽");
        $cost->setValue(500);

        $quantity = new MessageQuantity();
        $quantity->setUnit('pcs');
        $quantity->setValue(1);

        $product = new MessageProduct();
        $product->setId(1);
        $product->setName('product');
        $product->setUrl('https://example.com');
        $product->setImg('https://example.com/image.jpg');
        $product->setQuantity($quantity);
        $product->setCost($cost);
        $product->setArticle('article');

        $request = new MessageSendRequest();
        $request->setChatId(28);
        $request->setType(Constants::MESSAGE_TYPE_PRODUCT);
        $request->setScope(Constants::MESSAGE_SCOPE_PUBLIC);
        $request->setProduct($product);

        $response = $client->messageSend($request);

        self::assertInstanceOf(MessageSendResponse::class, $response);

        if ($response instanceof MessageSendResponse) {
            self::assertTrue($response->isSuccessful());
            self::assertCount(0, $response->getErrors());
            self::assertEquals(3636, $response->getMessageId());
        }
    }

    /**
     * @group("messages")
     * @throws \Exception
     */
    public function testMessageEditError()
    {
        $this->expectException(\RuntimeException::class);
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

        $client->messageEdit($request);
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
        self::assertCount(0, $response->getErrors());
    }

    /**
     * @group("messages")
     * @throws \Exception
     */
    public function testMessageDeleteError()
    {
        $this->expectException(\RuntimeException::class);
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getErrorsResponse(
                400,
                'Incorrect message_id'
            )
        );

        $client->messageDelete('0');
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
        self::assertCount(0, $response->getErrors());
    }
}
