<?php

/**
 * PHP version 7.0
 *
 * MessageDelivery entity
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
 * MessageDelivery class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string getAddress()
 * @method $this setAddress(string $value)
 * @method string getComment()
 * @method $this setComment(string $value)
 * @method string getName()
 * @method $this setName(string $value)
 * @method MessageCost getPrice()
 * @method $this setPrice(MessageCost $value)
 */
class MessageDelivery extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'address' => 'string',
        'comment' => 'string',
        'name' => 'string',
        'price' => 'MessageCost'
    ];
}