<?php

/**
 * PHP version 7.0
 *
 * AssignResponse
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Response;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\Entity\Responsible;

/**
 * PHP version 7.0
 *
 * AssignResponse class
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class AssignResponse
{
    use CommonFields;

    /**
     * @var bool $isReassign
     *
     * @Type("bool")
     * @Accessor(getter="getIsReassign",setter="setIsReassign")
     * @SkipWhenEmpty()
     */
    private $isReassign;

    /**
     * @var int $leftManagerId
     *
     * @Type("int")
     * @Accessor(getter="getLeftManagerId",setter="setLeftManagerId")
     * @SkipWhenEmpty()
     */
    private $leftManagerId;

    /**
     * @var Responsible $previousResponsible
     *
     * @Type("Responsible")
     * @Accessor(getter="getPreviousResponsible",setter="setPreviousResponsible")
     * @SkipWhenEmpty()
     */
    private $previousResponsible;

    /**
     * @var Responsible $responsible
     *
     * @Type("Responsible")
     * @Accessor(getter="getResponsible",setter="setResponsible")
     * @SkipWhenEmpty()
     */
    private $responsible;

    /**
     * @return bool
     */
    public function isReassign(): bool
    {
        return $this->isReassign;
    }

    /**
     * @param bool $isReassign
     */
    public function setIsReassign(bool $isReassign)
    {
        $this->isReassign = $isReassign;
    }

    /**
     * @return int
     */
    public function getLeftManagerId(): int
    {
        return $this->leftManagerId;
    }

    /**
     * @param int $leftManagerId
     */
    public function setLeftManagerId(int $leftManagerId)
    {
        $this->leftManagerId = $leftManagerId;
    }

    /**
     * @return Responsible
     */
    public function getPreviousResponsible(): Responsible
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

    /**
     * @return Responsible
     */
    public function getResponsible(): Responsible
    {
        return $this->responsible;
    }

    /**
     * @param Responsible $responsible
     */
    public function setResponsible(Responsible $responsible)
    {
        $this->responsible = $responsible;
    }
}
