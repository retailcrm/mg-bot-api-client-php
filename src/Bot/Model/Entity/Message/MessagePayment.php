<?php

/**
 * PHP version 7.0
 *
 * MessagePayment entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Message;

use RetailCrm\Mg\Bot\Model\Entity\CommonFields;

/**
 * PHP version 7.0
 *
 * MessagePayment class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method MessageCost getAmount()
 * @method $this setAmount(MessageCost $value)
 * @method string getName()
 * @method $this setName(string $value)
 * @method MessageOrderPaymentStatus getStatus()
 * @method $this setStatus(MessageOrderPaymentStatus $value)
 */
class MessagePayment extends CommonFields
{
    const JSON_PROPERTY_MAP = [
        'amount' => 'MessageCost',
        'name' => 'string',
        'status' => 'MessageOrderPaymentStatus'
    ];
}