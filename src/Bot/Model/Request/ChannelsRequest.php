<?php

/**
 * PHP version 7.1
 *
 * Channels list request
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */

namespace RetailCrm\Mg\Bot\Model\Request;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * ChannelsRequest class
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */
class ChannelsRequest implements ModelInterface
{
    use CommonFields;
    use PageLimit;

    /**
     * @Type("array")
     * @Accessor(getter="getTypes",setter="setTypes")
     * @SkipWhenEmpty
     */
    private $types;

    /**
     * @Type("int")
     * @Accessor(getter="getActive",setter="setActive")
     * @SkipWhenEmpty
     */
    private $active;

    /**
     * @Type("int")
     * @Accessor(getter="getSinceId",setter="setSinceId")
     * @SkipWhenEmpty
     */
    private $sinceId;

    /**
     * @Type("int")
     * @Accessor(getter="getUntilId",setter="setUntilId")
     * @SkipWhenEmpty
     */
    private $untilId;

    /**
     * @return array
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @param array $types
     */
    public function setTypes($types)
    {
        $this->types = $types;
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
    public function getSinceId()
    {
        return $this->sinceId;
    }

    /**
     * @param int $sinceId
     */
    public function setSinceId($sinceId)
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
    public function setUntilId($untilId)
    {
        $this->untilId = $untilId;
    }
}
