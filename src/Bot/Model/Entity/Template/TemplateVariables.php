<?php

/**
 * PHP version 7.1
 *
 * TemplateVariables entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Template
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Template;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * TemplateVariables class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Template
 */
class TemplateVariables implements ModelInterface
{
    /**
     * @var array<string, string> $header
     *
     * @Type("array")
     * @Accessor(getter="getHeader",setter="setHeader")
     */
    private $header;


    /** @var array<TemplateAttachment> $attachments
     *
     * @Type("array")
     * @Accessor(getter="getAttachments",setter="setAttachments")
     */
    private $attachments;

    /**
     * @var array<string, string> $body
     *
     * @Type("array")
     * @Accessor(getter="getBody",setter="setBody")
     */
    private $body;

    /**
     * @var array<string, array<string, string>> $buttons
     *
     * @Type("array")
     * @Accessor(getter="getButtons",setter="setButtons")
     */
    private $buttons;

    /**
     * @return array<string, string>|null
     */
    public function getHeader(): ?array
    {
        return $this->header;
    }

    /**
     * @param array<string, string> $header
     */
    public function setHeader(array $header): void
    {
        $this->header = $header;
    }

    /**
     * @return array<string, string>|null
     */
    public function getBody(): ?array
    {
        return $this->body;
    }

    /**
     * @param array<string, string> $body
     */
    public function setBody(array $body): void
    {
        $this->body = $body;
    }

    /**
     * @return array<string, array<string, string>>|null
     */
    public function getButtons(): ?array
    {
        return $this->buttons;
    }

    /**
     * @param array<string, array<string, string>> $buttons
     */
    public function setButtons(array $buttons): void
    {
        $this->buttons = $buttons;
    }

    /**
     * @return TemplateAttachment[]|null
     */
    public function getAttachments(): ?array
    {
        return $this->attachments;
    }

    /**
     * @param TemplateAttachment[] $attachments
     */
    public function setAttachments(array $attachments): void
    {
        $this->attachments = $attachments;
    }
}
