<?php

namespace RetailCrm\Mg\Bot\Tests;

use RetailCrm\Common\Exception\NotFoundException;
use RetailCrm\Mg\Bot\Model\Request\TemplateSendRequest;
use RetailCrm\Mg\Bot\Model\Response\MessageSendResponse;
use RetailCrm\Mg\Bot\Test\TestCase;
use RetailCrm\Mg\Bot\Model\Entity\Template;

/**
 * PHP version 7.0
 *
 * Class TemplatesTest
 *
 * @package RetailCrm\Mg\Bot\Tests
 */
class TemplatesTest extends TestCase
{
    /**
     * @group("templates")
     * @throws \Exception
     */
    public function testTemplatesList()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getJsonResponse('templates')
        );

        $response = $client->templates();

        static::assertCount(2, $response, "Incorrect templates count");
        static::assertInstanceOf(Template\Template::class, $response[0], "Incorrect template instance");

        $templateType = $response[0]->getHeader()['content']['type'];
        static::assertStringContainsString("video", $templateType, "Incorrect template type");
    }

    /**
     * @group("templates")
     * @throws \Exception
     */
    public function testTemplateSendNotFound()
    {
        $this->expectException(NotFoundException::class);

        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getErrorsResponse(404, "template id=3 was not found")
        );

        $request = new TemplateSendRequest();
        $request->setPhone('123');

        $client->templateSend(3, $request);
    }

    /**
     * @group("templates")
     * @throws \Exception
     */
    public function testTemplateSendVariablesError()
    {
        $this->expectException(NotFoundException::class);

        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getErrorsResponse(404, "variables number doesn't match template")
        );

        $request = new TemplateSendRequest();
        $request->setPhone('123');

        $client->templateSend(2, $request);
    }

    /**
     * @group("templates")
     * @throws \Exception
     */
    public function testTemplateSendSuccess()
    {
        $client = self::getApiClient(
            null,
            null,
            false,
            $this->getResponse(
                '{"message_id":4242,"time":"2019-06-24T06:02:04.434291791Z"}',
                201
            )
        );

        $request = new TemplateSendRequest();
        $request->setPhone('123');

        $response = $client->templateSend(1, $request);

        self::assertInstanceOf(MessageSendResponse::class, $response);

        if ($response instanceof MessageSendResponse) {
            self::assertTrue($response->isSuccessful());
            self::assertCount(0, $response->getErrors());
            self::assertEquals(4242, $response->getMessageId());
        }
    }
}
