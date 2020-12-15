<?php

/**
 * PHP version 7.1
 *
 * Common fields
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */

namespace RetailCrm\Mg\Bot\Model\Request;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;

/**
 * CommonFields trait
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */
trait CommonFields
{
    /**
     * @var int
     *
     * @Type("int")
     * @Accessor(getter="getId",setter="setId")
     * @SkipWhenEmpty
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @Type("DateTime<'Y-m-d\TH:i:s\.u\Z'>")
     * @Accessor(getter="getSince",setter="setSince")
     * @SkipWhenEmpty
     */
    private $since;

    /**
     * @var \DateTime
     *
     * @Type("DateTime<'Y-m-d\TH:i:s\.u\Z'>")
     * @Accessor(getter="getUntil",setter="setUntil")
     * @SkipWhenEmpty
     */
    private $until;

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
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return \DateTime
     */
    public function getSince()
    {
        return $this->since;
    }

    /**
     * @param \DateTime $since
     */
    public function setSince(\DateTime $since)
    {
        $this->since = $since;
    }

    /**
     * @return \DateTime
     */
    public function getUntil()
    {
        return $this->until;
    }

    /**
     * @param \DateTime $until
     */
    public function setUntil(\DateTime $until)
    {
        $this->until = $until;
    }
}
