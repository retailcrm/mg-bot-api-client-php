<?php

/**
 * PHP version 7.0
 *
 * ChatLastMessage entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Chat
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Chat;


use LazyJsonMapper\LazyJsonMapper;

/**
 * PHP version 7.0
 *
 * ChatLastMessage class. Schema:
 *
 * | Field name | Data type |
 * |------------|-----------|
 * | id         | int       |
 * | time       | string    |
 * | type       | string    |
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Chat
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method int    getId()                "Get `id` value"
 * @method $this  setId(int $value)      "Set `id` value"
 * @method string getTime()              "Get `time` value"
 * @method $this  setTime(string $value) "Set `time` value"
 * @method string getType()              "Get `type` value"
 * @method $this  setType(string $value) "Set `type` value"
 */
class ChatLastMessage extends LazyJsonMapper
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
        'id' => 'int',
        'time' => 'string',
        'type' => 'string'
    ];
}