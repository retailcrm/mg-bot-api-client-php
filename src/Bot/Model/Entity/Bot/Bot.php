<?php

/**
 * PHP version 7.0
 *
 * Bot entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Bot
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Bot;

use RetailCrm\Mg\Bot\Model\Entity\CommonFields;

/**
 * PHP version 7.0
 *
 * Bot class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Bot
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string getName()
 * @method $this setName(string $value)
 * @method array getEvents()
 * @method $this setEvents(array $value)
 * @method string getClientId()
 * @method $this setClientId(string $value)
 * @method string getAvatarUrl()
 * @method $this setAvatarUrl(string $value)
 * @method array getRoles()
 * @method $this setRoles(array $value)
 * @method string getDeactivatedAt()
 * @method $this setDeactivatedAt(string $value)
 * @method bool getIsActive()
 * @method $this setIsActive(bool $value)
 * @method bool getIsSelf()
 * @method $this setIsSelf(bool $value)
 * @method bool getIsSystem()
 * @method $this setIsSystem(bool $value)
 */
class Bot extends CommonFields
{
    const JSON_PROPERTY_MAP = [
        'name' => 'string',
        'events' => '[]',
        'client_id' => 'string',
        'avatar_url' => 'string',
        'roles' => '[]',
        'deactivated_at' => 'string',
        'is_active' => 'bool',
        'is_self' => 'bool',
        'is_system' => 'bool'
    ];
}