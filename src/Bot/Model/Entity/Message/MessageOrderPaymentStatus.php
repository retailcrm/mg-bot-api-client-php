<?php

/**
 * PHP version 7.0
 *
 * MessageOrderPaymentStatus entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Message;

use RetailCrm\Mg\Bot\Model\Entity\CommonFields;

/**
 * PHP version 7.0
 *
 * MessageOrderPaymentStatus class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string getName()
 * @method $this setName(string $value)
 * @method bool getPayed()
 * @method $this setPayed(bool $value)
 */
class MessageOrderPaymentStatus extends CommonFields
{
    const JSON_PROPERTY_MAP = [
        'name' => 'string',
        'payed' => 'bool'
    ];
}