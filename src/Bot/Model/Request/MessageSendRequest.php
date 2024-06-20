<?php

/**
 * PHP version 7.1
 *
 * Messages send request
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */

namespace RetailCrm\Mg\Bot\Model\Request;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\Entity\Message\MessageOrder;
use RetailCrm\Mg\Bot\Model\Entity\Message\MessageProduct;
use RetailCrm\Mg\Bot\Model\Entity\Message\TransportAttachments;
use RetailCrm\Mg\Bot\Model\ModelInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * MessageSendRequest class
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 */
class MessageSendRequest implements ModelInterface
{
    /**
     * @var string $type
     *
     * @Type("string")
     * @Accessor(getter="getType",setter="setType")
     * @SkipWhenEmpty()
     */
    private $type;

    /**
     * @var string $content
     *
     * @Type("string")
     * @Accessor(getter="getContent",setter="setContent")
     * @SkipWhenEmpty()
     */
    private $content;

    /**
     * @var MessageProduct $product
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Message\MessageProduct")
     * @Accessor(getter="getProduct",setter="setProduct")
     * @SkipWhenEmpty()
     */
    private $product;

    /**
     * @var MessageOrder $order
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Message\MessageOrder")
     * @Accessor(getter="getOrder",setter="setOrder")
     * @SkipWhenEmpty()
     */
    private $order;

    /**
     * @var array $items
     *
     * @Type("array")
     * @Accessor(getter="getItems",setter="setItems")
     * @SkipWhenEmpty()
     */
    private $items;

    /**
     * @var string $note
     *
     * @Type("string")
     * @Accessor(getter="getNote",setter="setNote")
     * @SkipWhenEmpty()
     */
    private $note;

    /**
     * @var string $scope
     *
     * @Type("string")
     * @Accessor(getter="getScope",setter="setScope")
     *
     * @Assert\NotBlank
     */
    private $scope;


    /**
     * @var TransportAttachments $transportAttachments
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Message\TransportAttachments")
     * @Accessor(getter="getTransportAttachments",setter="setTransportAttachments")
     * @SkipWhenEmpty
     */
    private $transportAttachments;

    /**
     * @var int $chatId
     *
     * @Type("int")
     * @Accessor(getter="getChatId",setter="setChatId")
     *
     * @Assert\NotBlank
     */
    private $chatId;


    /**
     * @var int $quoteMessageId
     *
     * @Type("int")
     * @Accessor(getter="getQuoteMessageId",setter="setQuoteMessageId")
     * @SkipWhenEmpty
     */
    private $quoteMessageId;


    /**
     * @return int
     */
    public function getChatId()
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
    public function getScope()
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
     * @return TransportAttachments
     */
    public function getTransportAttachments()
    {
        return $this->transportAttachments;
    }

    /**
     * @param TransportAttachments $transportAttachments
     */
    public function setTransportAttachments(TransportAttachments $transportAttachments)
    {
        $this->transportAttachments = $transportAttachments;
    }

    /**
     * @return string
     */
    public function getType()
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
    public function getContent()
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
     * @return MessageProduct
     */
    public function getProduct()
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

    /**
     * @return MessageOrder
     */
    public function getOrder()
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
     * @return array
     */
    public function getItems()
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
     * @return null|string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @param string $note
     */
    public function setNote(string $note): void
    {
        $this->note = $note;
    }

    /**
     * @return int
     */
    public function getQuoteMessageId()
    {
        return $this->quoteMessageId;
    }

    /**
     * @param int $quoteMessageId
     */
    public function setQuoteMessageId(int $quoteMessageId)
    {
        $this->quoteMessageId = $quoteMessageId;
    }
}
