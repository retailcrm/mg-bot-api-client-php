<?php

/**
 * PHP version 7.1
 *
 * MessageProduct entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Message;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * MessageProduct class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class MessageProduct implements ModelInterface
{
    /**
     * @var int $id
     *
     * @Type("int")
     * @Accessor(getter="getId",setter="setId")
     * @SkipWhenEmpty()
     */
    private $id;

    /**
     * @var string $name
     *
     * @Type("string")
     * @Accessor(getter="getName",setter="setName")
     * @SkipWhenEmpty()
     */
    private $name;

    /**
     * @var string $article
     *
     * @Type("string")
     * @Accessor(getter="getArticle",setter="setArticle")
     * @SkipWhenEmpty()
     */
    private $article;

    /**
     * @var string $url
     *
     * @Type("string")
     * @Accessor(getter="getUrl",setter="setUrl")
     * @SkipWhenEmpty()
     */
    private $url;

    /**
     * @var string $img
     *
     * @Type("string")
     * @Accessor(getter="getImg",setter="setImg")
     * @SkipWhenEmpty()
     */
    private $img;

    /**
     * @var MessageCost $cost
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Message\MessageCost")
     * @Accessor(getter="getCost",setter="setCost")
     * @SkipWhenEmpty()
     */
    private $cost;

    /**
     * @var MessageQuantity $quantity
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Message\MessageQuantity")
     * @Accessor(getter="getQuantity",setter="setQuantity")
     * @SkipWhenEmpty()
     */
    private $quantity;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
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
     * @return string
     */
    public function getArticle(): ?string
    {
        return $this->article;
    }

    /**
     * @param string $article
     */
    public function setArticle(string $article)
    {
        $this->article = $article;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getImg(): ?string
    {
        return $this->img;
    }

    /**
     * @param string $img
     */
    public function setImg(string $img)
    {
        $this->img = $img;
    }

    /**
     * @return MessageCost
     */
    public function getCost(): ?MessageCost
    {
        return $this->cost;
    }

    /**
     * @param MessageCost $cost
     */
    public function setCost(MessageCost $cost)
    {
        $this->cost = $cost;
    }

    /**
     * @return MessageQuantity
     */
    public function getQuantity(): ?MessageQuantity
    {
        return $this->quantity;
    }

    /**
     * @param MessageQuantity $quantity
     */
    public function setQuantity(MessageQuantity $quantity)
    {
        $this->quantity = $quantity;
    }
}
