<?php

/**
 * PHP version 7.1
 *
 * Tag entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 */

namespace RetailCrm\Mg\Bot\Model\Entity;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Tag class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 */
class Tag implements ModelInterface
{
    /**
     * @var string $name
     *
     * @Type("string")
     * @Accessor(getter="getName",setter="setName")
     *
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @var string $colorCode
     *
     * @Type("string")
     * @Accessor(getter="getColorCode",setter="setColorCode")
     * @SkipWhenEmpty()
     */
    private $colorCode;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getColorCode(): ?string
    {
        return $this->colorCode;
    }

    /**
     * @param string $colorCode
     * @return void
     */
    public function setColorCode(string $colorCode): void
    {
        $this->colorCode = $colorCode;
    }
}