<?php

/**
 * PHP version 7.1
 *
 * MessageOrder entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Message;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * MessageOrder class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 */
class MessageOrder implements ModelInterface
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
     * @var MessageCost $cost
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Message\MessageCost")
     * @Accessor(getter="getCost",setter="setCost")
     * @SkipWhenEmpty()
     */
    private $cost;

    /**
     * @var MessageStatus $status
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Message\MessageStatus")
     * @Accessor(getter="getStatus",setter="setStatus")
     * @SkipWhenEmpty()
     */
    private $status;

    /**
     * @var MessageDelivery $delivery
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Message\MessageDelivery")
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
     * @return string|null
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
     * @return MessageCost|null
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param MessageCost $cost
     */
    public function setCost(MessageCost $cost)
    {
        $this->cost = $cost;
    }

    /**
     * @return MessageStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param MessageStatus $status
     */
    public function setStatus(MessageStatus $status)
    {
        $this->status = $status;
    }

    /**
     * @return MessageDelivery|null
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * @param MessageDelivery $delivery
     */
    public function setDelivery(MessageDelivery $delivery)
    {
        $this->delivery = $delivery;
    }

    /**
     * @return array|null
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
     * @return array|null
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
