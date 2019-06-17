<?php

/**
 * PHP version 7.0
 *
 * MessageQuantity entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Message;

use RetailCrm\Mg\Bot\Model\Entity\CommonFields;

/**
 * PHP version 7.0
 *
 * MessageQuantity class. Schema:
 *
 * | Field name | Data type |
 * |------------|-----------|
 * | unit       | string    |
 * | value      | float     |
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string getUnit()              "Get `unit` value"
 * @method $this  setUnit(string $value) "Set `unit` value"
 * @method float  getValue()             "Get `value` value"
 * @method $this  setValue(float $value) "Set `value` value"
 */
class MessageQuantity extends CommonFields
{
    /**
     * JSON fields. Use setters and getters to work with this values.
     * Setters will return model instance, so you can construct any model like this:
     * ```
     * $request = (new InfoRequest())
     *              ->setName("...")
     *              ->setRoles([...]);
     *```
     * Model constructor can accept array as initial data. You can use
     * this to initialize models:
     * ```
     * $request = new InfoRequest(["name" => "...", "roles" => [...]]);
     * ```
     */
    const JSON_PROPERTY_MAP = [
        'unit' => 'string',
        'value' => 'float'
    ];
}