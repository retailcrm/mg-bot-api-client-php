<?php

/**
 * PHP version 7.0
 *
 * Common fields
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Request;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;

/**
 * PHP version 7.0
 *
 * CommonFields trait
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
trait CommonFields
{
    /**
     * @Type("int")
     * @Accessor(getter="getId",setter="setId")
     * @SkipWhenEmpty
     */
    private $id;

    /**
     * @Type("string")
     * @Accessor(getter="getSince",setter="setSince")
     * @SkipWhenEmpty
     */
    private $since;

    /**
     * @Type("string")
     * @Accessor(getter="getUntil",setter="setUntil")
     * @SkipWhenEmpty
     */
    private $until;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getSince()
    {
        return $this->since;
    }

    /**
     * @param string $since
     */
    public function setSince($since)
    {
        $this->since = $since;
    }

    /**
     * @return string
     */
    public function getUntil()
    {
        return $this->until;
    }

    /**
     * @param string $until
     */
    public function setUntil($until)
    {
        $this->until = $until;
    }
}
