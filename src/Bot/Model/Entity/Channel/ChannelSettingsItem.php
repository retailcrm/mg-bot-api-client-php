<?php

/**
 * PHP version 7.0
 *
 * ChannelSettingsItem entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Channel
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Channel;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use LazyJsonMapper\LazyJsonMapper;

/**
 * PHP version 7.0
 *
 * ChannelSettingsItem class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Channel
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string getCreating()
 * @method $this setCreating(string $value)
 * @method string getEditing()
 * @method $this setEditing(string $value)
 * @method string getQuoting()
 * @method $this setQuoting(string $value)
 * @method string getDeleting()
 * @method $this setDeleting(string $value)
 * @method string getDelivered()
 * @method $this setDelivered(string $value)
 * @method int getMaxItemsCount()
 * @method $this setMaxItemsCount(int $value)
 */
class ChannelSettingsItem extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'creating' => 'string',
        'editing' => 'string',
        'quoting' => 'string',
        'deleting' => 'string',
        'delivered' => 'string',
        'max_items_count' => 'int'
    ];
}