<?php

/**
 * PHP version 7.0
 *
 * UploadFileResponse
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Response;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\Response\ErrorTrait;
use RetailCrm\Mg\Bot\Model\Entity\FileMeta;

/**
 * PHP version 7.0
 *
 * UploadFileResponse class
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class UploadFileResponse
{
    use ErrorTrait;

    /**
     * @var string $createdAt
     *
     * @Type("string")
     * @Accessor(setter="setCreatedAt", getter="getCreatedAt")
     */
    private $createdAt;

    /**
     * @var string $hash
     *
     * @Type("string")
     * @Accessor(setter="setHash", getter="getHash")
     */
    private $hash;

    /**
     * @var string $id
     *
     * @Type("string")
     * @Accessor(setter="setId", getter="getId")
     */
    private $id;

    /**
     * @var FileMeta
     *
     * @Accessor(setter="setMeta", getter="getMeta")
     */
    private $meta;

    /**
     * @var string $mimeType
     *
     * @Type("string")
     * @Accessor(setter="setMimeType", getter="getMimeType")
     */
    private $mimeType;

    /**
     * @var int $size
     *
     * @Type("string")
     * @Accessor(setter="setSize", getter="getSize")
     */
    private $size;

    /**
     * @var string $sourceUrl
     *
     * @Type("string")
     * @Accessor(setter="setSourceUrl", getter="getSourceUrl")
     */
    private $sourceUrl;

    /**
     * @var string $type
     *
     * @Type("string")
     * @Accessor(setter="setType", getter="getType")
     */
    private $type;

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt(string $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getHash(): string
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     */
    public function setHash(string $hash)
    {
        $this->hash = $hash;
    }

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
     * @return FileMeta
     */
    public function getMeta(): FileMeta
    {
        return $this->meta;
    }

    /**
     * @param FileMeta $meta
     */
    public function setMeta(FileMeta $meta)
    {
        $this->meta = $meta;
    }

    /**
     * @return string
     */
    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    /**
     * @param string $mimeType
     */
    public function setMimeType(string $mimeType)
    {
        $this->mimeType = $mimeType;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size)
    {
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getSourceUrl(): string
    {
        return $this->sourceUrl;
    }

    /**
     * @param string $sourceUrl
     */
    public function setSourceUrl(string $sourceUrl)
    {
        $this->sourceUrl = $sourceUrl;
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
}