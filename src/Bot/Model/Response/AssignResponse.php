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
use RetailCrm\Mg\Bot\Model\Response\ErrorTrait;

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
    use ErrorTrait;

    /**
     * @var bool
     *
     * @Type("bool")
     * @Accessor(setter="setIsReassign", getter="getIsReassign")
     */
    private $isReassign;

    /**
     * @var int
     *
     * @Type("int")
     * @Accessor(setter="setLeftManagerId", getter="getLeftManagerId")
     * @SkipWhenEmpty()
     */
    private $leftManagerId;

    /**
     * @var Responsible $previousResponsible
     *
     * @Accessor(setter="setPreviousResponsible", getter="getPreviousResponsible")
     * @SkipWhenEmpty()
     */
    private $previousResponsible;

    /**
     * @var Responsible $responsible
     *
     * @Accessor(setter="setResponsible", getter="getResponsible")
     */
    private $responsible;

    /**
     * @return bool
     */
    public function getIsReassign()
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