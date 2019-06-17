<?php

/**
 * PHP version 7.0
 *
 * Edit Command Request
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Request;

use LazyJsonMapper\LazyJsonMapper;

/**
 * PHP version 7.0
 *
 * CommandEditRequest class. Parametres:
 *
 * | Parameter name | Data type |
 * |----------------|-----------|
 * | bot_id         | int       |
 * | name           | string    |
 * | description    | string    |
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method int    getBotId()                    "Get `bot_id` value"
 * @method $this  setBotId(int $value)          "Set `bot_id` value"
 * @method string getName()                     "Get `name` value"
 * @method $this  setName(string $value)        "Set `name` value"
 * @method string getDescription()              "Get `description` value"
 * @method $this  setDescription(string $value) "Set `description` value"
 */
class CommandEditRequest extends LazyJsonMapper
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
        'bot_id' => 'int',
        'name' => 'string',
        'description' => 'string'
    ];
}
