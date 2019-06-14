<?php

/**
 * PHP version 7.0
 *
 * MessageStatus entity
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
 * MessageStatus class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string getCode()
 * @method $this setCode(string $value)
 * @method float getName()
 * @method $this setName(float $value)
 */
class MessageStatus extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'code' => 'string',
        'name' => 'string'
    ];
}