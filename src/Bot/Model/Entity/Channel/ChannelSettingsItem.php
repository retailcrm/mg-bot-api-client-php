<?php

/**
 * PHP version 7.1
 *
 * ChannelSettingsItem entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Channel
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Channel;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * ChannelSettingsItem class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Channel
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class ChannelSettingsItem implements ModelInterface
{
    /**
     * @var string $creating
     *
     * @Type("string")
     * @Accessor(getter="getCreating",setter="setCreating")
     * @SkipWhenEmpty()
     */
    private $creating;

    /**
     * @var string $editing
     *
     * @Type("string")
     * @Accessor(getter="getEditing",setter="setEditing")
     * @SkipWhenEmpty()
     */
    private $editing;

    /**
     * @var string $quoting
     *
     * @Type("string")
     * @Accessor(getter="getQuoting",setter="setQuoting")
     * @SkipWhenEmpty()
     */
    private $quoting;

    /**
     * @var string $deleting
     *
     * @Type("string")
     * @Accessor(getter="getDeleting",setter="setDeleting")
     * @SkipWhenEmpty()
     */
    private $deleting;

    /**
     * @var string $delivered
     *
     * @Type("string")
     * @Accessor(getter="getDelivered",setter="setDelivered")
     * @SkipWhenEmpty()
     */
    private $delivered;

    /**
     * @var int $maxCharsCount
     *
     * @Type("int")
     * @Accessor(getter="getMaxCharsCount",setter="setMaxCharsCount")
     * @SkipWhenEmpty()
     */
    private $maxCharsCount;

    /**
     * @var int $maxItemsCount
     *
     * @Type("int")
     * @Accessor(getter="getMaxItemsCount",setter="setMaxItemsCount")
     * @SkipWhenEmpty()
     */
    private $maxItemsCount;

    /**
     * @var int $noteMaxCharsCount
     *
     * @Type("int")
     * @Accessor(getter="getNoteMaxCharsCount", setter="setNoteMaxCharsCount")
     * @SkipWhenEmpty()
     */
    private $noteMaxCharsCount;

    /**
     * @return string|null
     */
    public function getCreating(): ?string
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
     * @return string|null
     */
    public function getEditing(): ?string
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
     * @return string|null
     */
    public function getQuoting(): ?string
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

    /**
     * @return string|null
     */
    public function getDeleting(): ?string
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
     * @return string|null
     */
    public function getDelivered(): ?string
    {
        return $this->delivered;
    }

    /**
     * @param string $delivered
     */
    public function setDelivered(string $delivered)
    {
        $this->delivered = $delivered;
    }

    /**
     * @return int|null
     */
    public function getMaxCharsCount(): ?int
    {
        return $this->maxCharsCount;
    }

    /**
     * @param int $maxCharsCount
     */
    public function setMaxCharsCount(int $maxCharsCount)
    {
        $this->maxCharsCount = $maxCharsCount;
    }

    /**
     * @return int|null
     */
    public function getMaxItemsCount(): ?int
    {
        return $this->maxItemsCount;
    }

    /**
     * @param int $maxItemsCount
     */
    public function setMaxItemsCount(int $maxItemsCount)
    {
        $this->maxItemsCount = $maxItemsCount;
    }

    /**
     * @return int|null
     */
    public function getNoteMaxCharsCount(): ?int
    {
        return $this->noteMaxCharsCount;
    }

    /**
     * @param int $noteMaxCharsCount
     */
    public function setNoteMaxCharsCount(int $noteMaxCharsCount)
    {
        $this->noteMaxCharsCount = $noteMaxCharsCount;
    }
}
