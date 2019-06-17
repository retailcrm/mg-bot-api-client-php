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
 * Command class. Schema:
 *
 * | Field name  | Data type |
 * |-------------|-----------|
 * | name        | string    |
 * | description | string    |
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string getName()                     "Get `name` value"
 * @method $this  setName(string $value)        "Set `name` value"
 * @method string getDescription()              "Get `description` value"
 * @method $this  setDescription(string $value) "Set `description` value"
 */
class Command extends CommonFields
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
        'name' => 'string',
        'description' => 'string'
    ];
}