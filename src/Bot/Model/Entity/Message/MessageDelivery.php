<?php

/**
 * PHP version 7.0
 *
 * MessageDelivery entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Message;

use LazyJsonMapper\LazyJsonMapper;
use Symfony\Component\Validator\Validation;

/**
 * PHP version 7.0
 *
 * MessageDelivery class. Schema:
 *
 * | Field name | Data type   |
 * |------------|-------------|
 * | address    | string      |
 * | comment    | string      |
 * | name       | string      |
 * | price      | MessageCost |
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string      getAddress()                 "Get `address` value"
 * @method $this       setAddress(string $value)    "Set `address` value"
 * @method string      getComment()                 "Get `comment` value"
 * @method $this       setComment(string $value)    "Set `comment` value"
 * @method string      getName()                    "Get `name` value"
 * @method $this       setName(string $value)       "Set `name` value"
 * @method MessageCost getPrice()                   "Get `price` value"
 * @method $this       setPrice(MessageCost $value) "Set `price` value"
 */
class MessageDelivery extends LazyJsonMapper
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
        'address' => 'string',
        'comment' => 'string',
        'name' => 'string',
        'price' => 'MessageCost'
    ];
}