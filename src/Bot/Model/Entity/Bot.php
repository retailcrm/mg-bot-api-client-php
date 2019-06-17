<?php

/**
 * PHP version 7.0
 *
 * Bot entity
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
 * Bot class. Schema:
 *
 * | Field name     | Data type |
 * |----------------|-----------|
 * | name           | string    |
 * | events         | array     |
 * | client_id      | string    |
 * | avatar_url     | string    |
 * | roles          | array     |
 * | deactivated_at | string    |
 * | is_active      | bool      |
 * | is_self        | bool      |
 * | is_system      | bool      |
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string getName()                       "Get `name` value"
 * @method $this  setName(string $value)          "Set `name` value"
 * @method array  getEvents()                     "Get `events` value"
 * @method $this  setEvents(array $value)         "Set `events` value"
 * @method string getClientId()                   "Get `client_id` value"
 * @method $this  setClientId(string $value)      "Set `client_id` value"
 * @method string getAvatarUrl()                  "Get `avatar_url` value"
 * @method $this  setAvatarUrl(string $value)     "Set `avatar_url` value"
 * @method array  getRoles()                      "Get `roles` value"
 * @method $this  setRoles(array $value)          "Set `roles` value"
 * @method string getDeactivatedAt()              "Get `deactivated_at` value"
 * @method $this  setDeactivatedAt(string $value) "Set `deactivated_at` value"
 * @method bool   getIsActive()                   "Get `is_active` value"
 * @method $this  setIsActive(bool $value)        "Set `is_active` value"
 * @method bool   getIsSelf()                     "Get `is_self` value"
 * @method $this  setIsSelf(bool $value)          "Set `is_self` value"
 * @method bool   getIsSystem()                   "Get `is_system` value"
 * @method $this  setIsSystem(bool $value)        "Set `is_system` value"
 */
class Bot extends CommonFields
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
        'events' => 'mixed',
        'client_id' => 'string',
        'avatar_url' => 'string',
        'roles' => 'mixed',
        'deactivated_at' => 'string',
        'is_active' => 'bool',
        'is_self' => 'bool',
        'is_system' => 'bool'
    ];
}