<?php

/**
 * PHP version 7.0
 *
 * Customer entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity;

use RetailCrm\Mg\Bot\Model\Entity\CommonFields;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;

/**
 * PHP version 7.0
 *
 * Customer class
 * | email       | string    |
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class Customer
{
    use CommonFields;

    /**
     * @var string $externalId
     *
     * @Type("string")
     * @Accessor(getter="getExternalId",setter="setExternalId")
     * @SkipWhenEmpty()
     */
    private $externalId;

    /**
     * @var int $channelId
     *
     * @Type("int")
     * @Accessor(getter="getChannelId",setter="setChannelId")
     * @SkipWhenEmpty()
     */
    private $channelId;

    /**
     * @var string $username
     *
     * @Type("string")
     * @Accessor(getter="getUsername",setter="setUsername")
     * @SkipWhenEmpty()
     */
    private $username;

    /**
     * @var string $firstName
     *
     * @Type("string")
     * @Accessor(getter="getFirstName",setter="setFirstName")
     * @SkipWhenEmpty()
     */
    private $firstName;

    /**
     * @var string $lastName
     *
     * @Type("string")
     * @Accessor(getter="getLastName",setter="setLastName")
     * @SkipWhenEmpty()
     */
    private $lastName;

    /**
     * @var string $avatarUrl
     *
     * @Type("string")
     * @Accessor(getter="getAvatarUrl",setter="setAvatarUrl")
     * @SkipWhenEmpty()
     */
    private $avatarUrl;

    /**
     * @var string $profileUrl
     *
     * @Type("string")
     * @Accessor(getter="getProfileUrl",setter="setProfileUrl")
     * @SkipWhenEmpty()
     */
    private $profileUrl;

    /**
     * @var string $revokedAt
     *
     * @Type("string")
     * @Accessor(getter="getRevokedAt",setter="setRevokedAt")
     * @SkipWhenEmpty()
     */
    private $revokedAt;

    /**
     * @var string $country
     *
     * @Type("string")
     * @Accessor(getter="getCountry",setter="setCountry")
     * @SkipWhenEmpty()
     */
    private $country;

    /**
     * @var string $language
     *
     * @Type("string")
     * @Accessor(getter="getLanguage",setter="setLanguage")
     * @SkipWhenEmpty()
     */
    private $language;

    /**
     * @var string $phone
     *
     * @Type("string")
     * @Accessor(getter="getPhone",setter="setPhone")
     * @SkipWhenEmpty()
     */
    private $phone;

    /**
     * @var string $email
     *
     * @Type("string")
     * @Accessor(getter="getEmail",setter="setEmail")
     * @SkipWhenEmpty()
     */
    private $email;

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

    /**
     * @param string $externalId
     */
    public function setExternalId(string $externalId)
    {
        $this->externalId = $externalId;
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
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getAvatarUrl(): string
    {
        return $this->avatarUrl;
    }

    /**
     * @param string $avatarUrl
     */
    public function setAvatarUrl(string $avatarUrl)
    {
        $this->avatarUrl = $avatarUrl;
    }

    /**
     * @return string
     */
    public function getProfileUrl(): string
    {
        return $this->profileUrl;
    }

    /**
     * @param string $profileUrl
     */
    public function setProfileUrl(string $profileUrl)
    {
        $this->profileUrl = $profileUrl;
    }

    /**
     * @return string
     */
    public function getRevokedAt(): string
    {
        return $this->revokedAt;
    }

    /**
     * @param string $revokedAt
     */
    public function setRevokedAt(string $revokedAt)
    {
        $this->revokedAt = $revokedAt;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage(string $language)
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getPhone(): string
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
     * @return string
     */
    public function getEmail(): string
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
}
