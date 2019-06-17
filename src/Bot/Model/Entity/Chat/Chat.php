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
 * Chat class. Schema:
 *
 * | Field name    | Data type       |
 * |---------------|-----------------|
 * | avatar        | string          |
 * | name          | string          |
 * | channel       | Channel         |
 * | members       | array           |
 * | customer      | Customer        |
 * | author_id     | int             |
 * | last_message  | ChatLastMessage |
 * | last_activity | string          |
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Chat
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string          getAvatar()                            "Get `avatar` value"
 * @method $this           setAvatar(string $value)               "Set `avatar` value"
 * @method string          getName()                              "Get `name` value"
 * @method $this           setName(string $value)                 "Set `name` value"
 * @method Channel         getChannel()                           "Get `channel` value"
 * @method $this           setChannel(Channel $value)             "Set `channel` value"
 * @method array           getMembers()                           "Get `members` value"
 * @method $this           setMembers(array $value)               "Set `members` value"
 * @method Customer        getCustomer()                          "Get `customer` value"
 * @method $this           setCustomer(Customer $value)           "Set `customer` value"
 * @method int             getAuthorId()                          "Get `author_id` value"
 * @method $this           setAuthorId(int $value)                "Set `author_id` value"
 * @method ChatLastMessage getLastMessage()                       "Get `last_message` value"
 * @method $this           setLastMessage(ChatLastMessage $value) "Set `last_message` value"
 * @method string          getLastActivity()                      "Get `last_activity` value"
 * @method $this           setLastActivity(string $value)         "Set `last_activity` value"
 */
class Chat extends CommonFields
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