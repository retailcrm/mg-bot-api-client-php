<?php

/**
 * PHP version 7.0
 *
 * Command entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity;

/**
 * PHP version 7.0
 *
 * Command class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string getName()
 * @method $this setName(string $value)
 * @method string getDescription()
 * @method $this setDescription(string $value)
 */
class Command extends CommonFields
{
    const JSON_PROPERTY_MAP = [
        'name' => 'string',
        'description' => 'string'
    ];
}