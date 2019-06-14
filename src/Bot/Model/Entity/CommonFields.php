<?php

/**
 * PHP version 7.0
 *
 * CommonFields trait
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
use LazyJsonMapper\LazyJsonMapper;

/**
 * PHP version 7.0
 *
 * CommonFields trait
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class CommonFields extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id' => 'int',
        'created_at' => 'string',
        'updated_at' => 'string'
    ];
}