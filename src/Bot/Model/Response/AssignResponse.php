<?php

/**
 * PHP version 7.0
 *
 * AssignResponse
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Response;

use RetailCrm\Mg\Bot\Model\Entity\Responsible;

/**
 * PHP version 7.0
 *
 * AssignResponse class
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method bool getIsReassign()
 * @method $this setIsReassign(bool $value)
 * @method int getLeftManagerId()
 * @method $this setLeftManagerId(int $value)
 * @method Responsible getPreviousResponsible()
 * @method $this setPreviousResponsible(Responsible $value)
 * @method Responsible getResponsible()
 * @method $this setResponsible(Responsible $value)
 */
class AssignResponse extends CommonFields
{
    const JSON_PROPERTY_MAP = [
        'is_reassign' => 'bool',
        'left_manager_id' => 'int',
        'previous_responsible' => 'Responsible',
        'responsible' => 'Responsible'
    ];
}