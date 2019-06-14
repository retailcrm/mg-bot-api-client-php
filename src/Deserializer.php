<?php

/**
 * PHP version 7.0
 *
 * Deserializer
 *
 * @package  RetailCrm\Common
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Common;

use JMS\Serializer\SerializerBuilder;

/**
 * PHP version 7.0
 *
 * Deserializer class
 *
 * @package  RetailCrm\Common
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class Deserializer
{
    const DS_JSON = "json";
    const DS_XML = "xml";
    const DS_ARRAY = "array";

    /**
     * Serialize given object to JSON or Array
     *
     * @param array|string $data
     * @param string       $deserialize
     *
     * @return object
     */
    public static function deserialize($data, $type, $deserialize = self::S_JSON)
    {
        $deserialized = null;
        $serializer = SerializerBuilder::create()->build();

        switch ($deserialize) {
            case self::DS_ARRAY:
                $deserialized = $serializer->fromArray($data, $type);
                break;
            case self::DS_JSON:
            case self::DS_XML:
                $deserialized = $serializer->deserialize($data, $type, $deserialize);
                break;
        }

        return $deserialized;
    }
}
