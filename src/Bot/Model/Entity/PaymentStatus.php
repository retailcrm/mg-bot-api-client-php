<?php

/**
 * PHP version 7.1
 *
 * Payment status entity
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
 * PaymentStatus class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class PaymentStatus implements ModelInterface
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
     * @var bool $payed
     *
     * @Type("bool")
     * @Accessor(getter="getPayed",setter="setPayed")
     * @SkipWhenEmpty()
     */
    private $payed;

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
     * @return bool
     */
    public function isPayed()
    {
        return $this->payed;
    }

    /**
     * @param bool $payed
     */
    public function setPayed(bool $payed)
    {
        $this->payed = $payed;
    }
}
