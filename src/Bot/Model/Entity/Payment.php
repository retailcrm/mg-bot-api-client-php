<?php

/**
 * PHP version 7.0
 *
 * Payment entity
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
 * Payment class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class Payment
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
     * @var \RetailCrm\Mg\Bot\Model\Entity\PaymentStatus $status
     *
     * @Type("\RetailCrm\Mg\Bot\Model\Entity\PaymentStatus")
     * @Accessor(getter="getStatus",setter="setStatus")
     * @SkipWhenEmpty()
     */
    private $status;

    /**
     * @var \RetailCrm\Mg\Bot\Model\Entity\Cost $amount
     *
     * @Type("\RetailCrm\Mg\Bot\Model\Entity\Cost")
     * @Accessor(getter="getAmount",setter="setAmount")
     * @SkipWhenEmpty()
     */
    private $amount;

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
     * @return \RetailCrm\Mg\Bot\Model\Entity\PaymentStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param \RetailCrm\Mg\Bot\Model\Entity\PaymentStatus $status
     */
    public function setStatus(PaymentStatus $status)
    {
        $this->status = $status;
    }

    /**
     * @return \RetailCrm\Mg\Bot\Model\Entity\Cost
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param \RetailCrm\Mg\Bot\Model\Entity\Cost $amount
     */
    public function setAmount(Cost $amount)
    {
        $this->amount = $amount;
    }
}
