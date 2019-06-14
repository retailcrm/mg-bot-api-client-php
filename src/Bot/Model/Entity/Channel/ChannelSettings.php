<?php

/**
 * PHP version 7.0
 *
 * ChannelSettings entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Channel;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;

/**
 * PHP version 7.0
 *
 * ChannelSettings class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class ChannelSettings
{
    /**
     * @var int
     *
     * @Type("int")
     * @Accessor(setter="setSpamAllowed", getter="getSpamAllowed")
     */
    private $spamAllowed;

    /**
     * @var ChannelSettingsStatus
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Channel\ChannelSettingsStatus")
     * @Accessor(setter="setStatus", getter="getStatus")
     */
    private $status;

    /**
     * @var ChannelTextSettings
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Channel\ChannelTextSettings")
     * @Accessor(setter="setText", getter="getText")
     */
    private $text;

    /**
     * @return int
     */
    public function getSpamAllowed(): int
    {
        return $this->spamAllowed;
    }

    /**
     * @param int $spamAllowed
     */
    public function setSpamAllowed(int $spamAllowed)
    {
        $this->spamAllowed = $spamAllowed;
    }

    /**
     * @return ChannelSettingsStatus
     */
    public function getStatus(): ChannelSettingsStatus
    {
        return $this->status;
    }

    /**
     * @param ChannelSettingsStatus $status
     */
    public function setStatus(ChannelSettingsStatus $status)
    {
        $this->status = $status;
    }

    /**
     * @return ChannelTextSettings
     */
    public function getText(): ChannelTextSettings
    {
        return $this->text;
    }

    /**
     * @param ChannelTextSettings $text
     */
    public function setText(ChannelTextSettings $text)
    {
        $this->text = $text;
    }
}