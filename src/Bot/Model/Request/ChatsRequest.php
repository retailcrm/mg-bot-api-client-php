<?php

/**
 * PHP version 7.1
 *
 * Chats list request
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */

namespace RetailCrm\Mg\Bot\Model\Request;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * ChatsRequest class
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */
class ChatsRequest implements ModelInterface
{
    use CommonFields;
    use PageLimit;

    /**
     * @Type("int")
     * @Accessor(getter="getChannelId",setter="setChannelId")
     * @SkipWhenEmpty()
     */
    private $channelId;

    /**
     * @Type("string")
     * @Accessor(getter="getChannelType",setter="setChannelType")
     * @SkipWhenEmpty()
     */
    private $channelType;

    /**
     * @Type("int")
     * @Accessor(getter="getCustomerId",setter="setCustomerId")
     * @SkipWhenEmpty()
     */
    private $customerId;

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
    public function setChannelId($channelId)
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
    public function setChannelType($channelType)
    {
        $this->channelType = $channelType;
    }

    /**
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * @param int $customerId
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }
}
