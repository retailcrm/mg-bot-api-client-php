<?php

/**
 * PHP version 7.1
 *
 * TemplateAttachment entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Template
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Template;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * TemplateAttachment class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Template
 */
class TemplateAttachment implements ModelInterface
{
    /**
     * @var string $header
     *
     * @Type("string")
     * @Accessor(getter="getId",setter="setId")
     */
    private $id;

    /**
     * @var string $header
     *
     * @Type("string")
     * @Accessor(getter="getCaption",setter="setCaption")
     * @SkipWhenEmpty()
     */
    private $caption;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return void
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * @param string $caption
     */
    public function setCaption(string $caption): void
    {
        $this->caption = $caption;
    }
}
