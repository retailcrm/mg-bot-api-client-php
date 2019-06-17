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

use RetailCrm\Mg\Bot\Model\Entity\FileMeta;

/**
 * PHP version 7.0
 *
 * UploadFileResponse class. Parameters:
 *
 * | Parameter name | Data type |
 * |----------------|-----------|
 * | created_at     | string    |
 * | hash           | string    |
 * | id             | string    |
 * | meta           | FileMeta  |
 * | mime_type      | string    |
 * | size           | int       |
 * | source_url     | string    |
 * | type           | string    |
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string   getCreatedAt()              "Get `created_at` value"
 * @method $this    setCreatedAt(string $value) "Set `created_at` value"
 * @method string   getHash()                   "Get `hash` value"
 * @method $this    setHash(string $value)      "Set `hash` value"
 * @method string   getId()                     "Get `id` value"
 * @method $this    setId(string $value)        "Set `id` value"
 * @method FileMeta getMeta()                   "Get `meta` value"
 * @method $this    setMeta(FileMeta $value)    "Set `meta` value"
 * @method string   getMimeType()               "Get `mime_type` value"
 * @method $this    setMimeType(string $value)  "Set `mime_type` value"
 * @method int      getSize()                   "Get `size` value"
 * @method $this    setSize(int $value)         "Set `size` value"
 * @method string   getSourceUrl()              "Get `source_url` value"
 * @method $this    setSourceUrl(string $value) "Set `source_url` value"
 * @method string   getType()                   "Get `type` value"
 * @method $this    setType(string $value)      "Set `type` value"
 */
class UploadFileResponse extends CommonFields
{
    /**
     * JSON fields. Use setters and getters to work with this values.
     * Setters will return model instance, so you can construct any model like this:
     * ```
     * $request = (new InfoRequest())
     *              ->setName("...")
     *              ->setRoles([...]);
     *```
     * Model constructor can accept array as initial data. You can use
     * this to initialize models:
     * ```
     * $request = new InfoRequest(["name" => "...", "roles" => [...]]);
     * ```
     */
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