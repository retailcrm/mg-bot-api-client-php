<?php

/**
 * PHP version 7.0
 *
 * Messages send request
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Request;

use LazyJsonMapper\LazyJsonMapper;
use RetailCrm\Mg\Bot\Model\Entity\Order;
use RetailCrm\Mg\Bot\Model\Entity\Product;

/**
 * PHP version 7.0
 *
 * MessageSendRequest class. Parameters:
 *
 * | Parameter name   | Data type      |
 * |------------------|----------------|
 * | type             | string         |
 * | content          | string         |
 * | product          | MessageProduct |
 * | order            | MessageOrder   |
 * | items            | array          |
 * | scope            | string         |
 * | chat_id          | int            |
 * | quote_message_id | int            |
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string         getType()                         "Get `type` value"
 * @method $this          setType(string $value)            "Set `type` value"
 * @method string         getContent()                      "Get `content` value"
 * @method $this          setContent(string $value)         "Set `content` value"
 * @method MessageProduct getProduct()                      "Get `product` value"
 * @method $this          setProduct(MessageProduct $value) "Set `product` value"
 * @method MessageOrder   getOrder()                        "Get `order` value"
 * @method $this          setOrder(MessageOrder $value)     "Set `order` value"
 * @method array          getItems()                        "Get `items` value"
 * @method $this          setItems(array $value)            "Set `items` value"
 * @method string         getScope()                        "Get `scope` value"
 * @method $this          setScope(string $value)           "Set `scope` value"
 * @method int            getChatId()                       "Get `chat_id` value"
 * @method $this          setChatId(int $value)             "Set `chat_id` value"
 * @method int            getQuoteMessageId()               "Get `quote_message_id` value"
 * @method $this          setQuoteMessageId(int $value)     "Set `quote_message_id` value"
 */
class MessageSendRequest extends LazyJsonMapper
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
        'type' => 'string',
        'content' => 'string',
        'product' => '\RetailCrm\Mg\Bot\Model\Entity\Message\MessageProduct',
        'order' => '\RetailCrm\Mg\Bot\Model\Entity\Message\MessageOrder',
        'items' => '\RetailCrm\Mg\Bot\Model\Entity\Message\Item[]',
        'scope' => 'string',
        'chat_id' => 'int',
        'quote_message_id' => 'int'
    ];
}
