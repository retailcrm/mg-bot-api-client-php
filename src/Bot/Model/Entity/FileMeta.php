<?php

/**
 * PHP version 7.0
 *
 * FileMeta entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity;

use LazyJsonMapper\LazyJsonMapper;

/**
 * PHP version 7.0
 *
 * FileMeta class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class FileMeta extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'height' => 'int',
        'width' => 'int'
    ];
}