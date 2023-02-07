<?php

namespace RetailCrm\Mg\Bot\Tests\Model;

use PHPStan\Testing\TestCase;
use RetailCrm\Common\Serializer;
use RetailCrm\Mg\Bot\Model\Request\BotsRequest;
use RetailCrm\Mg\Bot\Model\Request\ChannelsRequest;
use RetailCrm\Mg\Bot\Model\Request\ChatsRequest;
use RetailCrm\Mg\Bot\Model\Request\CustomersRequest;
use RetailCrm\Mg\Bot\Model\Request\DialogsRequest;
use RetailCrm\Mg\Bot\Model\Request\MembersRequest;
use RetailCrm\Mg\Bot\Model\Request\UsersRequest;

class ListEntityRequestTest extends TestCase
{
    private const LIMIT = 100;

    public function testListRequestsWithLimit(): void
    {
        $expected = json_encode(['limit' => self::LIMIT]);
        $request = new BotsRequest();
        $request->setLimit(self::LIMIT);

        self::assertEquals($expected, Serializer::serialize($request));

        $request = new ChannelsRequest();
        $request->setLimit(self::LIMIT);

        self::assertEquals($expected, Serializer::serialize($request));

        $request = new ChatsRequest();
        $request->setLimit(self::LIMIT);

        self::assertEquals($expected, Serializer::serialize($request));

        $request = new CustomersRequest();
        $request->setLimit(self::LIMIT);

        self::assertEquals($expected, Serializer::serialize($request));

        $request = new DialogsRequest();
        $request->setLimit(self::LIMIT);

        self::assertEquals($expected, Serializer::serialize($request));

        $request = new MembersRequest();
        $request->setLimit(self::LIMIT);

        self::assertEquals($expected, Serializer::serialize($request));

        $request = new UsersRequest();
        $request->setLimit(self::LIMIT);

        self::assertEquals($expected, Serializer::serialize($request));
    }
}
