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
 * ChatMember class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Chat
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method int getChatId()
 * @method $this setChatId(int $value)
 * @method int getUserId()
 * @method $this setUserId(int $value)
 * @method bool getIsAuthor()
 * @method $this setIsAuthor(bool $value)
 * @method string getState()
 * @method $this setState(string $value)
 */
class ChatMember extends CommonFields
{
    const JSON_PROPERTY_MAP = [
        'chat_id' => 'int',
        'user_id' => 'int',
        'is_author' => 'bool',
        'state' => 'string'
    ];
}