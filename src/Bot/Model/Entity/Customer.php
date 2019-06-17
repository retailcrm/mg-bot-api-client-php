<?php

/**
 * PHP version 7.0
 *
 * Customer entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity;

use RetailCrm\Mg\Bot\Model\Entity\CommonFields;

/**
 * PHP version 7.0
 *
 * Customer class. Schema:
 *
 * | Field name  | Data type |
 * |-------------|-----------|
 * | external_id | string    |
 * | channel_id  | int       |
 * | username    | string    |
 * | first_name  | string    |
 * | last_name   | string    |
 * | avatar_url  | string    |
 * | profile_url | string    |
 * | revoked_at  | string    |
 * | country     | string    |
 * | language    | string    |
 * | phone       | string    |
 * | email       | string    |
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string getExternalId()              "Get `external_id` value"
 * @method $this  setExternalId(string $value) "Set `external_id` value"
 * @method int    getChannelId()               "Get `channel_id` value"
 * @method $this  setChannelId(int $value)     "Set `channel_id` value"
 * @method string getUsername()                "Get `username` value"
 * @method $this  setUsername(string $value)   "Set `username` value"
 * @method string getFirstName()               "Get `first_name` value"
 * @method $this  setFirstName(string $value)  "Set `first_name` value"
 * @method string getLastName()                "Get `last_name` value"
 * @method $this  setLastName(string $value)   "Set `last_name` value"
 * @method string getAvatarUrl()               "Get `avatar_url` value"
 * @method $this  setAvatarUrl(string $value)  "Set `avatar_url` value"
 * @method string getProfileUrl()              "Get `profile_url` value"
 * @method $this  setProfileUrl(string $value) "Set `profile_url` value"
 * @method string getRevokedAt()               "Get `revoked_at` value"
 * @method $this  setRevokedAt(string $value)  "Set `revoked_at` value"
 * @method string getCountry()                 "Get `country` value"
 * @method $this  setCountry(string $value)    "Set `country` value"
 * @method string getLanguage()                "Get `language` value"
 * @method $this  setLanguage(string $value)   "Set `language` value"
 * @method string getPhone()                   "Get `phone` value"
 * @method $this  setPhone(string $value)      "Set `phone` value"
 * @method string getEmail()                   "Get `email` value"
 * @method $this  setEmail(string $value)      "Set `email` value"
 */
class Customer extends CommonFields
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
        'channel_id' => 'int',
        'username' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'avatar_url' => 'string',
        'profile_url' => 'string',
        'revoked_at' => 'string',
        'country' => 'string',
        'language' => 'string',
        'phone' => 'string',
        'email' => 'string'
    ];
}