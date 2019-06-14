<?php

/**
 * PHP version 7.0
 *
 * MessageOrder entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Message;

use LazyJsonMapper\LazyJsonMapper;

/**
 * PHP version 7.0
 *
 * MessageOrder class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method MessageCost getCost()
 * @method $this setCost(MessageCost $value)
 * @method string getDate()
 * @method $this setDate(string $value)
 * @method MessageDelivery getDelivery()
 * @method $this setDelivery(MessageDelivery $value)
 * @method string getNumber()
 * @method $this setNumber(string $value)
 * @method MessageStatus getStatus()
 * @method $this setStatus(MessageStatus $value)
 */
class MessageOrder extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'cost' => 'MessageCost',
        'date' => 'string',
        'delivery' => 'MessageDelivery',
        'items' => 'MessageOrderItem[]',
        'number' => 'string',
        'payments' => 'MessagePayment[]',
        'status' => 'MessageStatus'
    ];
}