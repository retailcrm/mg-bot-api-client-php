<?php

/**
 * PHP version 7.1
 *
 * MessagePayment entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Message;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * MessagePayment class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 */
class MessagePayment implements ModelInterface
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
     * @var MessageOrderPaymentStatus $status
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Message\MessageOrderPaymentStatus")
     * @Accessor(getter="getStatus",setter="setStatus")
     * @SkipWhenEmpty()
     */
    private $status;

    /**
     * @var MessageCost $amount
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Message\MessageCost")
     * @Accessor(getter="getAmount",setter="setAmount")
     * @SkipWhenEmpty()
     */
    private $amount;

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
     * @return MessageOrderPaymentStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param MessageOrderPaymentStatus $status
     */
    public function setStatus(MessageOrderPaymentStatus $status)
    {
        $this->status = $status;
    }

    /**
     * @return MessageCost|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param MessageCost $amount
     */
    public function setAmount(MessageCost $amount)
    {
        $this->amount = $amount;
    }
}
