<?php

namespace RetailCrm\Mg\Bot\Tests\Model;

use PHPStan\Testing\TestCase;
use RetailCrm\Common\Serializer;
use RetailCrm\Mg\Bot\Model\Request\BotsRequest;
use RetailCrm\Mg\Bot\Model\Request\ChannelsRequest;
use RetailCrm\Mg\Bot\Model\Request\ChatsRequest;
use RetailCrm\Mg\Bot\Model\Request\CommandsRequest;
use RetailCrm\Mg\Bot\Model\Request\CustomersRequest;
use RetailCrm\Mg\Bot\Model\Request\DialogsRequest;
use RetailCrm\Mg\Bot\Model\Request\MembersRequest;
use RetailCrm\Mg\Bot\Model\Request\MessagesRequest;
use RetailCrm\Mg\Bot\Model\Request\UsersRequest;

class ListEntityRequestTest extends TestCase
{
    private const LIMIT = 100;
    private const SINCE_ID = 123;
    private const UNTIL_ID = 456;

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

    public function testListRequestsWithSinceAndUntilIds(): void
    {
        $expected = ['since_id' => self::SINCE_ID, 'until_id' => self::UNTIL_ID];

        $request = new BotsRequest();
        $request->setSinceId(self::SINCE_ID);
        $request->setUntilId(self::UNTIL_ID);
        self::assertEquals($expected, Serializer::serialize($request, Serializer::S_ARRAY));

        $request = new ChannelsRequest();
        $request->setSinceId(self::SINCE_ID);
        $request->setUntilId(self::UNTIL_ID);
        self::assertEquals($expected, Serializer::serialize($request, Serializer::S_ARRAY));

        $request = new CommandsRequest();
        $request->setSinceId(self::SINCE_ID);
        $request->setUntilId(self::UNTIL_ID);
        self::assertEquals($expected, Serializer::serialize($request, Serializer::S_ARRAY));

        $request = new CustomersRequest();
        $request->setSinceId(self::SINCE_ID);
        $request->setUntilId(self::UNTIL_ID);
        self::assertEquals($expected, Serializer::serialize($request, Serializer::S_ARRAY));

        $request = new MembersRequest();
        $request->setSinceId(self::SINCE_ID);
        $request->setUntilId(self::UNTIL_ID);
        self::assertEquals($expected, Serializer::serialize($request, Serializer::S_ARRAY));

        $request = new UsersRequest();
        $request->setSinceId(self::SINCE_ID);
        $request->setUntilId(self::UNTIL_ID);
        self::assertEquals($expected, Serializer::serialize($request, Serializer::S_ARRAY));

        $request = new MessagesRequest();
        $request->setSinceId(self::SINCE_ID);
        $request->setUntilId(self::UNTIL_ID);
        self::assertEquals($expected, Serializer::serialize($request, Serializer::S_ARRAY));
    }

    public function testChatsRequestWithUntilId(): void
    {
        $request = new ChatsRequest();
        $request->setUntilId(self::UNTIL_ID);

        self::assertEquals(['until_id' => self::UNTIL_ID], Serializer::serialize($request, Serializer::S_ARRAY));
    }

    public function testDialogsRequestWithUntilId(): void
    {
        $request = new DialogsRequest();
        $request->setUntilId(self::UNTIL_ID);

        self::assertEquals(['until_id' => self::UNTIL_ID], Serializer::serialize($request, Serializer::S_ARRAY));
    }
}
