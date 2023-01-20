<?php

/**
 * PHP version 7.1
 *
 * Customer entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 */

namespace RetailCrm\Mg\Bot\Model\Entity;

use RetailCrm\Mg\Bot\Model\ModelInterface;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;

/**
 * Customer class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity
 */
class Customer implements ModelInterface
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
     * @SkipWhenEmpty()
     */
    private $updatedAt;

    /**
     * @var string $externalId
     *
     * @Type("string")
     * @Accessor(getter="getExternalId",setter="setExternalId")
     * @SkipWhenEmpty()
     * @Assert\Length(max="64")
     * @Assert\NotNull()
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
     * @Assert\Length(max="255")
     */
    private $username;

    /**
     * @var string $firstName
     *
     * @Type("string")
     * @Accessor(getter="getFirstName",setter="setFirstName")
     * @SkipWhenEmpty()
     * @Assert\Length(max="255")
     */
    private $firstName;

    /**
     * @var string $lastName
     *
     * @Type("string")
     * @Accessor(getter="getLastName",setter="setLastName")
     * @SkipWhenEmpty()
     * @Assert\Length(max="255")
     */
    private $lastName;

    /**
     * @var string $avatarUrl
     *
     * @Type("string")
     * @Accessor(getter="getAvatarUrl",setter="setAvatarUrl")
     * @SkipWhenEmpty()
     * @Assert\Length(max="255")
     */
    private $avatarUrl;

    /**
     * @var string $profileUrl
     *
     * @Type("string")
     * @Accessor(getter="getProfileUrl",setter="setProfileUrl")
     * @SkipWhenEmpty()
     * @Assert\Length(max="255")
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
     * @Assert\Length(max="2")
     */
    private $country;

    /**
     * @var string $language
     *
     * @Type("string")
     * @Accessor(getter="getLanguage",setter="setLanguage")
     * @SkipWhenEmpty()
     * @Assert\Length(max="20")
     */
    private $language;

    /**
     * @var string $phone
     *
     * @Type("string")
     * @Accessor(getter="getPhone",setter="setPhone")
     * @SkipWhenEmpty()
     * @Assert\Length(max="16")
     */
    private $phone;

    /**
     * @var string $email
     *
     * @Type("string")
     * @Accessor(getter="getEmail",setter="setEmail")
     * @SkipWhenEmpty()
     * @Assert\Length(max="16")
     */
    private $email;

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
    public function getExternalId(): ?string
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
     * @return int|null
     */
    public function getChannelId(): ?int
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
     * @return string|null
     */
    public function getUsername(): ?string
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
     * @return string|null
     */
    public function getFirstName(): ?string
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
     * @return string|null
     */
    public function getLastName(): ?string
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
     * @return string|null
     */
    public function getAvatarUrl(): ?string
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
     * @return string|null
     */
    public function getProfileUrl(): ?string
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
     * @return string|null
     */
    public function getRevokedAt(): ?string
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
     * @return string|null
     */
    public function getCountry(): ?string
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
     * @return string|null
     */
    public function getLanguage(): ?string
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
}
