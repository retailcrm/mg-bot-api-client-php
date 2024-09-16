<?php

/**
 * PHP version 7.1
 *
 * Common fields
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */

namespace RetailCrm\Mg\Bot\Model\Request;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;

/**
 * CommonFields trait
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */
trait IncludeMassCommunication
{
    /**
     * @var int $includeMassCommunication
     *
     * @Type("int")
     * @Accessor(getter="getIncludeMassCommunication",setter="setIncludeMassCommunication")
     * @SkipWhenEmpty
     */
    private $includeMassCommunication;

    /**
     * @return int
     */
    public function getIncludeMassCommunication()
    {
        return $this->includeMassCommunication;
    }

    /**
     * @param int $includeMassCommunication
     */
    public function setIncludeMassCommunication(?int $includeMassCommunication): void
    {
        $this->includeMassCommunication = $includeMassCommunication;
    }
}
