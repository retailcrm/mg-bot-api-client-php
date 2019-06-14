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
 */
trait ErrorTrait
{
    /**
     * @var array $error
     *
     * @Serializer\Type("array<string>")
     * @Accessor(setter="getError", setter="setError")
     * @Serializer\SerializedName("errors")
     * @SkipWhenEmpty()
     */
    private $error;

    /**
     * @return array
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param array $error
     */
    public function setError(array $error)
    {
        $this->error = $error;
    }

    /**
     * @return bool
     */
    public function isError()
    {
        return !empty($this->error);
    }
}