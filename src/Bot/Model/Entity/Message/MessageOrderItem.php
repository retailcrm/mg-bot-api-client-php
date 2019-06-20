<?php

/**
 * PHP version 7.0
 *
 * MessageOrderItem entity
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

/**
 * PHP version 7.0
 *
 * MessageOrderItem class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class MessageOrderItem
{
    /**
     * @var string $name
     *
     * @Type("string")
     * @Accessor(getter="getName",setter="setName")
     * @SkipWhenEmpty()
     */
    private $name;

    /**
     * @var string $url
     *
     * @Type("string")
     * @Accessor(getter="getUrl",setter="setUrl")
     * @SkipWhenEmpty()
     */
    private $url;

    /**
     * @var string $img
     *
     * @Type("string")
     * @Accessor(getter="getImg",setter="setImg")
     * @SkipWhenEmpty()
     */
    private $img;

    /**
     * @var MessageCost $price
     *
     * @Type("MessageCost")
     * @Accessor(getter="getPrice",setter="setPrice")
     * @SkipWhenEmpty()
     */
    private $price;

    /**
     * @var MessageQuantity $quantity
     *
     * @Type("MessageQuantity")
     * @Accessor(getter="getQuantity",setter="setQuantity)
     * @SkipWhenEmpty()
     */
    private $quantity;

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
     * @return string
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
     * @return MessageQuantity
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