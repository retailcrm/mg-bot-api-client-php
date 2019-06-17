<?php

/**
 * PHP version 7.0
 *
 * Common fields
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Request;

use LazyJsonMapper\LazyJsonMapper;

/**
 * PHP version 7.0
 *
 * CommonFields class. Parametres:
 *
 * | Parameter name | Data type |
 * |----------------|-----------|
 * | id             | int       |
 * | since          | string    |
 * | until          | string    |
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method int    getId()                 "Get `id` value"
 * @method $this  setId(int $value)       "Set `id` value"
 * @method string getSince()              "Get `since` value"
 * @method $this  setSince(string $value) "Set `since` value"
 * @method string getUntil()              "Get `until` value"
 * @method $this  setUntil(string $value) "Set `until` value"
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
        'since' => 'string',
        'until' => 'string'
    ];
}
