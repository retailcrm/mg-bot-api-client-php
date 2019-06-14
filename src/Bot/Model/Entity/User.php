<?php

/**
 * PHP version 7.0
 *
 * User entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity;

/**
 * PHP version 7.0
 *
 * User class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method int getId()
 * @method $this setId(int $value)
 * @method string getType()
 * @method $this setType(string $value)
 * @method string getAvatar()
 * @method $this setAvatar(string $value)
 * @method string getName()
 * @method $this setName(string $value)
 * @method string getUsername()
 * @method $this setUsername(string $value)
 * @method string getFirstName()
 * @method $this setFirstName(string $value)
 * @method string getLastName()
 * @method $this setLastName(string $value)
 */
class User extends CommonFields
{
    const JSON_PROPERTY_MAP = [
        'external_id' => 'string',
        'type' => 'string',
        'avatar' => 'string',
        'name' => 'string',
        'username' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'is_active' => 'bool',
        'is_online' => 'bool',
        'revoked_at' => 'string'
    ];
}