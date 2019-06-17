<?php

/**
 * PHP version 7.0
 *
 * MessageSendResponse
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Response;

/**
 * PHP version 7.0
 *
 * MessageSendResponse class. Parameters:
 *
 * | Parameter name | Data type |
 * |----------------|-----------|
 * | message_id     | int       |
 * | time           | string    |
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method int    getMessageId()           "Get `message_id` value"
 * @method $this  setMessageId(int $value) "Set `message_id` value"
 * @method string getTime()                "Get `time` value"
 * @method $this  setTime(string $value)   "Set `time` value"
 */
class MessageSendResponse extends CommonFields
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
        'message_id' => 'int',
        'time' => 'string'
    ];
}