<?php

/**
 * PHP version 7.1
 *
 * Customers list request
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */

namespace RetailCrm\Mg\Bot\Model\Request;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * CustomersRequest class
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */
class CustomersRequest implements ModelInterface
{
    use CommonFields;
    use PageLimit;

    /**
     * @Type("string")
     * @Accessor(getter="getExternalId",setter="setExternalId")
     * @SkipWhenEmpty
     */
    private $externalId;

    /**
     * @Type("int")
     * @Accessor(getter="getSinceId",setter="setSinceId")
     * @SkipWhenEmpty
     */
    private $sinceId;

    /**
     * @Type("int")
     * @Accessor(getter="getUntilId",setter="setUntilId")
     * @SkipWhenEmpty
     */
    private $untilId;

    /**
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @param string $externalId
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
    }

    /**
     * @return int
     */
    public function getSinceId()
    {
        return $this->sinceId;
    }

    /**
     * @param int $sinceId
     */
    public function setSinceId($sinceId)
    {
        $this->sinceId = $sinceId;
    }

    /**
     * @return int
     */
    public function getUntilId()
    {
        return $this->untilId;
    }

    /**
     * @param int $untilId
     */
    public function setUntilId($untilId)
    {
        $this->untilId = $untilId;
    }
}
