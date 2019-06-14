<?php

/**
 * PHP version 7.0
 *
 * Chat entity
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
 * Chat class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Chat
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 */
class Chat extends CommonFields
{
    const JSON_PROPERTY_MAP = [
        'avatar' => 'string',
        'name' => 'string',
        'channel' => '\RetailCrm\Mg\Bot\Model\Entity\Channel\Channel',
        'members' => 'ChatMember[]',
        'customer' => '\RetailCrm\Mg\Bot\Model\Entity\Customer',
        'author_id' => 'int',
        'last_message' => 'ChatLastMessage',
        'last_activity' => 'string'
    ];
}