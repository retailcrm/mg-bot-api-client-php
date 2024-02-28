<?php

/**
 * PHP version 7.0
 *
 * Dialogs Test
 *
 * @package  RetailCrm\Mg\Bot\Tests
 * @category Test
 */

namespace RetailCrm\Mg\Bot\Tests;

use InvalidArgumentException;
use RetailCrm\Common\Exception\NotFoundException;
use RetailCrm\Mg\Bot\Model\Entity\Responsible;
use RetailCrm\Mg\Bot\Model\Entity\Tag;
use RetailCrm\Mg\Bot\Model\Request\DialogAssignRequest;
use RetailCrm\Mg\Bot\Model\Request\DialogTagRequest;
use RetailCrm\Mg\Bot\Model\Response\ErrorOnlyResponse;
use RetailCrm\Mg\Bot\Test\TestCase;

/**
 * PHP version 7.0
 *
 * Class DialogsTest
 *
 * @package RetailCrm\Mg\Bot\Tests
 */
class DialogsTest extends TestCase
{
    /**
     * @group("dialogs")
     * @throws \Exception
     */
    public function testDialogAssignError()
    {
        $this->expectException(\RuntimeException::class);
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getErrorsResponse(400, "incorrect dialog_id")
        );

        $request = new DialogAssignRequest();
        $request->setDialogId(-1);

        $client->dialogAssign($request);
    }

    /**
     * @group("dialogs")
     * @throws \Exception
     */
    public function testDialogAssign()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getJsonResponse('dialogReassigned')
        );

        $request = new DialogAssignRequest();
        $request->setDialogId(60);
        $request->setUserId(4);

        $response = $client->dialogAssign($request);

        self::assertTrue($response->isSuccessful());
        self::assertTrue($response->getIsReassign());
        self::assertTrue($response->getPreviousResponsible() instanceof Responsible);
        self::assertTrue($response->getResponsible() instanceof Responsible);
    }

    /**
     * @group("dialogs")
     * @throws \Exception
     */
    public function testDialogUnassignError()
    {
        $this->expectException(\RuntimeException::class);
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getErrorsResponse(400, "incorrect dialog_id")
        );

        $client->dialogUnassign(-1);
    }

    /**
     * @group("dialogs")
     * @throws \Exception
     */
    public function testDialogUnassign()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getJsonResponse('dialogUnassigned')
        );

        $response = $client->dialogUnassign(60);

        self::assertTrue($response->isSuccessful());
        self::assertTrue($response->getPreviousResponsible() instanceof Responsible);
    }

    /**
     * @group("dialogs")
     * @throws \Exception
     */
    public function testDialogCloseError()
    {
        self::expectException(NotFoundException::class);

        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getErrorsResponse(404, "dialog #2131231231 not found")
        );

        $client->dialogClose('2131231231');
    }

    /**
     * @group("dialogs")
     * @throws \Exception
     */
    public function testDialogClose()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getResponse('{}')
        );

        $response = $client->dialogClose('62');

        self::assertInstanceOF(ErrorOnlyResponse::class, $response);
        self::assertTrue($response->isSuccessful());
        self::assertEmpty($response->getErrors());
    }

    /**
     * @group("dialogs")
     * @throws \Exception
     */
    public function testDialogAddTag()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getResponse('{}')
        );

        $tags[0] = new Tag();
        $tags[0]->setName('tag1');
        $tags[0]->setColorCode('red');

        $tags[1] = new Tag();
        $tags[1]->setName('tag2');

        $request = new DialogTagRequest();
        $request->setDialogId(60);
        $request->setTags($tags);

        $response = $client->dialogAddTag($request);

        self::assertInstanceOF(ErrorOnlyResponse::class, $response);
        self::assertTrue($response->isSuccessful());
        self::assertEmpty($response->getErrors());
    }

    /**
     * @group("dialogs")
     * @throws \Exception
     */
    public function testDialogDeleteTag()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getResponse('{}')
        );

        $tags[0] = new Tag();
        $tags[0]->setName('tag1');

        $request = new DialogTagRequest();
        $request->setDialogId(60);
        $request->setTags($tags);

        $response = $client->dialogDeleteTag($request);

        self::assertInstanceOF(ErrorOnlyResponse::class, $response);
        self::assertTrue($response->isSuccessful());
        self::assertEmpty($response->getErrors());
    }
}
