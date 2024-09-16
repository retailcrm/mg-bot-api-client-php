<?php

/**
 * PHP version 7.1
 *
 * Messages list request
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */

namespace RetailCrm\Mg\Bot\Model\Request;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * MessagesRequest class
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */
class MessagesRequest implements ModelInterface
{
    use CommonFields;
    use IncludeMassCommunication;

    /**
     * @var int $chatId
     *
     * @Type("int")
     * @Accessor(getter="getChatId",setter="setChatId")
     * @SkipWhenEmpty
     */
    private $chatId;

    /**
     * @var int $dialogId
     *
     * @Type("int")
     * @Accessor(getter="getDialogId",setter="setDialogId")
     * @SkipWhenEmpty
     */
    private $dialogId;

    /**
     * @var int $userId
     *
     * @Type("int")
     * @Accessor(getter="getUserId",setter="setUserId")
     * @SkipWhenEmpty
     */
    private $userId;

    /**
     * @var int $customerId
     *
     * @Type("int")
     * @Accessor(getter="getCustomerId",setter="setCustomerId")
     * @SkipWhenEmpty()
     */
    private $customerId;

    /**
     * @var int $botId
     *
     * @Type("int")
     * @Accessor(getter="getBotId",setter="setBotId")
     * @SkipWhenEmpty()
     */
    private $botId;

    /**
     * @var int $channelId
     *
     * @Type("int")
     * @Accessor(getter="getChannelId",setter="setChannelId")
     * @SkipWhenEmpty()
     */
    private $channelId;

    /**
     * @var string $channelType
     *
     * @Type("string")
     * @Accessor(getter="getChannelType",setter="setChannelType")
     * @SkipWhenEmpty()
     */
    private $channelType;

    /**
     * @var string $scope
     *
     * @Type("string")
     * @Accessor(getter="getScope",setter="setScope")
     * @SkipWhenEmpty()
     */
    private $scope;

    /**
     * @var string $type
     *
     * @Type("string")
     * @Accessor(getter="getType",setter="setType")
     * @SkipWhenEmpty()
     */
    private $type;

    /**
     * @var int $limit
     *
     * @Type("int")
     * @Accessor(getter="getLimit",setter="setLimit")
     * @SkipWhenEmpty()
     */
    private $limit;

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
    public function getDialogId()
    {
        return $this->dialogId;
    }

    /**
     * @param int $dialogId
     */
    public function setDialogId(int $dialogId)
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
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param int $customerId
     */
    public function setCustomerId(int $customerId)
    {
        $this->customerId = $customerId;
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

    /**
     * @return int
     */
    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * @param int $channelId
     */
    public function setChannelId(int $channelId)
    {
        $this->channelId = $channelId;
    }

    /**
     * @return string
     */
    public function getChannelType()
    {
        return $this->channelType;
    }

    /**
     * @param string $channelType
     */
    public function setChannelType(string $channelType)
    {
        $this->channelType = $channelType;
    }

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param string $scope
     */
    public function setScope(string $scope)
    {
        $this->scope = $scope;
    }

    /**
     * @return string
     */
    public function getType()
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
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     */
    public function setLimit(int $limit)
    {
        $this->limit = $limit;
    }
}
