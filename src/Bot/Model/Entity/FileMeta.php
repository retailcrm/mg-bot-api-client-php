<?php

/**
 * PHP version 7.1
 *
 * FileMeta entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 */

namespace RetailCrm\Mg\Bot\Model\Entity;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * FileMeta class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 */
class FileMeta implements ModelInterface
{
    /**
     * @var int $height
     *
     * @Type("int")
     * @Accessor(getter="getHeight",setter="setHeight")
     * @SkipWhenEmpty()
     */
    private $height;

    /**
     * @var int $width
     *
     * @Type("int")
     * @Accessor(getter="getWidth",setter="setWidth")
     * @SkipWhenEmpty()
     */
    private $width;

    /**
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height)
    {
        $this->height = $height;
    }

    /**
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width)
    {
        $this->width = $width;
    }
}
