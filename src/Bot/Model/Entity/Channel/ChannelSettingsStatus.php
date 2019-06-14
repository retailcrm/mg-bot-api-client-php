<?php

/**
 * PHP version 7.0
 *
 * ChannelSettingsStatus entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Channel;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\Type;

/**
 * PHP version 7.0
 *
 * ChannelSettingsStatus class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class ChannelSettingsStatus
{
    /**
     * @var string
     *
     * @Type("string")
     * @Accessor(setter="setDelivered", getter="getDelivered")
     */
    private $delivered;

    /**
     * @var string
     *
     * @Type("string")
     * @Accessor(setter="setRead", getter="getRead")
     */
    private $read;

    /**
     * @return string
     */
    public function getDelivered(): string
    {
        return $this->delivered;
    }

    /**
     * @param string $delivered
     */
    public function setDelivered(string $delivered)
    {
        $this->delivered = $delivered;
    }

    /**
     * @return string
     */
    public function getRead(): string
    {
        return $this->read;
    }

    /**
     * @param string $read
     */
    public function setRead(string $read)
    {
        $this->read = $read;
    }
}