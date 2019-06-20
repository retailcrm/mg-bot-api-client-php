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

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;

/**
 * PHP version 7.0
 *
 * CommonFields trait
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
trait CommonFields
{
    /**
     * @var array $errors
     *
     * @Type("array")
     * @Accessor(getter="getErrors",setter="setErrors")
     * @SkipWhenEmpty()
     */
    private $errors;

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return is_null($this->errors) ? [] : $this->errors;
    }

    /**
     * @param array $errors
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
    }

    /**
     * @return bool
     */
    public function isSuccessful()
    {
        return empty($this->errors);
    }
}
