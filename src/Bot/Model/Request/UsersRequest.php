<?php

/**
 * PHP version 7.0
 *
 * Users list request
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Request;

/**
 * PHP version 7.0
 *
 * UsersRequest class. Parameters:
 *
 * | Parameter name | Data type |
 * |----------------|-----------|
 * | external_id    | string    |
 * | active         | int       |
 * | online         | int       |
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string getExternalId()              "Get `external_id` value"
 * @method $this  setExternalId(string $value) "Set `external_id` value"
 * @method int    getActive()                  "Get `active` value"
 * @method $this  setActive(int $value)        "Set `active` value"
 * @method int    getOnline()                  "Get `online` value"
 * @method $this  setOnline(int $value)        "Set `online` value"
 */
class UsersRequest extends CommonFields
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
        'external_id' => 'string',
        'active' => 'int',
        'online' => 'int'
    ];
}
