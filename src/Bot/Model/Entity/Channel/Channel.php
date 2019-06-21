<?php

/**
 * PHP version 7.0
 *
 * Channel entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Channel
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Channel;

use RetailCrm\Mg\Bot\Model\Entity\CommonFields;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\Type;

/**
 * PHP version 7.0
 *
 * Channel class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Channel
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class Channel
{
    use CommonFields;

    /**
     * @var \DateTime $activatedAt
     *
     * @Type("DateTime<'Y-m-d\TH:i:s\.u\Z'>")
     * @Accessor(getter="getActivatedAt",setter="setActivatedAt")
     */
    private $activatedAt;

    /**
     * @var \DateTime $deactivatedAt
     *
     * @Type("DateTime<'Y-m-d\TH:i:s\.u\Z'>")
     * @Accessor(getter="getDeactivatedAt",setter="setDeactivatedAt")
     */
    private $deactivatedAt;

    /**
     * @var bool $isActive
     *
     * @Type("bool")
     * @Accessor(getter="getIsActive",setter="setIsActive")
     */
    private $isActive;

    /**
     * @var ChannelSettings $settings
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Channel\ChannelSettings")
     * @Accessor(getter="getSettings",setter="setSettings")
     */
    private $settings;

    /**
     * @var string $type
     *
     * @Type("string")
     * @Accessor(getter="getType",setter="setType")
     */
    private $type;

    /**
     * @var string $actions
     *
     * @Type("string")
     * @Accessor(getter="getName",setter="setName")
     */
    private $name;

    /**
     * @return \DateTime
     */
    public function getActivatedAt(): \DateTime
    {
        return $this->activatedAt;
    }

    /**
     * @param \DateTime $activatedAt
     */
    public function setActivatedAt(\DateTime $activatedAt)
    {
        $this->activatedAt = $activatedAt;
    }

    /**
     * @return \DateTime
     */
    public function getDeactivatedAt(): \DateTime
    {
        return $this->deactivatedAt;
    }

    /**
     * @param \DateTime $deactivatedAt
     */
    public function setDeactivatedAt(\DateTime $deactivatedAt)
    {
        $this->deactivatedAt = $deactivatedAt;
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

    /**
     * @return ChannelSettings
     */
    public function getSettings(): ChannelSettings
    {
        return $this->settings;
    }

    /**
     * @param ChannelSettings $settings
     */
    public function setSettings(ChannelSettings $settings)
    {
        $this->settings = $settings;
    }

    /**
     * @return string
     */
    public function getType(): string
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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }
}
