<?php

/**
 * PHP version 7.0
 *
 * ChannelProductSettings entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Channel;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\Type;

/**
 * PHP version 7.0
 *
 * ChannelProductSettings class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class ChannelProductSettings
{
    /**
     * @var string
     *
     * @Type("string")
     * @Accessor(setter="setCreating", getter="getCreating")
     */
    private $creating;

    /**
     * @var string
     *
     * @Type("string")
     * @Accessor(setter="setEditing", getter="getEditing")
     */
    private $editing;

    /**
     * @var string
     *
     * @Type("string")
     * @Accessor(setter="setDeleting", getter="getDeleting")
     */
    private $deleting;

    /**
     * @var string
     *
     * @Type("string")
     * @Accessor(setter="setQuoting", getter="getQuoting")
     */
    private $quoting;

    /**
     * @return string
     */
    public function getCreating(): string
    {
        return $this->creating;
    }

    /**
     * @param string $creating
     */
    public function setCreating(string $creating)
    {
        $this->creating = $creating;
    }

    /**
     * @return string
     */
    public function getEditing(): string
    {
        return $this->editing;
    }

    /**
     * @param string $editing
     */
    public function setEditing(string $editing)
    {
        $this->editing = $editing;
    }

    /**
     * @return string
     */
    public function getDeleting(): string
    {
        return $this->deleting;
    }

    /**
     * @param string $deleting
     */
    public function setDeleting(string $deleting)
    {
        $this->deleting = $deleting;
    }

    /**
     * @return string
     */
    public function getQuoting(): string
    {
        return $this->quoting;
    }

    /**
     * @param string $quoting
     */
    public function setQuoting(string $quoting)
    {
        $this->quoting = $quoting;
    }
}