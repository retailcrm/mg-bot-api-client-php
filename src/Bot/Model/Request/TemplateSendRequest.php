<?php

/**
 * PHP version 7.1
 *
 * Template send request
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */

namespace RetailCrm\Mg\Bot\Model\Request;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\Entity\Template\TemplateVariables;
use RetailCrm\Mg\Bot\Model\ModelInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * TemplateSendRequest class
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */
class TemplateSendRequest  implements ModelInterface
{
    /**
     * @var string $phone
     *
     * @Type("string")
     * @Accessor(getter="getPhone",setter="setPhone")
     *
     * @Assert\NotBlank
     */
    private $phone;

    /**
     * @var TemplateVariables $args
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Template\TemplateVariables")
     * @Accessor(getter="getArgs",setter="setArgs")
     * @SkipWhenEmpty()
     */
    private $args;

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return TemplateVariables|null
     */
    public function getArgs(): ?TemplateVariables
    {
        return $this->args;
    }

    /**
     * @param TemplateVariables $args
     */
    public function setArgs(TemplateVariables $args): void
    {
        $this->args = $args;
    }
}
