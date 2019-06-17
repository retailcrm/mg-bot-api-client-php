<?php

/**
 * PHP version 7.0
 *
 * MessageOrder entity
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
 * MessageOrder class. Schema:
 *
 * | Field name | Data type          |
 * |------------|--------------------|
 * | cost       | MessageCost        |
 * | date       | string             |
 * | delivery   | MessageDelivery    |
 * | items      | array              |
 * | number     | string             |
 * | payments   | array              |
 * | status     | MessageStatus      |
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method MessageCost        getCost()                            "Get `cost` value"
 * @method $this              setCost(MessageCost $value)          "Set `cost` value"
 * @method string             getDate()                            "Get `date` value"
 * @method $this              setDate(string $value)               "Set `date` value"
 * @method MessageDelivery    getDelivery()                        "Get `delivery` value"
 * @method $this              setDelivery(MessageDelivery $value)  "Set `delivery` value"
 * @method array              getItems()                           "Get `items` value"
 * @method $this              setItems(array $value)               "Set `items` value"
 * @method string             getNumber()                          "Get `number` value"
 * @method $this              setNumber(string $value)             "Set `number` value"
 * @method array              getPayments()                        "Get `payments` value"
 * @method $this              setPayments(array $value)            "Set `payments` value"
 * @method MessageStatus      getStatus()                          "Get `status` value"
 * @method $this              setStatus(MessageStatus $value)      "Set `status` value"
 */
class MessageOrder extends LazyJsonMapper
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
        'cost' => 'MessageCost',
        'date' => 'string',
        'delivery' => 'MessageDelivery',
        'items' => 'MessageOrderItem[]',
        'number' => 'string',
        'payments' => 'MessagePayment[]',
        'status' => 'MessageStatus'
    ];
}