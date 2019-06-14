<?php

/**
 * PHP version 7.0
 *
 * Customer entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity;

use RetailCrm\Mg\Bot\Model\Entity\CommonFields;

/**
 * PHP version 7.0
 *
 * Customer class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string getExternalId()
 * @method $this setExternalId(string $value)
 * @method int getChannelId()
 * @method $this setChannelId(int $value)
 * @method string getUsername()
 * @method $this setUsername(string $value)
 * @method string getFirstName()
 * @method $this setFirstName(string $value)
 * @method string getLastName()
 * @method $this setLastName(string $value)
 * @method string getAvatarUrl()
 * @method $this setAvatarUrl(string $value)
 * @method string getProfileUrl()
 * @method $this setProfileUrl(string $value)
 * @method string getRevokedAt()
 * @method $this setRevokedAt(string $value)
 * @method string getCountry()
 * @method $this setCountry(string $value)
 * @method string getLanguage()
 * @method $this setLanguage(string $value)
 * @method string getPhone()
 * @method $this setPhone(string $value)
 * @method string getEmail()
 * @method $this setEmail(string $value)
 */
class Customer extends CommonFields
{
    const JSON_PROPERTY_MAP = [
        'external_id' => 'string',
        'channel_id' => 'int',
        'username' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'avatar_url' => 'string',
        'profile_url' => 'string',
        'revoked_at' => 'string',
        'country' => 'string',
        'language' => 'string',
        'phone' => 'string',
        'email' => 'string'
    ];
}