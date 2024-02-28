<?php

/**
 * PHP version 7.1
 *
 * Dialog add or delete tag request
 *
 * @package RetailCrm\Mg\Bot\Model\Request
 */

namespace RetailCrm\Mg\Bot\Model\Request;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\Entity\Tag;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * DialogTagRequest class
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */
class DialogTagRequest implements ModelInterface
{
    /**
     * @var int $dialogId
     *
     * @Type("int")
     * @Accessor(getter="getDialogId", setter="setDialogId")
     * @SkipWhenEmpty()
     */
    private $dialogId;

    /**
     * @var Tag[] $tags
     *
     * @Type("array")
     * @Accessor(getter="getTags", setter="setTags")
     * @SkipWhenEmpty()
     */
    private $tags;

    /**
     * @return int
     */
    public function getDialogId(): int
    {
        return $this->dialogId;
    }

    /**
     * @param int $dialogId
     * @return void
     */
    public function setDialogId(int $dialogId): void
    {
        $this->dialogId = $dialogId;
    }

    /**
     * @return Tag[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param Tag[] $tags
     * @return void
     */
    public function setTags(array $tags): void
    {
        $this->tags = $tags;
    }

}