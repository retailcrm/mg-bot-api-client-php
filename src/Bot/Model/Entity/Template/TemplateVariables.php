<?php

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
     * @var array $header
     *
     * @Type("array")
     * @Accessor(getter="getHeader",setter="setHeader")
     */
    private $header;

    /**
     * @var array $body
     *
     * @Type("array")
     * @Accessor(getter="getBody",setter="setBody")
     */
    private $body;

    /**
     * @var array<array> $buttons
     *
     * @Type("array")
     * @Accessor(getter="getButtons",setter="setButtons")
     */
    private $buttons;

    /**
     * @return array|null
     */
    public function getHeader(): ?array
    {
        return $this->header;
    }

    /**
     * @param array $header
     */
    public function setHeader(array $header): void
    {
        $this->header = $header;
    }

    /**
     * @return array|null
     */
    public function getBody(): ?array
    {
        return $this->body;
    }

    /**
     * @param array $body
     */
    public function setBody(array $body): void
    {
        $this->body = $body;
    }

    /**
     * @return array[]|null
     */
    public function getButtons(): ?array
    {
        return $this->buttons;
    }

    /**
     * @param array[] $buttons
     */
    public function setButtons(array $buttons): void
    {
        $this->buttons = $buttons;
    }
}
