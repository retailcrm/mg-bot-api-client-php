<?php

/**
 * PHP version 7.0
 *
 * Item entity
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
 * Item class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method int getId()
 * @method $this setId(int $value)
 * @method int getSize()
 * @method $this setSize(int $value)
 * @method string getCaption()
 * @method $this setCaption(string $value)
 */
class Item extends CommonFields
{
    const JSON_PROPERTY_MAP = [
        'id' => 'int',
        'size' => 'int',
        'caption' => 'string'
    ];
}