<?php

/**
 * PHP version 7.1
 *
 * Bot info request
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */

namespace RetailCrm\Mg\Bot\Model\Request;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * InfoRequest class
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */
class InfoRequest implements ModelInterface
{
    /**
     * @var string $name
     *
     * @Type("string")
     * @Accessor(getter="getName",setter="setName")
     * @SkipWhenEmpty()
     */
    private $name;

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
     * @return string
     */
    public function getName()
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
     * @return string
     */
    public function getAvatarUrl()
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
    public function getRoles()
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
}
