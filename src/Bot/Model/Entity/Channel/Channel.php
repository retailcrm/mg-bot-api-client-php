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
 * Channel class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Channel
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string getActivatedAt()
 * @method $this  setActivatedAt(string $value)
 * @method string getDeactivatedAt()
 * @method $this  setDeactivatedAt(string $value)
 * @method bool   getIsActive(bool $value)
 * @method $this  setIsActive()
 * @method ChannelSettings getChannelSettings()
 * @method $this setChannelSettings(ChannelSettings $value)
 * @method string getType()
 * @method $this  setType(string $value)
 * @method string getName()
 * @method $this  setName(string $value)
 */
class Channel extends CommonFields
{
    const JSON_PROPERTY_MAP = [
        'activated_at' => 'string',
        'deactivated_at' => 'string',
        'is_active' => 'bool',
        'settings' => 'ChannelSettings',
        'type' => 'string',
        'name' => 'string'
    ];
}