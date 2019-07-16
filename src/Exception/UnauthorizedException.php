<?php
/**
 * PHP version 7.1
 *
 * UnauthorizedException
 *
 * @package RetailCrm\Common\Exception
 * @author  retailCRM <integration@retailcrm.ru>
 * @license https://opensource.org/licenses/MIT MIT License
 * @link    http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Common\Exception;

use DomainException;
use Throwable;

class UnauthorizedException extends DomainException implements Throwable
{
}
