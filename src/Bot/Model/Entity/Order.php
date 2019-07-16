<?php

/**
 * PHP version 7.1
 *
 * Order entity
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
 * Order class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class Order implements ModelInterface
{
    /**
     * @var string $number
     *
     * @Type("string")
     * @Accessor(getter="getNumber",setter="setNumber")
     * @SkipWhenEmpty()
     */
    private $number;

    /**
     * @var string $url
     *
     * @Type("string")
     * @Accessor(getter="getUrl",setter="setUrl")
     * @SkipWhenEmpty()
     */
    private $url;

    /**
     * @var string $date
     *
     * @Type("string")
     * @Accessor(getter="getDate",setter="setDate")
     * @SkipWhenEmpty()
     */
    private $date;

    /**
     * @var Cost $cost
     *
     * @Type("Cost")
     * @Accessor(getter="getCost",setter="setCost")
     * @SkipWhenEmpty()
     */
    private $cost;

    /**
     * @var Status $status
     *
     * @Type("Status")
     * @Accessor(getter="getStatus",setter="setStatus")
     * @SkipWhenEmpty()
     */
    private $status;

    /**
     * @var Delivery $delivery
     *
     * @Type("Delivery")
     * @Accessor(getter="getDelivery",setter="setDelivery")
     * @SkipWhenEmpty()
     */
    private $delivery;

    /**
     * @var array $items
     *
     * @Type("array")
     * @Accessor(getter="getItems",setter="setItems")
     * @SkipWhenEmpty()
     */
    private $items;

    /**
     * @var array $payments
     *
     * @Type("array")
     * @Accessor(getter="getPayments",setter="setPayments")
     * @SkipWhenEmpty()
     */
    private $payments;

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber(string $number)
    {
        $this->number = $number;
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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date)
    {
        $this->date = $date;
    }

    /**
     * @return Cost
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param Cost $cost
     */
    public function setCost(Cost $cost)
    {
        $this->cost = $cost;
    }

    /**
     * @return Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param Status $status
     */
    public function setStatus(Status $status)
    {
        $this->status = $status;
    }

    /**
     * @return Delivery
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * @param Delivery $delivery
     */
    public function setDelivery(Delivery $delivery)
    {
        $this->delivery = $delivery;
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems(array $items)
    {
        $this->items = $items;
    }

    /**
     * @return array
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * @param array $payments
     */
    public function setPayments(array $payments)
    {
        $this->payments = $payments;
    }
}
