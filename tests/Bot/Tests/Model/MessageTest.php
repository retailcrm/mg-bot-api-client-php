<?php

namespace RetailCrm\Mg\Bot\Tests\Model;

use RetailCrm\Common\Serializer;
use RetailCrm\Mg\Bot\Model\Entity\Message\Message;
use PHPUnit\Framework\TestCase;

class MessageTest extends TestCase
{
    /**
     * @dataProvider dataProvider_noContent
     * @param $content
     */
    public function testDeserialization_NoContent($content): void
    {
        $item = ['content' => $content];

        /** @var Message $result */
        $result = Serializer::deserialize($item, Message::class, Serializer::S_ARRAY);

        self::assertNull($result->getContent());
    }

    /**
     * @dataProvider dataProvider_withContent
     * @param $content
     */
    public function testDeserialization_WithContent($content): void
    {
        $item = ['content' => $content];

        /** @var Message $result */
        $result = Serializer::deserialize($item, Message::class, Serializer::S_ARRAY);

        self::assertNotNull($result->getContent());
        self::assertEquals($content, $result->getContent());
    }

    public function testDeserializationWithQuoute(): void
    {
        $json = file_get_contents(__DIR__ . '/../../../Resources/messageWithQuote.json');
        /** @var Message $message */
        $message = Serializer::deserialize($json, Message::class);

        self::assertEquals(3373, $message->getId());
        self::assertNotNull($message->getQuote());
        self::assertEquals("22144962", $message->getQuote()->getId());
        self::assertEquals("text", $message->getQuote()->getType());
        self::assertEquals("11111", $message->getQuote()->getFrom()->getId());
        self::assertEquals("Something content", $message->getQuote()->getContent());
        self::assertNotNull($message->getQuote()->getTime());
    }

    public function testSerialization_NoContent(): void
    {
        $item = new Message();

        $result = Serializer::serialize($item);

        self::assertEquals('{}', $result);
    }

    /**
     * @dataProvider dataProvider_withContent
     * @param $content
     * @param $json
     */
    public function testSerialization_WithContent($content, $json): void
    {
        $item = new Message();
        $item->setContent($content);

        $result = Serializer::serialize($item);

        self::assertEquals($json, $result);
    }

    public function dataProvider_noContent(): array
    {
        return [
            [null],
        ];
    }

    public function dataProvider_withContent(): array
    {
        return [
            ['', '{"content":""}'],
            ['0', '{"content":"0"}'],
            ['Something', '{"content":"Something"}'],
        ];
    }
}
