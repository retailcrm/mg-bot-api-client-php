<?php

/**
 * PHP version 7.1
 *
 * ChannelSettingsSuggestions entity
 *
 * @package RetailCrm\Mg\Bot\Model\Entity\Channel
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Channel;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use Retailcrm\Mg\Bot\Model\ModelInterface;

/**
 * ChannelSettingsSuggestions class
 *
 * @package RetailCrm\Mg\Bot\Model\Entity\Channel
 */
class ChannelSettingsSuggestions implements ModelInterface
{
    /**
     * @var string $email
     *
     * @Type("string")
     * @Accessor(getter="getEmail", setter="setEmail")
     * @SkipWhenEmpty()
     */
    private $email;

    /**
     * @var string $phone
     *
     * @Type("string")
     * @Accessor(getter="getPhone", setter="setPhone")
     * @SkipWhenEmpty()
     */
    private $phone;

    /**
     * @var string $text
     *
     *
     * @Type("string")
     * @Accessor(getter="getText", setter="setText")
     * @SkipWhenEmpty()
     */
    private $text;

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text)
    {
        $this->text = $text;
    }
}
