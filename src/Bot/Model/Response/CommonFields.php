<?php

/**
 * PHP version 7.0
 *
 * ErrorTrait
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Response;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use LazyJsonMapper\LazyJsonMapper;
use RetailCrm\Mg\Bot\Model\Entity\Error;

/**
 * PHP version 7.0
 *
 * Error trait
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method array getErrors()
 * @method $this setErrors(array $value)
 */
class CommonFields extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'errors' => 'string[]'
    ];

    /**
     * @return bool
     */
    public function isError()
    {
        return !empty($this->getErrors());
    }
}