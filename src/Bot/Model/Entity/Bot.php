<?php

/**
 * PHP version 7.0
 *
 * Bot entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;

/**
 * PHP version 7.0
 *
 * Bot class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class Bot
{
    /**
     * @var string $id
     *
     * @Type("string")
     * @Accessor(getter="getId",setter="setId")
     */
    private $id;

    /**
     * @var \DateTime $createdAt
     *
     * @Type("DateTime<'Y-m-d\TH:i:s\.u\Z'>")
     * @Accessor(getter="getCreatedAt",setter="setCreatedAt")
     * @SkipWhenEmpty()
     */
    private $createdAt;

    /**
     * @var \DateTime $updatedAt
     *
     * @Type("DateTime<'Y-m-d\TH:i:s\.u\Z'>")
     * @Accessor(getter="getUpdatedAt",setter="setUpdatedAt")
     * @SkipWhenEmpty()
     */
    private $updatedAt;

    /**
     * @var string $name
     *
     * @Type("string")
     * @Accessor(getter="getName",setter="setName")
     * @SkipWhenEmpty()
     */
    private $name;

    /**
     * @var array $events
     *
     * @Type("array")
     * @Accessor(getter="getEvents",setter="setEvents")
     * @SkipWhenEmpty()
     */
    private $events;

    /**
     * @var string $clientId
     *
     * @Type("string")
     * @Accessor(getter="getClientId",setter="setClientId")
     * @SkipWhenEmpty()
     */
    private $clientId;

    /**
     * @var string $avatarUrl
     *
     * @Type("string")
     * @Accessor(getter="getAvatarUrl",setter="setAvatarUrl")
     * @SkipWhenEmpty()
     */
    private $avatarUrl;

    /**
     * @var array $roles
     *
     * @Type("array")
     * @Accessor(getter="getRoles",setter="setRoles")
     * @SkipWhenEmpty()
     */
    private $roles;

    /**
     * @var string $deactivatedAt
     *
     * @Type("string")
     * @Accessor(getter="getDeactivatedAt",setter="setDeactivatedAt")
     * @SkipWhenEmpty()
     */
    private $deactivatedAt;

    /**
     * @var bool $isActive
     *
     * @Type("bool")
     * @Accessor(getter="getIsActive",setter="setIsActive")
     * @SkipWhenEmpty()
     */
    private $isActive;

    /**
     * @var bool $isSelf
     *
     * @Type("bool")
     * @Accessor(getter="getIsSelf",setter="setIsSelf")
     * @SkipWhenEmpty()
     */
    private $isSelf;

    /**
     * @var bool $isSystem
     *
     * @Type("bool")
     * @Accessor(getter="getIsSystem",setter="setIsSystem")
     * @SkipWhenEmpty()
     */
    private $isSystem;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
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

    /**
     * @return array
     */
    public function getEvents(): array
    {
        return $this->events;
    }

    /**
     * @param array $events
     */
    public function setEvents(array $events)
    {
        $this->events = $events;
    }

    /**
     * @return string
     */
    public function getClientId(): string
    {
        return $this->clientId;
    }

    /**
     * @param string $clientId
     */
    public function setClientId(string $clientId)
    {
        $this->clientId = $clientId;
    }

    /**
     * @return string
     */
    public function getAvatarUrl(): string
    {
        return $this->avatarUrl;
    }

    /**
     * @param string $avatarUrl
     */
    public function setAvatarUrl(string $avatarUrl)
    {
        $this->avatarUrl = $avatarUrl;
    }

    /**
     * @return array
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * @param array $roles
     */
    public function setRoles(array $roles)
    {
        $this->roles = $roles;
    }

    /**
     * @return string
     */
    public function getDeactivatedAt(): string
    {
        return $this->deactivatedAt;
    }

    /**
     * @param string $deactivatedAt
     */
    public function setDeactivatedAt(string $deactivatedAt)
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
     * @return bool
     */
    public function isSelf(): bool
    {
        return $this->isSelf;
    }

    /**
     * @param bool $isSelf
     */
    public function setIsSelf(bool $isSelf)
    {
        $this->isSelf = $isSelf;
    }

    /**
     * @return bool
     */
    public function isSystem(): bool
    {
        return $this->isSystem;
    }

    /**
     * @param bool $isSystem
     */
    public function setIsSystem(bool $isSystem)
    {
        $this->isSystem = $isSystem;
    }
}
