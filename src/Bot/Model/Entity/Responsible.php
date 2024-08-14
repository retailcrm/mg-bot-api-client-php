<?php

/**
 * PHP version 7.1
 *
 * Responsible entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 */

namespace RetailCrm\Mg\Bot\Model\Entity;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * Responsible class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 */
class Responsible implements ModelInterface
{
    /**
     * @var string $assignedAt
     *
     * @Type("string")
     * @Accessor(getter="getAssignedAt",setter="setAssignedAt")
     * @SkipWhenEmpty()
     */
    private $assignedAt;

    /**
     * @var int $id
     *
     * @Type("int")
     * @Accessor(getter="getId",setter="setId")
     * @SkipWhenEmpty()
     */
    private $id;

    /**
     * @var string $type
     *
     * @Type("string")
     * @Accessor(getter="getType",setter="setType")
     * @SkipWhenEmpty()
     */
    private $type;

    /**
     * @var string $externalId
     *
     * @Type("string")
     * @Accessor(getter="getExternalId",setter="setExternalId")
     * @SkipWhenEmpty()
     */
    private $externalId;

    /**
     * @return string|null
     */
    public function getAssignedAt(): ?string
    {
        return $this->assignedAt;
    }

    /**
     * @param string $assignedAt
     */
    public function setAssignedAt(string $assignedAt)
    {
        $this->assignedAt = $assignedAt;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
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
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    /**
     * @param string $externalId
     */
    public function setExternalId(string $externalId): void
    {
        $this->externalId = $externalId;
    }
}
