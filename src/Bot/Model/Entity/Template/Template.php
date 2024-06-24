<?php


/**
 * PHP version 7.1
 *
 * Template entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Template
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Template;

use RetailCrm\Mg\Bot\Model\ModelInterface;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;

/**
 * Template class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Template
 */
class Template implements ModelInterface
{
    /**
     * @var int $id
     *
     * @Type("int")
     * @Accessor(getter="getId",setter="setId")
     */
    private $id;

    /**
     * @var string $code
     *
     * @Type("string")
     * @Accessor(getter="getCode",setter="setCode")
     */
    private $code;

    /**
     * @var int $channelId
     *
     * @Type("int")
     * @Accessor(getter="getChannelId",setter="setChannelId")
     */
    private $channelId;

    /**
     * @var string $name
     *
     * @Type("string")
     * @Accessor(getter="getName",setter="setName")
     */
    private $name;

    /**
     * @var bool $enabled
     *
     * @Type("bool")
     * @Accessor(getter="getEnabled",setter="setEnabled")
     */
    private $enabled;

    /**
     * @var string $type
     *
     * @Type("string")
     * @Accessor(getter="getType",setter="setType")
     */
    private $type;

    /**
     * @var array $template
     *
     * @Type("array")
     * @Accessor(getter="getTemplate",setter="setTemplate")
     */
    private $template;

    /**
     * @var string $body
     *
     * @Type("string")
     * @Accessor(getter="getBody",setter="setBody")
     */
    private $body;

    /**
     * @var string $lang
     *
     * @Type("string")
     * @Accessor(getter="getLang",setter="setLang")
     */
    private $lang;

    /**
     * @var string $category
     *
     * @Type("string")
     * @Accessor(getter="getCategory",setter="setCategory")
     */
    private $category;

    /**
     * @var string $verificationStatus
     *
     * @Type("string")
     * @Accessor(getter="getVerificationStatus",setter="setVerificationStatus")
     */
    private $verificationStatus;

    /**
     * @var string $rejectionReason
     *
     * @Type("string")
     * @Accessor(getter="getRejectionReason",setter="setRejectionReason")
     */
    private $rejectionReason;

    /**
     * @var string $quality
     *
     * @Type("string")
     * @Accessor(getter="getQuality",setter="setQuality")
     * @SkipWhenEmpty()
     */
    private $quality;

    /**
     * @var array $header
     *
     * @Type("array")
     * @Accessor(getter="getHeader",setter="setHeader")
     * @SkipWhenEmpty()
     */
    private $header;

    /**
     * @var array $header
     *
     * @Type("array")
     * @Accessor(getter="getButtons",setter="setButtons")
     * @SkipWhenEmpty()
     */
    private $buttons;

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
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
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
    public function setChannelId(int $channelId): void
    {
        $this->channelId = $channelId;
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
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return bool|null
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled(bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return array|null
     */
    public function getTemplate(): ?array
    {
        return $this->template;
    }

    /**
     * @param mixed $template
     */
    public function setTemplate($template): void
    {
        $this->template = $template;
    }

    /**
     * @return string|null
     */
    public function getBody(): ?string
    {
        return $this->body;
    }

    /**
     * @param string $body
     */
    public function setBody(string $body): void
    {
        $this->body = $body;
    }

    /**
     * @return string|null
     */
    public function getVerificationStatus(): ?string
    {
        return $this->verificationStatus;
    }

    /**
     * @param string $verificationStatus
     */
    public function setVerificationStatus(string $verificationStatus): void
    {
        $this->verificationStatus = $verificationStatus;
    }

    /**
     * @return string|null
     */
    public function getLang(): ?string
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     */
    public function setLang(string $lang): void
    {
        $this->lang = $lang;
    }

    /**
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    /**
     * @return string|null
     */
    public function getRejectionReason(): ?string
    {
        return $this->rejectionReason;
    }

    /**
     * @param string $rejectionReason
     */
    public function setRejectionReason(string $rejectionReason): void
    {
        $this->rejectionReason = $rejectionReason;
    }

    /**
     * @return string|null
     */
    public function getQuality(): ?string
    {
        return $this->quality;
    }

    public function setQuality(string $quality): void
    {
        $this->quality = $quality;
    }

    /**
     * @return array|null
     */
    public function getHeader(): ?array
    {
        return $this->header;
    }

    /**
     * @param array $header
     */
    public function setHeader(array $header): void
    {
        $this->header = $header;
    }

    /**
     * @return array|null
     */
    public function getButtons(): ?array
    {
        return $this->buttons;
    }

    /**
     * @param array $buttons
     */
    public function setButtons(array $buttons): void
    {
        $this->buttons = $buttons;
    }
}
