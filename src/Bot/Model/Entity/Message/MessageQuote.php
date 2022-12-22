<?php

/**
 * PHP version 7.3
 *
 * @category MessageQuote
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Message;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\Entity\User;

/**
 * Class MessageQuote
 *
 * @category MessageQuote
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 */
class MessageQuote
{
    /**
     * @var int $creating
     *
     * @Type("int")
     * @Accessor(getter="getId",setter="setId")
     * @SkipWhenEmpty()
     */
    private $id;

    /**
     * @var string $type
     *
     * @Type("string")
     * @Accessor(getter="getType",setter="setType")
     * @SkipWhenEmpty()
     */
    private $type;

    /**
     * @var User $from
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\User")
     * @Accessor(getter="getFrom",setter="setFrom")
     * @SkipWhenEmpty()
     */
    private $from;

    /**
     * @var \DateTime $time
     *
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @Accessor(getter="getTime",setter="setTime")
     */
    private $time;

    /**
     * @var string $content
     *
     * @Type("string")
     * @Accessor(getter="getContent",setter="setContent")
     */
    private $content;

    /**
     * @var array $items
     *
     * @Type("array")
     * @Accessor(getter="getItems",setter="setItems")
     * @SkipWhenEmpty()
     */
    private $items;

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

    /**
     * @return User|null
     */
    public function getFrom(): ?User
    {
        return $this->from;
    }

    /**
     * @param User $from
     */
    public function setFrom(User $from)
    {
        $this->from = $from;
    }

    /**
     * @return \DateTime
     */
    public function getTime(): ?\DateTime
    {
        return $this->time;
    }

    /**
     * @param \DateTime $time
     */
    public function setTime(\DateTime $time)
    {
        $this->time = $time;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
    * @return array|null
    */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems(array $items)
    {
        $this->items = $items;
    }
}
