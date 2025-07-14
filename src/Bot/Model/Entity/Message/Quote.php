<?php

namespace RetailCrm\Mg\Bot\Model\Entity\Message;

use DateTime;
use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\Entity\User;
use RetailCrm\Mg\Bot\Model\ModelInterface;

class Quote implements ModelInterface
{
    /**
     * @var int
     *
     * @Type("integer")
     */
    private $id;

    /**
     * @var string
     *
     * @Type("string")
     */
    private $type;

    /**
     * @var User
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\User")
     */
    private $from;

    /**
     * @var DateTime $time
     *
     * @Type("DateTime<'Y-m-d\TH:i:s\.u\Z', null, ['Y-m-d\TH:i:s\.u\Z', 'Y-m-d\TH:i:s\Z']>")
     * @Accessor(getter="getTime",setter="setTime")
     * @SkipWhenEmpty()
     */
    private $time;

    /**
     * @var string
     *
     * @Type("string")
     */
    private $content;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Quote
    {
        $this->id = $id;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): Quote
    {
        $this->type = $type;
        return $this;
    }

    public function getFrom(): User
    {
        return $this->from;
    }

    public function setFrom(User $from): Quote
    {
        $this->from = $from;
        return $this;
    }

    public function getTime(): DateTime
    {
        return $this->time;
    }

    public function setTime(DateTime $time): Quote
    {
        $this->time = $time;
        return $this;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): Quote
    {
        $this->content = $content;
        return $this;
    }
}
