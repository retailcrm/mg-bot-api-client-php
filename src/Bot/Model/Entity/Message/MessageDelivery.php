<?php

/**
 * PHP version 7.0
 *
 * MessageDelivery entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Message;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\Entity\Message\MessageCost;

/**
 * PHP version 7.0
 *
 * MessageDelivery class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class MessageDelivery
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
     * @var MessageCost $price
     *
     * @Type("Cost")
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
     * @return MessageCost
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param MessageCost $price
     */
    public function setPrice(MessageCost $price)
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
