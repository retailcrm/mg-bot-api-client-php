<?php

/**
 * PHP version 7.0
 *
 * Dialog entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;

/**
 * PHP version 7.0
 *
 * Dialog class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class Dialog
{
    use CommonFields;

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
     * @Type("DateTime<'Y-m-d\TH:i:s\.u\Z'>")
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
     * @return int
     */
    public function getBotId(): int
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
     * @return int
     */
    public function getChatId(): int
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
     * @return int
     */
    public function getBeginMessageId(): int
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
     * @return int
     */
    public function getEndingMessageId(): int
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
    public function getClosedAt(): \DateTime
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
     * @return bool
     */
    public function isAssigned(): bool
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
     * @return Responsible
     */
    public function getResponsible(): Responsible
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
     * @return bool
     */
    public function isActive(): bool
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
