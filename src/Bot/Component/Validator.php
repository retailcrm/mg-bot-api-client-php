<?php

/**
 * PHP version 7.0
 *
 * Validator
 *
 * @package  RetailCrm\Mg\Bot\Component
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Component;

use Symfony\Component\Validator\Validation;

/**
 * PHP version 7.0
 *
 * Validator class
 *
 * @package  RetailCrm\Mg\Bot\Component
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class Validator
{
    /**
     * Validate given class
     *
     * @param $class
     *
     * @return string
     */
    public static function validate($class)
    {
        $errorsString = '';

        $validator = Validation::createValidatorBuilder()
            ->addMethodMapping('loadValidatorMetadata')
            ->getValidator();

        $errors = $validator->validate($class);

        if (count($errors) > 0) {
            $errorsString = (string) $errors;
        }

        return $errorsString;
    }
}
