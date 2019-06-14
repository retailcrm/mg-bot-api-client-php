<?php

/**
 * PHP version 7.0
 *
 * Dialog entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity;

use RetailCrm\Mg\Bot\Model\Entity\CommonFields;

/**
 * PHP version 7.0
 *
 * Dialog class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method int getBotId()
 * @method $this setBotId(int $value)
 * @method int getChatId()
 * @method $this setChatId(int $value)
 * @method int getBeginMessageId()
 * @method $this setBeginMessageId(int $value)
 * @method int getEndingMessageId()
 * @method $this setEndingMessageId(int $value)
 * @method string getClosedAt()
 * @method $this setClosedAt(string $value)
 * @method bool getIsAssigned()
 * @method $this setIsAssigned(bool $value)
 * @method Responsible getResponsible()
 * @method $this setResponsible(Responsible $value)
 * @method bool getIsActive()
 * @method $this setIsActive(bool $value)
 */
class Dialog extends CommonFields
{
    const JSON_PROPERTY_MAP = [
        'bot_id' => 'int',
        'chat_id' => 'int',
        'begin_message_id' => 'int',
        'ending_message_id' => 'int',
        'closed_at' => 'string',
        'is_assigned' => 'bool',
        'responsible' => 'Responsible',
        'is_active' => 'bool'
    ];
}