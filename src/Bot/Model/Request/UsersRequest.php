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
    use PageLimit;

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
     * @var int $sinceId
     *
     * @Type("int")
     * @Accessor(getter="getSinceId",setter="setSinceId")
     * @SkipWhenEmpty
     */
    private $sinceId;

    /**
     * @var int $untilId
     *
     * @Type("int")
     * @Accessor(getter="getUntilId",setter="setUntilId")
     * @SkipWhenEmpty
     */
    private $untilId;

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

    /**
     * @return int
     */
    public function getSinceId()
    {
        return $this->sinceId;
    }

    /**
     * @param int $sinceId
     */
    public function setSinceId($sinceId): void
    {
        $this->sinceId = $sinceId;
    }

    /**
     * @return int
     */
    public function getUntilId()
    {
        return $this->untilId;
    }

    /**
     * @param int $untilId
     */
    public function setUntilId($untilId): void
    {
        $this->untilId = $untilId;
    }
}
