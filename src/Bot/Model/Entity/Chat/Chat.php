<?php

/**
 * PHP version 7.0
 *
 * Chat entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Chat
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Chat;

use JMS\Serializer\Annotation as Serializer;
use RetailCrm\Mg\Bot\Model\Entity\Channel\Channel;
use RetailCrm\Mg\Bot\Model\Entity\CommonFields;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\Entity\Customer;

/**
 * PHP version 7.0
 *
 * Chat class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Chat
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class Chat
{
    use CommonFields;

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
     * @Type("ChatLastMessage")
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
     * @return string
     */
    public function getAvatar(): string
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
     * @return string
     */
    public function getName(): string
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
     * @return Channel
     */
    public function getChannel(): Channel
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
     * @return array
     */
    public function getMembers(): array
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
     * @return Customer
     */
    public function getCustomer(): Customer
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
     * @return int
     */
    public function getAuthorId(): int
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
     * @return ChatLastMessage
     */
    public function getLastMessage(): ChatLastMessage
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
    public function getLastActivity(): \DateTime
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
}
