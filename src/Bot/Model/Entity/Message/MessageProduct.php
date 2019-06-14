<?php

/**
 * PHP version 7.0
 *
 * MessageProduct entity
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
 * MessageProduct class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string getArticle()
 * @method $this setArticle(string $value)
 * @method MessageCost getCost()
 * @method $this setCost(MessageCost $value)
 * @method int getId()
 * @method $this setId(int $value)
 * @method string getImg()
 * @method $this setImg(string $value)
 * @method string getName()
 * @method $this setName(string $value)
 * @method MessageQuantity getQuantity()
 * @method $this setQuantity(MessageQuantity $value)
 * @method string getUrl()
 * @method $this setUrl(string $value)
 */
class MessageProduct extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'article' => 'string',
        'cost' => 'MessageCost',
        'id' => 'int',
        'img' => 'string',
        'name' => 'string',
        'quantity' => 'MessageQuantity',
        'url' => 'string'
    ];
}