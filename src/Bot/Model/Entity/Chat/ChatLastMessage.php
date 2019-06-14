<?php

/**
 * PHP version 7.0
 *
 * ChatLastMessage entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Chat
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Chat;


use LazyJsonMapper\LazyJsonMapper;

/**
 * PHP version 7.0
 *
 * ChatLastMessage class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Chat
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method int getId()
 * @method $this setId(int $value)
 * @method string getTime()
 * @method $this setTime(string $value)
 * @method string getType()
 * @method $this setType(string $value)
 */
class ChatLastMessage extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id' => 'int',
        'time' => 'string',
        'type' => 'string'
    ];
}