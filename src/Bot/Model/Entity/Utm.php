<?php

/**
 * PHP version 7.1
 *
 * Utm entity
 *
 * @package Retailcrm\Mg\Bot\Model\Entity
 */

namespace RetailCrm\Mg\Bot\Model\Entity;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * Utm class
 *
 * @package RetailCrm\Mg\Bot\Model\Entity
 */
class Utm implements ModelInterface
{
    /**
     * @var string $campaign
     *
     * @Type("string")
     * @Accessor(getter="getCampaign",setter="setCampaign")
     * @SkipWhenEmpty()
     */
    private $campaign;

    /**
     * @var string $content
     *
     * @Type("string")
     * @Accessor(getter="getContent",setter="setContent")
     * @SkipWhenEmpty()
     */
    private $content;

    /**
     * @var string $medium
     *
     * @Type("string")
     * @Accessor(getter="getMedium",setter="setMedium")
     * @SkipWhenEmpty()
     */
    private $medium;

    /**
     * @var string $source
     *
     * @Type("string")
     * @Accessor(getter="getSource",setter="setSource")
     * @SkipWhenEmpty()
     */
    private $source;

    /**
     * @var string $term
     *
     * @Type("string")
     * @Accessor(getter="getTerm",setter="setTerm")
     * @SkipWhenEmpty()
     */
    private $term;

    /**
     * @return string|null
     */
    public function getCampaign(): ?string
    {
        return $this->campaign;
    }

    /**
     * @param string $campaign
     * @return void
     */
    public function setCampaign(string $campaign): void
    {
        $this->campaign = $campaign;
    }

    /**
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return void
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string|null
     */
    public function getMedium(): ?string
    {
        return $this->medium;
    }

    /**
     * @param string $medium
     * @return void
     */
    public function setMedium(string $medium): void
    {
        $this->medium = $medium;
    }

    /**
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string $source
     * @return void
     */
    public function setSource(string $source): void
    {
        $this->source = $source;
    }

    /**
     * @return string|null
     */
    public function getTerm(): ?string
    {
        return $this->term;
    }

    /**
     * @param string $term
     * @return void
     */
    public function setTerm(string $term): void
    {
        $this->term = $term;
    }
}
