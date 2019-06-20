<?php

/**
 * PHP version 7.0
 *
 * ChatMember entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Chat
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Chat;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\Entity\CommonFields;

/**
 * PHP version 7.0
 *
 * ChatMember class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Chat
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class ChatMember
{
    use CommonFields;

    /**
     * @var int $chatId
     *
     * @Type("int")
     * @Accessor(getter="getChatId",setter="setChatId")
     * @SkipWhenEmpty()
     */
    private $chatId;

    /**
     * @var int $userId
     *
     * @Type("int")
     * @Accessor(getter="getUserId",setter="setUserId")
     * @SkipWhenEmpty()
     */
    private $userId;

    /**
     * @var bool $isAuthor
     *
     * @Type("bool")
     * @Accessor(getter="getIsAuthor",setter="setIsAuthor")
     * @SkipWhenEmpty()
     */
    private $isAuthor;

    /**
     * @var string $creating
     *
     * @Type("string")
     * @Accessor(getter="getState",setter="setState")
     * @SkipWhenEmpty()
     */
    private $state;

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
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return bool
     */
    public function isAuthor(): bool
    {
        return $this->isAuthor;
    }

    /**
     * @param bool $isAuthor
     */
    public function setIsAuthor(bool $isAuthor)
    {
        $this->isAuthor = $isAuthor;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state)
    {
        $this->state = $state;
    }
}
