<?php

/**
 * PHP version 7.0
 *
 * MessageOrderItem entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Message;

use LazyJsonMapper\LazyJsonMapper;

/**
 * PHP version 7.0
 *
 * MessageOrderItem class. Schema:
 *
 * | Field name | Data type       |
 * |------------|-----------------|
 * | img        | string          |
 * | name       | string          |
 * | price      | MessageCost     |
 * | quantity   | MessageQuantity |
 * | url        | string          |
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string          getImg()                            "Get `img` value"
 * @method $this           setImg(string $value)               "Set `img` value"
 * @method string          getName()                           "Get `name` value"
 * @method $this           setName(string $value)              "Set `name` value"
 * @method MessageCost     getPrice()                          "Get `price` value"
 * @method $this           setPrice(MessageCost $value)        "Set `price` value"
 * @method MessageQuantity getQuantity()                       "Get `quantity` value"
 * @method $this           setQuantity(MessageQuantity $value) "Set `quantity` value"
 * @method string          getUrl()                            "Get `url` value"
 * @method $this           setUrl(string $value)               "Set `url` value"
 */
class MessageOrderItem extends LazyJsonMapper
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
        'img' => 'string',
        'name' => 'string',
        'price' => 'MessageCost',
        'quantity' => 'MessageQuantity',
        'url' => 'string'
    ];
}