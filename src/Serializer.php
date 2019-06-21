<?php

/**
 * PHP version 7.0
 *
 * Serializer
 *
 * @package  RetailCrm\Common
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Common;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerBuilder;

/**
 * PHP version 7.0
 *
 * Serializer class
 *
 * @package  RetailCrm\Common
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class Serializer
{
    const S_ARRAY = 'array';
    const S_JSON = 'json';

    /**
     * Serialize given object to JSON or Array
     *
     * @param object $request
     * @param int    $serialize
     *
     * @return array|string
     */
    public static function serialize($request, $serialize = self::S_JSON)
    {
        $serialized = null;
        $serializer = SerializerBuilder::create()->build();
        $context = self::getContext();

        switch ($serialize) {
            case self::S_ARRAY:
                $serialized = $serializer->toArray($request, $context);
                break;
            case self::S_JSON:
            default:
                $serialized = $serializer->serialize($request, $serialize, $context);
                break;
        }

        return $serialized;
    }

    /**
     * Deserialize given array or JSON to object
     *
     * @param mixed $data
     * @param string self::normalizeNamespace($entityType)
     * @param string $from
     *
     * @return array|object|null
     */
    public static function deserialize($data, $entityType, $from = self::S_JSON)
    {
        $deserialized = null;
        $serializer = SerializerBuilder::create()->build();
        $context = self::getContext(true);

        switch ($from) {
            case self::S_ARRAY:
                $deserialized =
                    $serializer->fromArray(array_filter($data), self::normalizeNamespace($entityType), $context);
                break;
            case self::S_JSON:
                $deserialized =
                    $serializer->deserialize($data, self::normalizeNamespace($entityType), $from, $context);
                break;
        }

        return $deserialized;
    }

    /**
     * @param bool $deserialization (default: false)
     *
     * @return DeserializationContext|SerializationContext
     */
    private static function getContext(bool $deserialization = false)
    {
        if ($deserialization) {
            $context = new DeserializationContext();
        } else {
            $context = new SerializationContext();
        }

        $context->setSerializeNull(false);

        return $context;
    }

    /**
     * @param string $namespace
     *
     * @return bool|string
     */
    private static function normalizeNamespace(string $namespace)
    {
        if (substr($namespace, 0, 1) == '\\') {
            $namespace = substr($namespace, 1);
        }

        return $namespace;
    }
}
