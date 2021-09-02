<?php

/**
 * PHP version 7.1
 *
 * UnassignResponse
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 */

namespace RetailCrm\Mg\Bot\Model\Response;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\Entity\Responsible;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * UnassignResponse class
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 */
class UnassignResponse implements ModelInterface
{
    use CommonFields;

    /**
     * @var Responsible $previousResponsible
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Responsible")
     * @Accessor(getter="getPreviousResponsible",setter="setPreviousResponsible")
     * @SkipWhenEmpty()
     */
    private $previousResponsible;

    /**
     * @return Responsible|null
     */
    public function getPreviousResponsible(): ?Responsible
    {
        return $this->previousResponsible;
    }

    /**
     * @param Responsible $previousResponsible
     */
    public function setPreviousResponsible(Responsible $previousResponsible)
    {
        $this->previousResponsible = $previousResponsible;
    }
}
