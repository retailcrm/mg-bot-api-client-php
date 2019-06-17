<?php

/**
 * PHP version 7.0
 *
 * Messages list request
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
 * MessagesRequest class. Parameters:
 *
 * | Parameter name | Data type |
 * |----------------|-----------|
 * | chat_id        | int       |
 * | dialog_id      | int       |
 * | user_id        | int       |
 * | customer_id    | int       |
 * | bot_id         | int       |
 * | channel_id     | int       |
 * | channel_type   | string    |
 * | scope          | string    |
 * | type           | string    |
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method int    getChatId()                   "Get `chat_id` value"
 * @method $this  setChatId(int $value)         "Set `chat_id` value"
 * @method int    getDialogId()                 "Get `dialog_id` value"
 * @method $this  setDialogId(int $value)       "Set `dialog_id` value"
 * @method int    getUserId()                   "Get `user_id` value"
 * @method $this  setUserId(int $value)         "Set `user_id` value"
 * @method int    getCustomerId()               "Get `customer_id` value"
 * @method $this  setCustomerId(int $value)     "Set `customer_id` value"
 * @method int    getBotId()                    "Get `bot_id` value"
 * @method $this  setBotId(int $value)          "Set `bot_id` value"
 * @method int    getChannelId()                "Get `channel_id` value"
 * @method $this  setChannelId(int $value)      "Set `channel_id` value"
 * @method string getChannelType()              "Get `channel_type` value"
 * @method $this  setChannelType(string $value) "Set `channel_type` value"
 * @method string getScope()                    "Get `scope` value"
 * @method $this  setScope(string $value)       "Set `scope` value"
 * @method string getType()                     "Get `type` value"
 * @method $this  setType(string $value)        "Set `type` value"
 */
class MessagesRequest extends CommonFields
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
        'dialog_id' => 'int',
        'user_id' => 'int',
        'customer_id' => 'int',
        'bot_id' => 'int',
        'channel_id' => 'int',
        'channel_type' => 'string',
        'scope' => 'string',
        'type' => 'string'
    ];
}
