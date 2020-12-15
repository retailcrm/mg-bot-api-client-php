<?php

/**
 * PHP version 7.1
 *
 * Dialog assign request
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */

namespace RetailCrm\Mg\Bot\Model\Request;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * DialogAssignRequest class
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */
class DialogAssignRequest implements ModelInterface
{
    /**
     * @var int $dialogId
     *
     * @Type("int")
     * @Accessor(getter="getDialogId", setter="setDialogId")
     * @SkipWhenEmpty()
     */
    private $dialogId;

    /**
     * @var int $userId
     *
     * @Type("int")
     * @Accessor(getter="getUserId", setter="setUserId")
     * @SkipWhenEmpty()
     */
    private $userId;

    /**
     * @var int $botId
     *
     * @Type("int")
     * @Accessor(getter="getBotId", setter="setBotId")
     * @SkipWhenEmpty()
     */
    private $botId;

    /**
     * @return int
     */
    public function getDialogId()
    {
        return $this->dialogId;
    }

    /**
     * @param int $dialogId
     */
    public function setDialogId($dialogId)
    {
        $this->dialogId = $dialogId;
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
     * @return int
     */
    public function getBotId()
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
}
