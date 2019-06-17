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
 * Dialog class. Schema:
 *
 * | Field name        | Data type   |
 * |-------------------|-------------|
 * | bot_id            | int         |
 * | chat_id           | int         |
 * | begin_message_id  | int         |
 * | ending_message_id | int         |
 * | closed_at         | string      |
 * | is_assigned       | bool        |
 * | responsible       | Responsible |
 * | is_active         | bool        |
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method int         getBotId()                         "Get `bot_id` value"
 * @method $this       setBotId(int $value)               "Set `bot_id` value"
 * @method int         getChatId()                        "Get `chat_id` value"
 * @method $this       setChatId(int $value)              "Set `chat_id` value"
 * @method int         getBeginMessageId()                "Get `begin_message_id` value"
 * @method $this       setBeginMessageId(int $value)      "Set `begin_message_id` value"
 * @method int         getEndingMessageId()               "Get `ending_message_id` value"
 * @method $this       setEndingMessageId(int $value)     "Set `ending_message_id` value"
 * @method string      getClosedAt()                      "Get `closed_at` value"
 * @method $this       setClosedAt(string $value)         "Set `closed_at` value"
 * @method bool        getIsAssigned()                    "Get `is_assigned` value"
 * @method $this       setIsAssigned(bool $value)         "Set `is_assigned` value"
 * @method Responsible getResponsible()                   "Get `responsible` value"
 * @method $this       setResponsible(Responsible $value) "Set `responsible` value"
 * @method bool        getIsActive()                      "Get `is_active` value"
 * @method $this       setIsActive(bool $value)           "Set `is_active` value"
 */
class Dialog extends CommonFields
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