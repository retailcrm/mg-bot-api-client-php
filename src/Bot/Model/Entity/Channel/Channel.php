<?php

/**
 * PHP version 7.0
 *
 * Channel entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Channel
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Channel;

use RetailCrm\Mg\Bot\Model\Entity\CommonFields;

/**
 * PHP version 7.0
 *
 * Channel class. Schema:
 *
 * | Field name     | Data type       |
 * |----------------|-----------------|
 * | activated_at   | string          |
 * | deactivated_at | string          |
 * | is_active      | bool            |
 * | settings       | ChannelSettings |
 * | type           | string          |
 * | name           | string          |
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Channel
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string          getActivatedAt()                    "Get `activated_at` value"
 * @method $this           setActivatedAt(string $value)       "Set `activated_at` value"
 * @method string          getDeactivatedAt()                  "Get `deactivated_at` value"
 * @method $this           setDeactivatedAt(string $value)     "Set `deactivated_at` value"
 * @method bool            getIsActive()                       "Get `is_active` value"
 * @method $this           setIsActive(bool $value)            "Set `is_active` value"
 * @method ChannelSettings getSettings()                       "Get `settings` value"
 * @method $this           setSettings(ChannelSettings $value) "Set `settings` value"
 * @method string          getType()                           "Get `type` value"
 * @method $this           setType(string $value)              "Set `type` value"
 * @method string          getName()                           "Get `name` value"
 * @method $this           setName(string $value)              "Set `name` value"
 */
class Channel extends CommonFields
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
        'activated_at' => 'string',
        'deactivated_at' => 'string',
        'is_active' => 'bool',
        'settings' => 'ChannelSettings',
        'type' => 'string',
        'name' => 'string'
    ];
}