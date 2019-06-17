<?php

/**
 * PHP version 7.0
 *
 * FullFileResponse
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Response;

/**
 * PHP version 7.0
 *
 * FullFileResponse class. Parameters:
 *
 * | Parameter name | Data type |
 * |----------------|-----------|
 * | id             | string    |
 * | size           | int       |
 * | type           | string    |
 * | url            | string    |
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string getId()                "Get `id` value"
 * @method $this  setId(string $value)   "Set `id` value"
 * @method int    getSize()              "Get `size` value"
 * @method $this  setSize(int $value)    "Set `size` value"
 * @method string getType()              "Get `type` value"
 * @method $this  setType(string $value) "Set `type` value"
 * @method string getUrl()               "Get `url` value"
 * @method $this  setUrl(string $value)  "Set `url` value"
 */
class FullFileResponse extends CommonFields
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
        'id' => 'string',
        'size' => 'int',
        'type' => 'string',
        'url' => 'string'
    ];
}