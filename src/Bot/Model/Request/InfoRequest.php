<?php

/**
 * PHP version 7.0
 *
 * Bot info request
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
 * InfoRequest class. Parameters:
 *
 * | Parameter name | Data type |
 * |----------------|-----------|
 * | name           | string    |
 * | avatarUrl      | string    |
 * | roles          | array     |
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string   getName()                   "Get `name` value"
 * @method $this    setName(string $value)      "Set `name` value"
 * @method string   getAvatarUrl()              "Get `avatarUrl` value"
 * @method $this    setAvatarUrl(string $value) "Set `avatarUrl` value"
 * @method array    getRoles()                  "Get `roles` value"
 * @method $this    setRoles(array $value)      "Set `roles` value"
 */
class InfoRequest extends LazyJsonMapper
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
        'avatarUrl' => 'string',
        'roles' => 'string[]'
    ];
}
