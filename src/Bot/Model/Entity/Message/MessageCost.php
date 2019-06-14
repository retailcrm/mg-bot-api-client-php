<?php

/**
 * PHP version 7.0
 *
 * MessageCost entity
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
 * MessageCost class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string getCurrency()
 * @method $this setCurrency(string $value)
 * @method float getValue()
 * @method $this setValue(float $value)
 */
class MessageCost extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'currency' => 'string',
        'value' => 'float'
    ];
}