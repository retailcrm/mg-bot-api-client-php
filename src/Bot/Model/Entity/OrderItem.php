<?php

/**
 * PHP version 7.1
 *
 * Order item entity
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
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * OrderItem class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class OrderItem implements ModelInterface
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
     * @var Cost $price
     *
     * @Type("Cost")
     * @Accessor(getter="getPrice",setter="setPrice")
     * @SkipWhenEmpty()
     */
    private $price;

    /**
     * @var Quantity $quantity
     *
     * @Type("Quantity")
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
     * @return Cost
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param Cost $price
     */
    public function setPrice(Cost $price)
    {
        $this->price = $price;
    }

    /**
     * @return Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param Quantity $quantity
     */
    public function setQuantity(Quantity $quantity)
    {
        $this->quantity = $quantity;
    }
}
