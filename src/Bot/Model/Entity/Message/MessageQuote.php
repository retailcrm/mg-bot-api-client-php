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
     * @var int $id
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
     * @var object[] $items
     *
     * @Type("array")
     * @Accessor(getter="getItems",setter="setItems")
     * @SkipWhenEmpty()
     */
    private $items;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
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
    public function setType(string $type): void
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
    public function setFrom(User $from): void
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
    public function setTime(\DateTime $time): void
    {
        $this->time = $time;
    }

    /**
     * @return string
     */
    public function getContent(): string
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
    * @return object[]|null
    */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param object[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }
}
