<?php

/**
 * PHP version 7.0
 *
 * Channel entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Channel;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\Entity\Channel\ChannelSettings;
use RetailCrm\Mg\Bot\Model\Entity\CommonFields;

/**
 * PHP version 7.0
 *
 * Channel class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class Channel
{
    use CommonFields;

    /**
     * @var \DateTime
     *
     * @Type("DateTime<'Y-m-d\TH:i:s.u\Z'>")
     * @Accessor(setter="setActivatedAt", getter="getActivatedAt")
     */
    private $activatedAt;

    /**
     * @var \DateTime
     *
     * @Type("DateTime<'Y-m-d\TH:i:s.u\Z'>")
     * @Accessor(setter="setDeactivatedAt", getter="getDeactivatedAt")
     * @SkipWhenEmpty()
     */
    private $deactivatedAt;

    /**
     * @var bool
     *
     * @Type("bool")
     * @Accessor(setter="getIsActive", getter="setIsActive")
     * @SerializedName("is_active")
     */
    private $isActive;

    /**
     * @var array
     *
     * @Type("array")
     * @Accessor(setter="setSettings", getter="getSettings")
     */
    private $settings;

    /**
     * @var string
     *
     * @Type("string")
     * @Accessor(setter="setType", getter="getType")
     */
    private $type;

    /**
     * @var string
     *
     * @Type("string")
     * @Accessor(setter="setName", getter="getName")
     * @SkipWhenEmpty()
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
    public function setDeactivatedAt($deactivatedAt)
    {
        $this->deactivatedAt = $deactivatedAt;
    }

    /**
     * @return bool
     */
    public function getIsActive()
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
     * @return array
     */
    public function getSettings(): array
    {
        return $this->settings;
    }

    /**
     * @param array $settings
     */
    public function setSettings(array $settings)
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}