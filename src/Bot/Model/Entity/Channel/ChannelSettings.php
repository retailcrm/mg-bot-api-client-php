<?php

/**
 * PHP version 7.0
 *
 * ChannelSettings entity
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
 * ChannelSettings class. Schema:
 *
 * | Field name | Data type           |
 * |------------|---------------------|
 * | status     | ChannelSettingsItem |
 * | text       | ChannelSettingsItem |
 * | product    | ChannelSettingsItem |
 * | order      | ChannelSettingsItem |
 * | image      | ChannelSettingsItem |
 * | file       | ChannelSettingsItem |
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Channel
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method ChannelSettingsItem getStatus()                            "Get `status` value"
 * @method $this               setStatus(ChannelSettingsItem $value)  "Set `status` value"
 * @method ChannelSettingsItem getText()                              "Get `text` value"
 * @method $this               setText(ChannelSettingsItem $value)    "Set `text` value"
 * @method ChannelSettingsItem getProduct()                           "Get `product` value"
 * @method $this               setProduct(ChannelSettingsItem $value) "Set `product` value"
 * @method ChannelSettingsItem getOrder()                             "Get `order` value"
 * @method $this               setOrder(ChannelSettingsItem $value)   "Set `order` value"
 * @method ChannelSettingsItem getImage()                             "Get `image` value"
 * @method $this               setImage(ChannelSettingsItem $value)   "Set `image` value"
 * @method ChannelSettingsItem getFile()                              "Get `file` value"
 * @method $this               setFile(ChannelSettingsItem $value)    "Set `file` value"
 */
class ChannelSettings extends LazyJsonMapper
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
        'status' => 'ChannelSettingsItem',
        'text' => 'ChannelSettingsItem',
        'product' => 'ChannelSettingsItem',
        'order' => 'ChannelSettingsItem',
        'image' => 'ChannelSettingsItem',
        'file' => 'ChannelSettingsItem'
    ];
}