<?php

/**
 * PHP version 7.0
 *
 * Responsible entity
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
 * Responsible class. Schema:
 *
 * | Field name  | Data type |
 * |-------------|-----------|
 * | assigned_at | string    |
 * | id          | int       |
 * | type        | string    |
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string getAssignedAt()              "Get `assigned_at` value"
 * @method $this  setAssignedAt(string $value) "Set `assigned_at` value"
 * @method int    getId()                      "Get `id` value"
 * @method $this  setId(int $value)            "Set `id` value"
 * @method string getType()                    "Get `type` value"
 * @method $this  setType(string $value)       "Set `type` value"
 */
class Responsible extends LazyJsonMapper
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
        'assigned_at' => 'string',
        'id' => 'int',
        'type' => 'string'
    ];
}
