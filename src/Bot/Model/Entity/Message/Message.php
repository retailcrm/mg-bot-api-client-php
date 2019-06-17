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
 * Message class. Schema:
 *
 * | Field name      | Data type      |
 * |-----------------|----------------|
 * | actions         | array          |
 * | items           | array          |
 * | from            | User           |
 * | time            | string         |
 * | type            | string         |
 * | scope           | string         |
 * | chat_id         | int            |
 * | content         | string         |
 * | is_read         | bool           |
 * | is_edit         | bool           |
 * | status          | string         |
 * | action          | string         |
 * | dialog          | Dialog         |
 * | channel_id      | int            |
 * | channel_sent_at | string         |
 * | order           | MessageOrder   |
 * | product         | MessageProduct |
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method array          getActions()                      "Get `actions` value"
 * @method $this          setActions(array $value)          "Set `actions` value"
 * @method array          getItems()                        "Get `items` value"
 * @method $this          setItems(array $value)            "Set `items` value"
 * @method User           getFrom()                         "Get `from` value"
 * @method $this          setFrom(User $value)              "Set `from` value"
 * @method string         getTime()                         "Get `time` value"
 * @method $this          setTime(string $value)            "Set `time` value"
 * @method string         getType()                         "Get `type` value"
 * @method $this          setType(string $value)            "Set `type` value"
 * @method string         getScope()                        "Get `scope` value"
 * @method $this          setScope(string $value)           "Set `scope` value"
 * @method int            getChatId()                       "Get `chat_id` value"
 * @method $this          setChatId(int $value)             "Set `chat_id` value"
 * @method string         getContent()                      "Get `content` value"
 * @method $this          setContent(string $value)         "Set `content` value"
 * @method bool           getIsRead()                       "Get `is_read` value"
 * @method $this          setIsRead(bool $value)            "Set `is_read` value"
 * @method bool           getIsEdit()                       "Get `is_edit` value"
 * @method $this          setIsEdit(bool $value)            "Set `is_edit` value"
 * @method string         getStatus()                       "Get `status` value"
 * @method $this          setStatus(string $value)          "Set `status` value"
 * @method string         getAction()                       "Get `action` value"
 * @method $this          setAction(string $value)          "Set `action` value"
 * @method Dialog         getDialog()                       "Get `dialog` value"
 * @method $this          setDialog(Dialog $value)          "Set `dialog` value"
 * @method int            getChannelId()                    "Get `channel_id` value"
 * @method $this          setChannelId(int $value)          "Set `channel_id` value"
 * @method string         getChannelSentAt()                "Get `channel_sent_at` value"
 * @method $this          setChannelSentAt(string $value)   "Set `channel_sent_at` value"
 * @method MessageOrder   getOrder()                        "Get `order` value"
 * @method $this          setOrder(MessageOrder $value)     "Set `order` value"
 * @method MessageProduct getProduct()                      "Get `product` value"
 * @method $this          setProduct(MessageProduct $value) "Set `product` value"
 */
class Message extends CommonFields
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