<?php

/**
 * PHP version 7.1
 *
 * Commands list request
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */

namespace RetailCrm\Mg\Bot\Model\Request;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * CommandsRequest class
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */
class CommandsRequest implements ModelInterface
{
    use CommonFields;

    /**
     * @Type("string")
     * @Accessor(getter="getName",setter="setName")
     * @SkipWhenEmpty
     */
    private $name;

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
