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
use RetailCrm\Mg\Bot\Model\Response\CommonFields;
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
 *
 * @method string getCreatedAt()
 * @method $this setCreatedAt(string $value)
 * @method string getHash()
 * @method $this setHash(string $value)
 * @method string getId()
 * @method $this setId(string $value)
 * @method FileMeta getMeta()
 * @method $this setMeta(FileMeta $value)
 * @method string getMimeType()
 * @method $this setMimeType(string $value)
 * @method int getSize()
 * @method $this setSize(int $value)
 * @method string getSourceUrl()
 * @method $this setSourceUrl(string $value)
 * @method string getType()
 * @method $this setType(string $value)
 */
class UploadFileResponse extends CommonFields
{
    const JSON_PROPERTY_MAP = [
        'created_at' => 'string',
        'hash' => 'string',
        'id' => 'string',
        'meta' => 'FileMeta',
        'mime_type' => 'string',
        'size' => 'int',
        'source_url' => 'string',
        'type' => 'string'
    ];
}