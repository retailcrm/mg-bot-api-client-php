<?php

/**
 * PHP version 7.0
 *
 * Message entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Message;

use RetailCrm\Mg\Bot\Model\Entity\CommonFields;

/**
 * PHP version 7.0
 *
 * Message class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string getTime()
 * @method $this setTime(string $value)
 * @method string getType()
 * @method $this setType(string $value)
 * @method string getScope()
 * @method $this setScope(string $value)
 * @method int getChatId()
 * @method $this setChatId(int $value)
 * @method string getContent()
 * @method $this setContent(string $value)
 * @method bool getIsRead()
 * @method $this setIsRead(bool $value)
 * @method bool getIsEdit()
 * @method $this setIsEdit(bool $value)
 * @method string getStatus()
 * @method $this setStatus(string $value)
 * @method string getAction()
 * @method $this setAction(string $value)
 * @method int getChannelId()
 * @method $this setChannelId(int $value)
 * @method string getChannelSentAt()
 * @method $this setChannelSentAt(string $value)
 * @method MessageOrder getOrder()
 * @method $this setOrder(MessageOrder $value)
 * @method MessageProduct getProduct()
 * @method $this setProduct(MessageProduct $value)
 */
class Message extends CommonFields
{
    const JSON_PROPERTY_MAP = [
        'actions' => '[]',
        'items' => 'Item[]',
        'from' => '\RetailCrm\Mg\Bot\Model\Entity\User',
        'time' => 'string',
        'type' => 'string',
        'scope' => 'string',
        'chat_id' => 'int',
        'content' => 'string',
        'is_read' => 'bool',
        'is_edit' => 'bool',
        'status' => 'string',
        'action' => 'string',
        'dialog' => '\RetailCrm\Mg\Bot\Model\Entity\Dialog',
        'channel_id' => 'int',
        'channel_sent_at' => 'string',
        'order' => 'MessageOrder',
        'product' => 'MessageProduct',
    ];
}