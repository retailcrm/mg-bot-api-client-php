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
 * AssignResponse class. Parameters:
 *
 * | Parameter name       | Data type   |
 * |----------------------|-------------|
 * | is_reassign          | bool        |
 * | left_manager_id      | int         |
 * | previous_responsible | Responsible |
 * | responsible          | Responsible |
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method bool        getIsReassign()                            "Get `is_reassign` value"
 * @method $this       setIsReassign(bool $value)                 "Set `is_reassign` value"
 * @method int         getLeftManagerId()                         "Get `left_manager_id` value"
 * @method $this       setLeftManagerId(int $value)               "Set `left_manager_id` value"
 * @method Responsible getPreviousResponsible()                   "Get `previous_responsible` value"
 * @method $this       setPreviousResponsible(Responsible $value) "Set `previous_responsible` value"
 * @method Responsible getResponsible()                           "Get `responsible` value"
 * @method $this       setResponsible(Responsible $value)         "Set `responsible` value"
 */
class AssignResponse extends CommonFields
{
    /**
     * JSON fields. Use setters and getters to work with this values.
     * Setters will return model instance, so you can construct any model like this:
     * ```
     * $request = (new InfoRequest())
     *              ->setName("...")
     *              ->setRoles([...]);
     *```
     * Model constructor can accept array as initial data. You can use
     * this to initialize models:
     * ```
     * $request = new InfoRequest(["name" => "...", "roles" => [...]]);
     * ```
     */
    const JSON_PROPERTY_MAP = [
        'is_reassign' => 'bool',
        'left_manager_id' => 'int',
        'previous_responsible' => 'Responsible',
        'responsible' => 'Responsible'
    ];
}