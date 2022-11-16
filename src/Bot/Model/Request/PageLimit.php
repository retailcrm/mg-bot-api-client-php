<?php

/**
 * PHP version 7.1
 *
 * Page limit
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */

namespace RetailCrm\Mg\Bot\Model\Request;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;

/**
 * PageLimit trait
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */
trait PageLimit
{
    /**
     * @var int
     *
     * @Type("int")
     * @Accessor(getter="getLimit",setter="setLimit")
     * @SkipWhenEmpty
     */
    private $limit;

    /**
     * @return int|null
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }
}
