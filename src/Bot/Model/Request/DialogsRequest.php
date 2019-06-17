<?php

/**
 * PHP version 7.0
 *
 * Dialogs list request
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
 * DialogsRequest class. Parametres:
 *
 * | Parameter name | Data type |
 * |----------------|-----------|
 * | chat_id        | int       |
 * | user_id        | int       |
 * | bot_id         | int       |
 * | active         | int       |
 * | assign         | int       |
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method int   getChatId()           "Get `chat_id` value"
 * @method $this setChatId(int $value) "Set `chat_id` value"
 * @method int   getUserId()           "Get `user_id` value"
 * @method $this setUserId(int $value) "Set `user_id` value"
 * @method int   getBotId()            "Get `bot_id` value"
 * @method $this setBotId(int $value)  "Set `bot_id` value"
 * @method int   getActive()           "Get `active` value"
 * @method $this setActive(int $value) "Set `active` value"
 * @method int   getAssign()           "Get `assign` value"
 * @method $this setAssign(int $value) "Set `assign` value"
 */
class DialogsRequest extends CommonFields
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
        'bot_id' => 'int',
        'active' => 'int',
        'assign' => 'int'
    ];
}
