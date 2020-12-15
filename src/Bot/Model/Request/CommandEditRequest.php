<?php

/**
 * PHP version 7.1
 *
 * Edit Command Request
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */

namespace RetailCrm\Mg\Bot\Model\Request;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * CommandEditRequest class
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */
class CommandEditRequest implements ModelInterface
{
    /**
     * @var int $botId
     *
     * @Type("int")
     * @Accessor(getter="getBotId",setter="setBotId")
     * @SkipWhenEmpty()
     */
    private $botId;

    /**
     * @var string $name
     *
     * @Type("string")
     * @Accessor(getter="getName",setter="setName")
     * @SkipWhenEmpty()
     */
    private $name;

    /**
     * @var string $description
     *
     * @Type("string")
     * @Accessor(getter="getDescription",setter="setDescription")
     * @SkipWhenEmpty
     */
    private $description;

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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getBotId()
    {
        return $this->botId;
    }

    /**
     * @param int $botId
     */
    public function setBotId(int $botId)
    {
        $this->botId = $botId;
    }
}
