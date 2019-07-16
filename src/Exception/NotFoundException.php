<?php
/**
 * PHP version 7.1
 *
 * NotFoundException
 *
 * @package RetailCrm\Common\Exception
 * @author  retailCRM <integration@retailcrm.ru>
 * @license https://opensource.org/licenses/MIT MIT License
 * @link    http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Common\Exception;

use DomainException;
use Throwable;

/**
 * Class NotFoundException
 *
 * @package RetailCrm\Common\Exception
 * @author  retailCRM <integration@retailcrm.ru>
 * @license https://opensource.org/licenses/MIT MIT License
 * @link    http://help.retailcrm.pro/docs/Developers
 */
class NotFoundException extends DomainException implements Throwable
{
}
