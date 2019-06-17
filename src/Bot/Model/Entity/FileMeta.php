<?php

/**
 * PHP version 7.0
 *
 * FileMeta entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity;

use LazyJsonMapper\LazyJsonMapper;

/**
 * PHP version 7.0
 *
 * FileMeta class. Schema:
 *
 * | Field name | Data type |
 * |------------|-----------|
 * | height     | int       |
 * | width      | int       |
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method int   getHeight()           "Get `height` value"
 * @method $this setHeight(int $value) "Set `height` value"
 * @method int   getWidth()            "Get `width` value"
 * @method $this setWidth(int $value)  "Set `width` value"
 */
class FileMeta extends LazyJsonMapper
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
        'height' => 'int',
        'width' => 'int'
    ];
}