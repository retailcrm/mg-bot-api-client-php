<?php

/**
 * PHP version 7.0
 *
 * Members list request
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
 * MembersRequest class. Parameters:
 *
 * | Parameter name | Data type |
 * |----------------|-----------|
 * | chat_id        | int       |
 * | user_id        | int       |
 * | state          | string    |
 * | since          | string    |
 * | until          | string    |
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method int    getChatId()             "Get `chat_id` value"
 * @method $this  setChatId(int $value)   "Set `chat_id` value"
 * @method int    getUserId()             "Get `user_id` value"
 * @method $this  setUserId(int $value)   "Set `user_id` value"
 * @method string getState()              "Get `state` value"
 * @method $this  setState(string $value) "Set `state` value"
 * @method string getSince()              "Get `since` value"
 * @method $this  setSince(string $value) "Set `since` value"
 * @method string getUntil()              "Get `until` value"
 * @method $this  setUntil(string $value) "Set `until` value"
 */
class MembersRequest extends LazyJsonMapper
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
        'state' => 'string',
        'since' => 'string',
        'until' => 'string'
    ];
}
