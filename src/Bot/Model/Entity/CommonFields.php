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

use LazyJsonMapper\LazyJsonMapper;

/**
 * PHP version 7.0
 *
 * CommonFields trait. Schema:
 *
 * | Field name | Data type |
 * |------------|-----------|
 * | id         | int       |
 * | created_at | string    |
 * | updated_at | string    |
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method int    getId()                     "Get `id` value"
 * @method $this  setId(int $value)           "Set `id` value"
 * @method string getCreatedAt()              "Get `created_at` value"
 * @method $this  setCreatedAt(string $value) "Set `created_at` value"
 * @method string getUpdatedAt()              "Get `updated_at` value"
 * @method $this  setUpdatedAt(string $value) "Set `updated_at` value"
 */
class CommonFields extends LazyJsonMapper
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
        'id' => 'int',
        'created_at' => 'string',
        'updated_at' => 'string'
    ];
}