<?php

/**
 * PHP version 7.0
 *
 * ChatMember entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Chat
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Chat;

use RetailCrm\Mg\Bot\Model\Entity\CommonFields;

/**
 * PHP version 7.0
 *
 * ChatMember class. Schema:
 *
 * | Field name | Data type |
 * |------------|-----------|
 * | chat_id    | int       |
 * | user_id    | int       |
 * | is_author  | bool      |
 * | state      | string    |
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Chat
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method int    getChatId()              "Get `chat_id` value"
 * @method $this  setChatId(int $value)    "Set `chat_id` value"
 * @method int    getUserId()              "Get `user_id` value"
 * @method $this  setUserId(int $value)    "Set `user_id` value"
 * @method bool   getIsAuthor()            "Get `is_author` value"
 * @method $this  setIsAuthor(bool $value) "Set `is_author` value"
 * @method string getState()               "Get `state` value"
 * @method $this  setState(string $value)  "Set `state` value"
 */
class ChatMember extends CommonFields
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
        'chat_id' => 'int',
        'user_id' => 'int',
        'is_author' => 'bool',
        'state' => 'string'
    ];
}