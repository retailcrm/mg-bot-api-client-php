<?php

/**
 * PHP version 7.0
 *
 * FullFileResponse
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Response;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\Response\ErrorTrait;

/**
 * PHP version 7.0
 *
 * FullFileResponse class
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class FullFileResponse
{
    use ErrorTrait;

    /**
     * @var string $id
     *
     * @Type("string")
     * @Accessor(setter="setId", getter="getId")
     * @SkipWhenEmpty()
     */
    private $id;

    /**
     * @var int $size
     *
     * @Type("int")
     * @Accessor(setter="setSize", getter="getSize")
     * @SkipWhenEmpty()
     */
    private $size;

    /**
     * @var string $type
     *
     * @Type("string")
     * @Accessor(setter="setType", getter="getType")
     * @SkipWhenEmpty()
     */
    private $type;

    /**
     * @var string $url
     *
     * @Type("string")
     * @Accessor(setter="setUrl", getter="getUrl")
     * @SkipWhenEmpty()
     */
    private $url;

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

    /**
     * @return string
     */
    public function getUrl(): string
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
}