<?php

/**
 * PHP version 7.0
 *
 * Chats list request
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
 * ChatsRequest class. Parameters:
 *
 * | Parameter name | Data type |
 * |----------------|-----------|
 * | channel_id     | int       |
 * | channel_type   | string    |
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method int    getChannelId()                "Get `channel_id` value"
 * @method $this  setChannelId(int $value)      "Set `channel_id` value"
 * @method string getChannelType()              "Get `channel_type` value"
 * @method $this  setChannelType(string $value) "Set `channel_type` value"
 */
class ChatsRequest extends CommonFields
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
        'channel_id' => 'int',
        'channel_type' => 'string'
    ];
}
