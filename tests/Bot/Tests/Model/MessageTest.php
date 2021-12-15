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

    public function dataProvider_noContent(): array
    {
        return [
            [null],
        ];
    }

    public function dataProvider_withContent(): array
    {
        return [
            [''],
            ['0'],
            ['Something'],
        ];
    }
}
