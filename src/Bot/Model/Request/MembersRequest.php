<?php

/**
 * PHP version 7.1
 *
 * Members list request
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Request;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * MembersRequest class
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class MembersRequest implements ModelInterface
{
    /**
     * @var int $chatId
     *
     * @Type("int")
     * @Accessor(getter="getChatId",setter="setChatId")
     * @SkipWhenEmpty
     */
    private $chatId;

    /**
     * @var int $userId
     *
     * @Type("int")
     * @Accessor(getter="getUserId",setter="setUserId")
     * @SkipWhenEmpty
     */
    private $userId;

    /**
     * @var string $state
     *
     * @Type("string")
     * @Accessor(getter="getState",setter="setState")
     * @SkipWhenEmpty
     */
    private $state;

    /**
     * @var string $since
     *
     * @Type("string")
     * @Accessor(getter="getSince",setter="setSince")
     * @SkipWhenEmpty
     */
    private $since;

    /**
     * @var string $until
     *
     * @Type("string")
     * @Accessor(getter="getUntil",setter="setUntil")
     * @SkipWhenEmpty
     */
    private $until;

    /**
     * @return int
     */
    public function getChatId()
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
    public function getUserId()
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
     * @return string
     */
    public function getState()
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

    /**
     * @return string
     */
    public function getSince()
    {
        return $this->since;
    }

    /**
     * @param string $since
     */
    public function setSince(string $since)
    {
        $this->since = $since;
    }

    /**
     * @return string
     */
    public function getUntil()
    {
        return $this->until;
    }

    /**
     * @param string $until
     */
    public function setUntil(string $until)
    {
        $this->until = $until;
    }
}
