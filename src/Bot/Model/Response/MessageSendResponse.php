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
 * MessageSendResponse class
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method int getMessageId()
 * @method $this setMessageId(int $value)
 * @method string getTime()
 * @method $this setTime(string $value)
 */
class MessageSendResponse extends CommonFields
{
    const JSON_PROPERTY_MAP = [
        'message_id' => 'int',
        'time' => 'string'
    ];
}