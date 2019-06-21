<?php

/**
 * PHP version 7.0
 *
 * Upload file Test
 *
 * @package  RetailCrm\Mg\Bot\Tests
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Tests;

use RetailCrm\Mg\Bot\Model\Constants;
use RetailCrm\Mg\Bot\Model\Request\MessageSendRequest;
use RetailCrm\Mg\Bot\Model\Response\FullFileResponse;
use RetailCrm\Mg\Bot\Model\Response\UploadFileResponse;
use RetailCrm\Mg\Bot\Test\TestCase;

/**
 * PHP version 7.0
 *
 * Class UploadFileTest
 *
 * @package RetailCrm\Mg\Bot\Tests
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class FileTest extends TestCase
{
    /**
     * @group("upload")
     * @throws \Exception
     */
    public function testUploadFileByUrlException()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getEmptyResponse(400)
        );

        self::expectException(\InvalidArgumentException::class);
        $client->uploadFileByUrl('');
        $client->uploadFileByUrl('rar');
    }

    /**
     * @group("upload")
     * @throws \Exception
     */
    public function testUploadFileByUrl()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getResponse('{"id":"881712bb-4062-4973-9e23-3373135836e2","type":"image","size":3773}')
        );

        $response = $client->uploadFileByUrl('https://2ip.ru/images/logo.gif');

        self::assertTrue($response->isSuccessful());
        self::assertEquals('881712bb-4062-4973-9e23-3373135836e2', $response->getId());
        self::assertEquals('image', $response->getType());
        self::assertEquals('3773', $response->getSize());
    }

    /**
     * @group("upload")
     * @throws \Exception
     */
    public function testUploadFileViaForm()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getResponse('{"id":"b2bdba90-166c-4e0a-829d-69f26a09fd2a","type":"file","size":214}')
        );

        $response = $client->uploadFile(__FILE__);

        self::assertTrue($response instanceof UploadFileResponse);
        self::assertEquals('b2bdba90-166c-4e0a-829d-69f26a09fd2a', $response->getId());
        self::assertEquals('file', $response->getType());
        self::assertEquals(214, $response->getSize());
    }

    /**
     * @group("upload")
     * @throws \Exception
     */
    public function testGetFileById()
    {
        $fileId = 'b2bdba90-166c-4e0a-829d-69f26a09fd2a';
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getJsonResponse('getFile')
        );

        $response = $client->getFileById($fileId);

        self::assertTrue($response instanceof FullFileResponse);
        self::assertEquals($fileId, $response->getId());
    }
}
