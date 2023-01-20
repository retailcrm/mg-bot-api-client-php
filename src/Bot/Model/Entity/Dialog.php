<?php

/**
 * PHP version 7.1
 *
 * Dialog entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 */

namespace RetailCrm\Mg\Bot\Model\Entity;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * Dialog class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 */
class Dialog implements ModelInterface
{
    /**
     * @var string $id
     *
     * @Type("string")
     * @Accessor(getter="getId",setter="setId")
     */
    private $id;

    /**
     * @var \DateTime $createdAt
     *
     * @Type("DateTime<'Y-m-d\TH:i:s\.u\Z', null, ['Y-m-d\TH:i:s\.u\Z', 'Y-m-d\TH:i:s\Z']>")
     * @Accessor(getter="getCreatedAt",setter="setCreatedAt")
     */
    private $createdAt;

    /**
     * @var \DateTime $updatedAt
     *
     * @Type("DateTime<'Y-m-d\TH:i:s\.u\Z', null, ['Y-m-d\TH:i:s\.u\Z', 'Y-m-d\TH:i:s\Z']>")
     * @Accessor(getter="getUpdatedAt",setter="setUpdatedAt")
     * @SkipWhenEmpty()
     */
    private $updatedAt;

    /**
     * @var int $botId
     *
     * @Type("int")
     * @Accessor(getter="getBotId",setter="setBotId")
     * @SkipWhenEmpty()
     */
    private $botId;

    /**
     * @var int $chatId
     *
     * @Type("int")
     * @Accessor(getter="getChatId",setter="setChatId")
     * @SkipWhenEmpty()
     */
    private $chatId;

    /**
     * @var int $beginMessageId
     *
     * @Type("int")
     * @Accessor(getter="getBeginMessageId",setter="setBeginMessageId")
     * @SkipWhenEmpty()
     */
    private $beginMessageId;

    /**
     * @var int $endingMessageId
     *
     * @Type("int")
     * @Accessor(getter="getEndingMessageId",setter="setEndingMessageId")
     * @SkipWhenEmpty()
     */
    private $endingMessageId;

    /**
     * @var \DateTime $closedAt
     *
     * @Type("DateTime<'Y-m-d\TH:i:s\.u\Z', null, ['Y-m-d\TH:i:s\.u\Z', 'Y-m-d\TH:i:s\Z']>")
     * @Accessor(getter="getClosedAt",setter="setClosedAt")
     * @SkipWhenEmpty()
     */
    private $closedAt;

    /**
     * @var bool $isAssigned
     *
     * @Type("bool")
     * @Accessor(getter="getIsAssigned",setter="setIsAssigned")
     * @SkipWhenEmpty()
     */
    private $isAssigned;

    /**
     * @var Responsible $responsible
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Responsible")
     * @Accessor(getter="getResponsible",setter="setResponsible")
     * @SkipWhenEmpty()
     */
    private $responsible;

    /**
     * @var bool $isActive
     *
     * @Type("bool")
     * @Accessor(getter="getIsActive",setter="setIsActive")
     * @SkipWhenEmpty()
     */
    private $isActive;

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
     * @return \DateTime
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return int|null
     */
    public function getBotId(): ?int
    {
        return $this->botId;
    }

    /**
     * @param int $botId
     */
    public function setBotId(int $botId)
    {
        $this->botId = $botId;
    }

    /**
     * @return int|null
     */
    public function getChatId(): ?int
    {
        return $this->chatId;
    }

    /**
     * @param int $chatId
     */
    public function setChatId(int $chatId)
    {
        $this->chatId = $chatId;
    }

    /**
     * @return int|null
     */
    public function getBeginMessageId(): ?int
    {
        return $this->beginMessageId;
    }

    /**
     * @param int $beginMessageId
     */
    public function setBeginMessageId(int $beginMessageId)
    {
        $this->beginMessageId = $beginMessageId;
    }

    /**
     * @return int|null
     */
    public function getEndingMessageId(): ?int
    {
        return $this->endingMessageId;
    }

    /**
     * @param int $endingMessageId
     */
    public function setEndingMessageId(int $endingMessageId)
    {
        $this->endingMessageId = $endingMessageId;
    }

    /**
     * @return \DateTime
     */
    public function getClosedAt(): ?\DateTime
    {
        return $this->closedAt;
    }

    /**
     * @param \DateTime $closedAt
     */
    public function setClosedAt(\DateTime $closedAt)
    {
        $this->closedAt = $closedAt;
    }

    /**
     * @return bool|null
     */
    public function isAssigned(): ?bool
    {
        return $this->isAssigned;
    }

    /**
     * @param bool $isAssigned
     */
    public function setIsAssigned(bool $isAssigned)
    {
        $this->isAssigned = $isAssigned;
    }

    /**
     * @return Responsible|null
     */
    public function getResponsible(): ?Responsible
    {
        return $this->responsible;
    }

    /**
     * @param Responsible $responsible
     */
    public function setResponsible(Responsible $responsible)
    {
        $this->responsible = $responsible;
    }

    /**
     * @return bool|null
     */
    public function isActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     */
    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }
}
