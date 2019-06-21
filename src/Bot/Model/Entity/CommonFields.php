<?php

/**
 * PHP version 7.0
 *
 * CommonFields trait
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
use Symfony\Component\Validator\Constraints\Date;

/**
 * PHP version 7.0
 *
 * CommonFields trait
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
trait CommonFields
{
    /**
     * @var string $id
     *
     * @Type("string")
     * @Accessor(getter="getId",setter="setId")
     * @SkipWhenEmpty()
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
}