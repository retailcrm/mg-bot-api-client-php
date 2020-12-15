<?php

/**
 * PHP version 7.1
 *
 * ChannelSettingsStatus entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Channel
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Channel;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * ChannelSettingsStatus class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Channel
 */
class ChannelSettingsStatus implements ModelInterface
{
    /**
     * @var string $delivered
     *
     * @Type("string")
     * @Accessor(getter="getDelivered",setter="setDelivered")
     * @SkipWhenEmpty()
     */
    private $delivered;

    /**
     * @var string $read
     *
     * @Type("string")
     * @Accessor(getter="getRead",setter="setRead")
     * @SkipWhenEmpty()
     */
    private $read;

    /**
     * @return string|null
     */
    public function getDelivered(): ?string
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
     * @return string|null
     */
    public function getRead(): ?string
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
