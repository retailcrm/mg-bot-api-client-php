<?php

/**
 * PHP version 7.1
 *
 * ChatLastMessage entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Chat
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Chat;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\Entity\Customer;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * ChatLastMessage class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Chat
 */
class ChatLastMessage implements ModelInterface
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
     * @var \DateTime $time
     *
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @Accessor(getter="getTime",setter="setTime")
     * @SkipWhenEmpty()
     */
    private $time;

    /**
     * @var string $type
     *
     * @Type("string")
     * @Accessor(getter="getType",setter="setType")
     * @SkipWhenEmpty()
     */
    private $type;

    /**
     * @var string $scope
     *
     * @Type("string")
     * @Accessor(getter="getScope",setter="setScope")
     * @SkipWhenEmpty()
     */
    private $scope;

    /**
     * @var int $chatId
     *
     * @Type("int")
     * @Accessor(getter="getChatId",setter="setChatId")
     * @SkipWhenEmpty()
     */
    private $chatId;

    /**
     * @var bool $isRead
     *
     * @Type("bool")
     * @Accessor(getter="getIsRead",setter="setIsRead")
     * @SkipWhenEmpty()
     */
    private $isRead;

    /**
     * @var bool $isEdit
     *
     * @Type("bool")
     * @Accessor(getter="getIsEdit",setter="setIsEdit")
     * @SkipWhenEmpty()
     */
    private $isEdit;

    /**
     * @var string $status
     *
     * @Type("string")
     * @Accessor(getter="getStatus",setter="setStatus")
     * @SkipWhenEmpty()
     */
    private $status;

    /**
     * @var Customer $from
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Customer")
     * @Accessor(getter="getFrom",setter="setFrom")
     */
    private $from;

    /**
     * @var string $content
     *
     * @Type("string")
     * @Accessor(getter="getContent",setter="setContent")
     * @SkipWhenEmpty()
     */
    private $content;

    /**
     * @var \RetailCrm\Mg\Bot\Model\Entity\Message\MessageQuote $quote
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Message\MessageQuote")
     * @Accessor(getter="getQuote",setter="setQuote")
     * @SkipWhenEmpty()
     */
    private $quote;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
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
     * @return mixed
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param mixed $scope
     */
    public function setScope($scope): void
    {
        $this->scope = $scope;
    }

    /**
     * @return mixed
     */
    public function getChatId()
    {
        return $this->chatId;
    }

    /**
     * @param mixed $chatId
     */
    public function setChatId($chatId): void
    {
        $this->chatId = $chatId;
    }

    /**
     * @return mixed
     */
    public function getIsRead()
    {
        return $this->isRead;
    }

    /**
     * @param mixed $isRead
     */
    public function setIsRead($isRead): void
    {
        $this->isRead = $isRead;
    }

    /**
     * @return mixed
     */
    public function getIsEdit()
    {
        return $this->isEdit;
    }

    /**
     * @param mixed $isEdit
     */
    public function setIsEdit($isEdit): void
    {
        $this->isEdit = $isEdit;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param mixed $from
     */
    public function setFrom($from): void
    {
        $this->from = $from;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * @param mixed $quote
     */
    public function setQuote($quote): void
    {
        $this->quote = $quote;
    }
}
