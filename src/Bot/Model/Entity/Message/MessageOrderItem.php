<?php

/**
 * PHP version 7.1
 *
 * MessageOrderItem entity
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Message;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * MessageOrderItem class
 */
class MessageOrderItem implements ModelInterface
{
    /**
     * @var string
     *
     * @Type("string")
     * @Accessor(getter="getName",setter="setName")
     * @SkipWhenEmpty()
     */
    private $name;

    /**
     * @var string
     *
     * @Type("string")
     * @Accessor(getter="getUrl",setter="setUrl")
     * @SkipWhenEmpty()
     */
    private $url;

    /**
     * @var string
     *
     * @Type("string")
     * @Accessor(getter="getImg",setter="setImg")
     * @SkipWhenEmpty()
     */
    private $img;

    /**
     * @var MessageCost
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Message\MessageCost")
     * @Accessor(getter="getPrice",setter="setPrice")
     * @SkipWhenEmpty()
     */
    private $price;

    /**
     * @var MessageQuantity
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Message\MessageQuantity")
     * @Accessor(getter="getQuantity",setter="setQuantity")
     * @SkipWhenEmpty()
     */
    private $quantity;

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
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
    }

    /**
     * @return string|null
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param string $img
     */
    public function setImg(string $img)
    {
        $this->img = $img;
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
     * @return MessageQuantity|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param MessageQuantity $quantity
     */
    public function setQuantity(MessageQuantity $quantity)
    {
        $this->quantity = $quantity;
    }
}
