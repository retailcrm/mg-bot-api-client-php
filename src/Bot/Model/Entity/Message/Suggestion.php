<?php

/**
 * PHP version 7.1
 *
 * Suggestion entity
 *
 * @package RetailCrm\Mg\Bot\Model\Entity\Message
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Message;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * Suggestion class
 *
 * @package RetailCrm\Mg\Bot\Model\Entity\Message
 */
class Suggestion implements ModelInterface
{
    /**
     * @var string $title
     *
     * @Type("string")
     * @Accessor(getter="getTitle",setter="setTitle")
     * @SkipWhenEmpty()
     */
    private $title;

    /**
     * @var string $type
     *
     * @Type("string")
     * @Accessor(getter="getType",setter="setType")
     * @SkipWhenEmpty()
     */
    private $type;

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }
}
