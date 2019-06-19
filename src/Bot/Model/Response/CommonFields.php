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

use LazyJsonMapper\LazyJsonMapper;
use RetailCrm\Mg\Bot\Model\Entity\Error;

/**
 * PHP version 7.0
 *
 * Error trait. Parameters:
 *
 * | Parameter name | Data type |
 * |----------------|-----------|
 * | errors         | array     |
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method array    getErrors()                "Get `errors` value"
 * @method $this    setErrors(array $value)    "Set `errors` value"
 */
class CommonFields extends LazyJsonMapper
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
        'errors' => 'string[]'
    ];

    /**
     * @return bool
     */
    public function isError()
    {
        return (bool) !empty($this->getErrors());
    }
}