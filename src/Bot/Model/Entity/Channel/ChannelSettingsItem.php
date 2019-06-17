<?php

/**
 * PHP version 7.0
 *
 * ChannelSettingsItem entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Channel
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Channel;

use LazyJsonMapper\LazyJsonMapper;

/**
 * PHP version 7.0
 *
 * ChannelSettingsItem class. Schema:
 *
 * | Field name      | Data type |
 * |-----------------|-----------|
 * | creating        | string    |
 * | editing         | string    |
 * | quoting         | string    |
 * | deleting        | string    |
 * | delivered       | string    |
 * | max_items_count | int       |
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Channel
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string getCreating()                "Get `creating` value"
 * @method $this  setCreating(string $value)   "Set `creating` value"
 * @method string getEditing()                 "Get `editing` value"
 * @method $this  setEditing(string $value)    "Set `editing` value"
 * @method string getQuoting()                 "Get `quoting` value"
 * @method $this  setQuoting(string $value)    "Set `quoting` value"
 * @method string getDeleting()                "Get `deleting` value"
 * @method $this  setDeleting(string $value)   "Set `deleting` value"
 * @method string getDelivered()               "Get `delivered` value"
 * @method $this  setDelivered(string $value)  "Set `delivered` value"
 * @method int    getMaxItemsCount()           "Get `max_items_count` value"
 * @method $this  setMaxItemsCount(int $value) "Set `max_items_count` value"
 */
class ChannelSettingsItem extends LazyJsonMapper
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
        'creating' => 'string',
        'editing' => 'string',
        'quoting' => 'string',
        'deleting' => 'string',
        'delivered' => 'string',
        'max_items_count' => 'int'
    ];
}