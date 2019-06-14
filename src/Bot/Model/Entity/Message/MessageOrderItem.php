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

use LazyJsonMapper\LazyJsonMapper;

/**
 * PHP version 7.0
 *
 * MessageOrderItem class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string getImg()
 * @method $this setImg(string $value)
 * @method string getName()
 * @method $this setName(string $value)
 * @method MessageCost getPrice()
 * @method $this setPrice(MessageCost $value)
 * @method MessageQuantity getQuantity()
 * @method $this setQuantity(MessageQuantity $value)
 * @method string getUrl()
 * @method $this setUrl(string $value)
 */
class MessageOrderItem extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'img' => 'string',
        'name' => 'string',
        'price' => 'MessageCost',
        'quantity' => 'MessageQuantity',
        'url' => 'string'
    ];
}