<?php

/**
 * PHP version 7.0
 *
 * MessageOrderPaymentStatus entity
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
 * MessageOrderPaymentStatus class. Schema:
 *
 * | Field name | Data type |
 * |------------|-----------|
 * | name       | string    |
 * | payed      | bool      |
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string getName()              "Get `name` value"
 * @method $this  setName(string $value) "Set `name` value"
 * @method bool   getPayed()             "Get `payed` value"
 * @method $this  setPayed(bool $value)  "Set `payed` value"
 */
class MessageOrderPaymentStatus extends CommonFields
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
        'name' => 'string',
        'payed' => 'bool'
    ];
}