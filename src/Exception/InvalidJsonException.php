<?php

/**
 * PHP version 7.1
 *
 * InvalidJsonException
 *
 * @package  RetailCrm\Common\Exception
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Common\Exception;

use DomainException;
use Throwable;

/**
 * Class InvalidJsonException
 *
 * @package  RetailCrm\Common\Exception
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class InvalidJsonException extends DomainException implements Throwable
{
}
