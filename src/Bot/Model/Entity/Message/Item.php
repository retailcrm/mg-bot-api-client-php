<?php

/**
 * PHP version 7.1
 *
 * Item entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Message;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * Item class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 */
class Item implements ModelInterface
{
    /**
     * @var string $id
     *
     * @Type("string")
     * @Accessor(getter="getId",setter="setId")
     * @SkipWhenEmpty()
     */
    private $id;

    /**
     * @var int $size
     *
     * @Type("int")
     * @Accessor(getter="getSize",setter="setSize")
     * @SkipWhenEmpty()
     */
    private $size;

    /**
     * @var string $caption
     *
     * @Type("string")
     * @Accessor(getter="getCaption",setter="setCaption")
     * @SkipWhenEmpty()
     */
    private $caption;

    /**
     * @var string $transcription
     *
     * @Type("string")
     * @Accessor(getter="getTranscription",setter="setTranscription")
     * @SkipWhenEmpty()
     */
    private $transcription;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size)
    {
        $this->size = $size;
    }

    /**
     * @return string|null
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param string $caption
     */
    public function setCaption(string $caption)
    {
        $this->caption = $caption;
    }

    /**
     * @return string|null
     */
    public function getTranscription(): ?string
    {
        return $this->transcription;
    }

    /**
     * @param string $transcription
     */
    public function setTranscription(string $transcription): void
    {
        $this->transcription = $transcription;
    }
}
