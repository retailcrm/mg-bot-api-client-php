<?php

/**
 * PHP version 7.0
 *
 * User entity
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
 * User class. Schema:
 *
 * | Field name  | Data type |
 * |-------------|-----------|
 * | external_id | string    |
 * | type        | string    |
 * | avatar      | string    |
 * | name        | string    |
 * | username    | string    |
 * | first_name  | string    |
 * | last_name   | string    |
 * | is_active   | bool      |
 * | is_online   | bool      |
 * | revoked_at  | string    |
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string getExternalId()              "Get `external_id` value"
 * @method $this  setExternalId(string $value) "Set `external_id` value"
 * @method string getType()                    "Get `type` value"
 * @method $this  setType(string $value)       "Set `type` value"
 * @method string getAvatar()                  "Get `avatar` value"
 * @method $this  setAvatar(string $value)     "Set `avatar` value"
 * @method string getName()                    "Get `name` value"
 * @method $this  setName(string $value)       "Set `name` value"
 * @method string getUsername()                "Get `username` value"
 * @method $this  setUsername(string $value)   "Set `username` value"
 * @method string getFirstName()               "Get `first_name` value"
 * @method $this  setFirstName(string $value)  "Set `first_name` value"
 * @method string getLastName()                "Get `last_name` value"
 * @method $this  setLastName(string $value)   "Set `last_name` value"
 * @method bool   getIsActive()                "Get `is_active` value"
 * @method $this  setIsActive(bool $value)     "Set `is_active` value"
 * @method bool   getIsOnline()                "Get `is_online` value"
 * @method $this  setIsOnline(bool $value)     "Set `is_online` value"
 * @method string getRevokedAt()               "Get `revoked_at` value"
 * @method $this  setRevokedAt(string $value)  "Set `revoked_at` value"
 */
class User extends CommonFields
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
        'type' => 'string',
        'avatar' => 'string',
        'name' => 'string',
        'username' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'is_active' => 'bool',
        'is_online' => 'bool',
        'revoked_at' => 'string'
    ];
}