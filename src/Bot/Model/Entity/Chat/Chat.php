<?php

/**
 * PHP version 7.1
 *
 * Chat entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Chat
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Chat;

use RetailCrm\Mg\Bot\Model\Entity\Channel\Channel;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\Entity\Customer;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * Chat class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Chat
 */
class Chat implements ModelInterface
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
     * @Type("DateTime<'Y-m-d\TH:i:s\.u\Z', null, ['Y-m-d\TH:i:s\.u\Z', 'Y-m-d\TH:i:s\Z']>")
     * @Accessor(getter="getCreatedAt",setter="setCreatedAt")
     */
    private $createdAt;

    /**
     * @var \DateTime $updatedAt
     *
     * @Type("DateTime<'Y-m-d\TH:i:s\.u\Z', null, ['Y-m-d\TH:i:s\.u\Z', 'Y-m-d\TH:i:s\Z']>")
     * @Accessor(getter="getUpdatedAt",setter="setUpdatedAt")
     */
    private $updatedAt;

    /**
     * @var string $avatar
     *
     * @Type("string")
     * @Accessor(getter="getAvatar",setter="setAvatar")
     */
    private $avatar;

    /**
     * @var string $name
     *
     * @Type("string")
     * @Accessor(getter="getName",setter="setName")
     */
    private $name;

    /**
     * @var Channel $channel
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Channel\Channel")
     * @Accessor(getter="getChannel",setter="setChannel")
     * @SkipWhenEmpty()
     */
    private $channel;

    /**
     * @var array $members
     *
     * @Type("array")
     * @Accessor(getter="getMembers",setter="setMembers")
     */
    private $members;

    /**
     * @var Customer $customer
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Customer")
     * @Accessor(getter="getCustomer",setter="setCustomer")
     */
    private $customer;

    /**
     * @var int $authorId
     *
     * @Type("int")
     * @Accessor(getter="getAuthorId",setter="setAuthorId")
     */
    private $authorId;

    /**
     * @var ChatLastMessage $lastMessage
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Chat\ChatLastMessage")
     * @Accessor(getter="getLastMessage",setter="setLastMessage")
     */
    private $lastMessage;

    /**
     * @var \DateTime $lastActivity
     *
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @Accessor(getter="getLastActivity",setter="setLastActivity")
     */
    private $lastActivity;

    /**
     * @var \DateTime $replyDeadline
     *
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @Accessor(getter="getReplyDeadline",setter="setReplyDeadline")
     */
    private $replyDeadline;

    /**
     * @return string|null
     */
    public function getId(): ?string
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
    public function getCreatedAt(): ?\DateTime
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
    public function getUpdatedAt(): ?\DateTime
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
     * @return string|null
     */
    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    /**
     * @param string $avatar
     */
    public function setAvatar(string $avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return Channel|null
     */
    public function getChannel(): ?Channel
    {
        return $this->channel;
    }

    /**
     * @param Channel $channel
     */
    public function setChannel(Channel $channel)
    {
        $this->channel = $channel;
    }

    /**
     * @return array|null
     */
    public function getMembers(): ?array
    {
        return $this->members;
    }

    /**
     * @param array $members
     */
    public function setMembers(array $members)
    {
        $this->members = $members;
    }

    /**
     * @return Customer|null
     */
    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return int|null
     */
    public function getAuthorId(): ?int
    {
        return $this->authorId;
    }

    /**
     * @param int $authorId
     */
    public function setAuthorId(int $authorId)
    {
        $this->authorId = $authorId;
    }

    /**
     * @return ChatLastMessage|null
     */
    public function getLastMessage(): ?ChatLastMessage
    {
        return $this->lastMessage;
    }

    /**
     * @param ChatLastMessage $lastMessage
     */
    public function setLastMessage(ChatLastMessage $lastMessage)
    {
        $this->lastMessage = $lastMessage;
    }

    /**
     * @return \DateTime
     */
    public function getLastActivity(): ?\DateTime
    {
        return $this->lastActivity;
    }

    /**
     * @param \DateTime $lastActivity
     */
    public function setLastActivity(\DateTime $lastActivity)
    {
        $this->lastActivity = $lastActivity;
    }

    /**
     * @return \DateTime
     */
    public function getReplyDeadline(): ?\DateTime
    {
        return $this->replyDeadline;
    }

    /**
     * @param \DateTime $replyDeadline
     */
    public function setReplyDeadline(\DateTime $replyDeadline): void
    {
        $this->replyDeadline = $replyDeadline;
    }
}
