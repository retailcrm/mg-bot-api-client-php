<?php

/**
 * PHP version 7.0
 *
 * MessagePayment entity
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
 * MessagePayment class. Schema:
 *
 * | Field name | Data type                 |
 * |------------|---------------------------|
 * | amount     | MessageCost               |
 * | name       | string                    |
 * | status     | MessageOrderPaymentStatus |
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method MessageCost               getAmount()                                 "Get `amount` value"
 * @method $this                     setAmount(MessageCost $value)               "Set `amount` value"
 * @method string                    getName()                                   "Get `name` value"
 * @method $this                     setName(string $value)                      "Set `name` value"
 * @method MessageOrderPaymentStatus getStatus()                                 "Get `status` value"
 * @method $this                     setStatus(MessageOrderPaymentStatus $value) "Set `status` value"
 */
class MessagePayment extends CommonFields
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
        'amount' => 'MessageCost',
        'name' => 'string',
        'status' => 'MessageOrderPaymentStatus'
    ];
}