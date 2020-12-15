<?php

/**
 * PHP version 7.1
 *
 * Users list request
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */

namespace RetailCrm\Mg\Bot\Model\Request;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * UsersRequest class
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */
class UsersRequest implements ModelInterface
{
    use CommonFields;

    /**
     * @Type("string")
     * @Accessor(getter="getExternalId",setter="setExternalId")
     * @SkipWhenEmpty
     */
    private $externalId;

    /**
     * @Type("int")
     * @Accessor(getter="getActive",setter="setActive")
     * @SkipWhenEmpty
     */
    private $active;

    /**
     * @Type("int")
     * @Accessor(getter="getOnline",setter="setOnline")
     * @SkipWhenEmpty
     */
    private $online;

    /**
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @param string $externalId
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
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
     * @return int
     */
    public function getOnline()
    {
        return $this->online;
    }

    /**
     * @param int $online
     */
    public function setOnline($online)
    {
        $this->online = $online;
    }
}
