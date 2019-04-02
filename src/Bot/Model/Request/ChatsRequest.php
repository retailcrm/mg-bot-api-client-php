<?php

/**
 * PHP version 7.0
 *
 * Chats Request
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

/**
 * PHP version 7.0
 *
 * ChatsRequest class
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class ChatsRequest
{
    use CommonFields;

    /**
     * @Type("int")
     * @Accessor(getter="getChannelId",setter="setChannelId")
     * @SkipWhenEmpty
     */
    private $channelId;

     /**
     * @Type("string")
     * @Accessor(getter="getChannelType",setter="setChannelType")
     * @SkipWhenEmpty
     */
    private $channelType;

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
}
