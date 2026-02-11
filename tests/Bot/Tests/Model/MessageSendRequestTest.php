<?php

namespace RetailCrm\Mg\Bot\Tests\Model;

use PHPUnit\Framework\TestCase;
use RetailCrm\Common\Serializer;
use RetailCrm\Mg\Bot\Model\Request\MessageSendRequest;

class MessageSendRequestTest extends TestCase
{
    /**
     * @dataProvider dataProvider_massCommunication
     * @param bool $value
     */
    public function testSerialization_MassCommunication(bool $value): void
    {
        $request = new MessageSendRequest();
        $request->setMassCommunication($value);

        $result = Serializer::serialize($request, Serializer::S_ARRAY);

        self::assertEquals(['mass_communication' => $value], $result);
    }

    public function dataProvider_massCommunication(): array
    {
        return [
            [true],
            [false],
        ];
    }
}