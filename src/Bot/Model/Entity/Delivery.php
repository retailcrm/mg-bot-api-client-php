<?php

/**
 * PHP version 7.0
 *
 * Delivery entity
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

/**
 * PHP version 7.0
 *
 * Delivery class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class Delivery
{
    /**
     * @var string $name
     *
     * @Type("string")
     * @Accessor(getter="getName",setter="setName")
     *
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @var \RetailCrm\Mg\Bot\Model\Entity\Cost $price
     *
     * @Type("\RetailCrm\Mg\Bot\Model\Entity\Cost")
     * @Accessor(getter="getPrice",setter="setPrice")
     *
     * @Assert\Currency
     */
    private $price;

    /**
     * @var string $address
     *
     * @Type("string")
     * @Accessor(getter="getAddress",setter="setAddress")
     * @SkipWhenEmpty()
     */
    private $address;

    /**
     * @var string $comment
     *
     * @Type("string")
     * @Accessor(getter="getComment",setter="setComment")
     * @SkipWhenEmpty()
     */
    private $comment;

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
     * @return \RetailCrm\Mg\Bot\Model\Entity\Cost
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param \RetailCrm\Mg\Bot\Model\Entity\Cost $price
     */
    public function setPrice(Cost $price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment(string $comment)
    {
        $this->comment = $comment;
    }
}
