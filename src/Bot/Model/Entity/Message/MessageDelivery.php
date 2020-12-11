<?php

/**
 * PHP version 7.1
 *
 * MessageDelivery entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Message;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * MessageDelivery class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 */
class MessageDelivery implements ModelInterface
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
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Message\MessageCost")
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
     * @return string|null
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
     * @return MessageCost|null
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
     * @return string|null
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
     * @return string|null
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
