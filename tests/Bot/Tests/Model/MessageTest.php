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
