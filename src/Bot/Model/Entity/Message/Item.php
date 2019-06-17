<?php

/**
 * PHP version 7.0
 *
 * Item entity
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
 * Item class. Schema:
 *
 * | Field name | Data type |
 * |------------|-----------|
 * | id         | int       |
 * | size       | int       |
 * | caption    | string    |
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method int    getId()                   "Get `id` value"
 * @method $this  setId(int $value)         "Set `id` value"
 * @method int    getSize()                 "Get `size` value"
 * @method $this  setSize(int $value)       "Set `size` value"
 * @method string getCaption()              "Get `caption` value"
 * @method $this  setCaption(string $value) "Set `caption` value"
 */
class Item extends CommonFields
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
        'size' => 'int',
        'caption' => 'string'
    ];
}