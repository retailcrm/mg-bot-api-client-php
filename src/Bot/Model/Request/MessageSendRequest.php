<?php

/**
 * PHP version 7.0
 *
 * Messages send request
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
use Symfony\Component\Validator\Constraints as Assert;
use RetailCrm\Mg\Bot\Model\Entity\Order;
use RetailCrm\Mg\Bot\Model\Entity\Product;

/**
 * PHP version 7.0
 *
 * MessageSendRequest class
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class MessageSendRequest
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
     *
     * @Assert\NotBlank
     */
    private $content;

    /**
     * @var Product $product
     *
     * @Type("Product")
     * @Accessor(getter="getProduct",setter="setProduct")
     * @SkipWhenEmpty()
     */
    private $product;

    /**
     * @var Order $order
     *
     * @Type("Order")
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
     * @var string $scope
     *
     * @Type("string")
     * @Accessor(getter="getScope",setter="setScope")
     *
     * @Assert\NotBlank
     */
    private $scope;

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
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param Order $order
     */
    public function setOrder(Order $order)
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
