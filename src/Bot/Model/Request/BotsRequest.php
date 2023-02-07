<?php

/**
 * PHP version 7.1
 *
 * Bots Request
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */

namespace RetailCrm\Mg\Bot\Model\Request;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * BotsRequest class
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */
class BotsRequest implements ModelInterface
{
    use CommonFields;
    use PageLimit;

    /**
     * @Type("int")
     * @Accessor(getter="getActive",setter="setActive")
     * @SkipWhenEmpty
     */
    private $active;

    /**
     * @Type("int")
     * @Accessor(getter="getSelf",setter="setSelf")
     * @SkipWhenEmpty
     */
    private $self;

    /**
     * @Type("array")
     * @Accessor(getter="getRoles",setter="setRoles")
     * @SkipWhenEmpty
     */
    private $roles;

    /**
     * @return int
     */
    public function getSelf()
    {
        return $this->self;
    }

    /**
     * @param int $self
     */
    public function setSelf($self)
    {
        $this->self = $self;
    }

    /**
     * @return int
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param int $active
     */
    public function setActive($active)
    {
        $this->active = $active;
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
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }
}
