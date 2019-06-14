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
 * ChannelSettings class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Channel
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method ChannelSettingsItem getStatus()
 * @method $this setStatus(ChannelSettingsItem $value)
 * @method ChannelSettingsItem getText()
 * @method $this setText(ChannelSettingsItem $value)
 * @method ChannelSettingsItem getProduct()
 * @method $this setProduct(ChannelSettingsItem $value)
 * @method ChannelSettingsItem getOrder()
 * @method $this setOrder(ChannelSettingsItem $value)
 * @method ChannelSettingsItem getImage()
 * @method $this setImage(ChannelSettingsItem $value)
 * @method ChannelSettingsItem getFile()
 * @method $this setFile(ChannelSettingsItem $value)
 */
class ChannelSettings extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'status' => 'ChannelSettingsItem',
        'text' => 'ChannelSettingsItem',
        'product' => 'ChannelSettingsItem',
        'order' => 'ChannelSettingsItem',
        'image' => 'ChannelSettingsItem',
        'file' => 'ChannelSettingsItem'
    ];
}