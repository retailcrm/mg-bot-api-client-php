<?php

/**
 * PHP version 7.1
 *
 * Message entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Message;

use RetailCrm\Mg\Bot\Model\Entity\Dialog;
use RetailCrm\Mg\Bot\Model\Entity\User;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * Message class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class Message implements ModelInterface
{
    /**
     * @var string $id
     *
     * @Type("string")
     * @Accessor(getter="getId",setter="setId")
     */
    private $id;

    /**
     * @var \DateTime $createdAt
     *
     * @Type("DateTime<'Y-m-d\TH:i:s\.u\Z'>")
     * @Accessor(getter="getCreatedAt",setter="setCreatedAt")
     */
    private $createdAt;

    /**
     * @var \DateTime $updatedAt
     *
     * @Type("DateTime<'Y-m-d\TH:i:s\.u\Z'>")
     * @Accessor(getter="getUpdatedAt",setter="setUpdatedAt")
     * @SkipWhenEmpty()
     */
    private $updatedAt;

    /**
     * @var string $actions
     *
     * @Type("string")
     * @Accessor(getter="getActions",setter="setActions")
     * @SkipWhenEmpty()
     */
    private $actions;

    /**
     * @var array $items
     *
     * @Type("array")
     * @Accessor(getter="getItems",setter="setItems")
     * @SkipWhenEmpty()
     */
    private $items;

    /**
     * @var User $from
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\User")
     * @Accessor(getter="getFrom",setter="setFrom")
     * @SkipWhenEmpty()
     */
    private $from;

    /**
     * @var \DateTime $time
     *
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @Accessor(getter="getTime",setter="setTime")
     * @SkipWhenEmpty()
     */
    private $time;

    /**
     * @var string $type
     *
     * @Type("string")
     * @Accessor(getter="getType",setter="setType")
     * @SkipWhenEmpty()
     */
    private $type;

    /**
     * @var string $scope
     *
     * @Type("string")
     * @Accessor(getter="getScope",setter="setScope")
     * @SkipWhenEmpty()
     */
    private $scope;

    /**
     * @var int $chatId
     *
     * @Type("int")
     * @Accessor(getter="getChatId",setter="setChatId")
     * @SkipWhenEmpty()
     */
    private $chatId;

    /**
     * @var string $content
     *
     * @Type("string")
     * @Accessor(getter="getContent",setter="setContent")
     * @SkipWhenEmpty()
     */
    private $content;

    /**
     * @var bool $isRead
     *
     * @Type("bool")
     * @Accessor(getter="getIsRead",setter="setIsRead")
     * @SkipWhenEmpty()
     */
    private $isRead;

    /**
     * @var bool $isEdit
     *
     * @Type("bool")
     * @Accessor(getter="getIsEdit",setter="setIsEdit")
     * @SkipWhenEmpty()
     */
    private $isEdit;

    /**
     * @var string $status
     *
     * @Type("string")
     * @Accessor(getter="getStatus",setter="setStatus")
     * @SkipWhenEmpty()
     */
    private $status;

    /**
     * @var string $action
     *
     * @Type("string")
     * @Accessor(getter="getAction",setter="setAction")
     * @SkipWhenEmpty()
     */
    private $action;

    /**
     * @var Dialog $dialog
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Dialog")
     * @Accessor(getter="getDialog",setter="setDialog")
     * @SkipWhenEmpty()
     */
    private $dialog;

    /**
     * @var int $channelId
     *
     * @Type("int")
     * @Accessor(getter="getChannelId",setter="setChannelId")
     * @SkipWhenEmpty()
     */
    private $channelId;

    /**
     * @var \DateTime $channelSentAt
     *
     * @Type("DateTime<'Y-m-d\TH:i:s\.u\Z'>")
     * @Accessor(getter="getChannelSentAt",setter="setChannelSentAt")
     * @SkipWhenEmpty()
     */
    private $channelSentAt;

    /**
     * @var MessageOrder $order
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Message\MessageOrder")
     * @Accessor(getter="getOrder",setter="setOrder")
     * @SkipWhenEmpty()
     */
    private $order;

    /**
     * @var MessageProduct $product
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Message\MessageProduct")
     * @Accessor(getter="getProduct",setter="setProduct")
     * @SkipWhenEmpty()
     */
    private $product;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getActions(): string
    {
        return $this->actions;
    }

    /**
     * @param string $actions
     */
    public function setActions(string $actions)
    {
        $this->actions = $actions;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems(array $items)
    {
        $this->items = $items;
    }

    /**
     * @return User
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * @param User $from
     */
    public function setFrom(User $from)
    {
        $this->from = $from;
    }

    /**
     * @return \DateTime
     */
    public function getTime(): \DateTime
    {
        return $this->time;
    }

    /**
     * @param \DateTime $time
     */
    public function setTime(\DateTime $time)
    {
        $this->time = $time;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getScope(): string
    {
        return $this->scope;
    }

    /**
     * @param string $scope
     */
    public function setScope(string $scope)
    {
        $this->scope = $scope;
    }

    /**
     * @return int
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * @param int $chatId
     */
    public function setChatId(int $chatId)
    {
        $this->chatId = $chatId;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content)
    {
        $this->content = $content;
    }

    /**
     * @return bool
     */
    public function isRead(): bool
    {
        return $this->isRead;
    }

    /**
     * @param bool $isRead
     */
    public function setIsRead(bool $isRead)
    {
        $this->isRead = $isRead;
    }

    /**
     * @return bool
     */
    public function isEdit(): bool
    {
        return $this->isEdit;
    }

    /**
     * @param bool $isEdit
     */
    public function setIsEdit(bool $isEdit)
    {
        $this->isEdit = $isEdit;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @param string $action
     */
    public function setAction(string $action)
    {
        $this->action = $action;
    }

    /**
     * @return Dialog
     */
    public function getDialog(): Dialog
    {
        return $this->dialog;
    }

    /**
     * @param Dialog $dialog
     */
    public function setDialog(Dialog $dialog)
    {
        $this->dialog = $dialog;
    }

    /**
     * @return int
     */
    public function getChannelId(): int
    {
        return $this->channelId;
    }

    /**
     * @param int $channelId
     */
    public function setChannelId(int $channelId)
    {
        $this->channelId = $channelId;
    }

    /**
     * @return \DateTime
     */
    public function getChannelSentAt(): \DateTime
    {
        return $this->channelSentAt;
    }

    /**
     * @param \DateTime $channelSentAt
     */
    public function setChannelSentAt(\DateTime $channelSentAt)
    {
        $this->channelSentAt = $channelSentAt;
    }

    /**
     * @return MessageOrder
     */
    public function getOrder(): MessageOrder
    {
        return $this->order;
    }

    /**
     * @param MessageOrder $order
     */
    public function setOrder(MessageOrder $order)
    {
        $this->order = $order;
    }

    /**
     * @return MessageProduct
     */
    public function getProduct(): MessageProduct
    {
        return $this->product;
    }

    /**
     * @param MessageProduct $product
     */
    public function setProduct(MessageProduct $product)
    {
        $this->product = $product;
    }
}
