<?php

/**
 * PHP version 7.1
 *
 * Serializer
 *
 * @package RetailCrm\Common
 */

namespace RetailCrm\Common;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerBuilder;
use RetailCrm\Mg\Bot\Model\ModelInterface;
use RetailCrm\Mg\Bot\Model\Response\ErrorOnlyResponse;

/**
 * Class Serializer
 *
 * @package RetailCrm\Common
 */
class Serializer
{
    const S_ARRAY = 'array';
    const S_JSON = 'json';

    /**
     * Serialize given object to JSON or Array
     *
     * @param object $request
     * @param string $serialize
     *
     * @return array|string
     */
    public static function serialize($request, $serialize = self::S_JSON)
    {
        $serialized = null;
        $serializer = SerializerBuilder::create()->build();
        $context = self::getContext(false);

        if ($context instanceof SerializationContext) {
            switch ($serialize) {
                case self::S_ARRAY:
                    $serialized = $serializer->toArray($request, $context);
                    break;
                case self::S_JSON:
                default:
                    $serialized = $serializer->serialize($request, $serialize, $context);
                    break;
            }
        }

        return $serialized;
    }

    /**
     * Deserialize given array or JSON to object
     *
     * @param mixed  $data
     * @param string $entityType
     * @param string $from
     *
     * @return \RetailCrm\Mg\Bot\Model\ModelInterface
     */
    public static function deserialize($data, $entityType, $from = self::S_JSON)
    {
        $deserialized = null;
        $serializer = SerializerBuilder::create()->build();
        $context = self::getContext(true);

        if ($context instanceof DeserializationContext) {
            switch ($from) {
                case self::S_ARRAY:
                    $filtered = array_filter($data, static function ($el) {
                        return $el !== null;
                    });
                    $deserialized = $serializer
                        ->fromArray($filtered, self::normalizeNamespace($entityType), $context);
                    break;
                case self::S_JSON:
                    $deserialized = $serializer
                        ->deserialize($data, self::normalizeNamespace($entityType), $from, $context);
                    break;
            }
        }

        return $deserialized instanceof ModelInterface ? $deserialized : new ErrorOnlyResponse();
    }

    /**
     * @param bool $deserialization (default: false)
     *
     * @return DeserializationContext|SerializationContext
     */
    private static function getContext(bool $deserialization)
    {
        if ($deserialization) {
            $context = new DeserializationContext();
        } else {
            $context = new SerializationContext();

            $context->setSerializeNull(false);
        }

        return $context;
    }

    /**
     * @param string $namespace
     *
     * @return string
     */
    private static function normalizeNamespace(string $namespace)
    {
        if (substr($namespace, 0, 1) == '\\') {
            $namespace = substr($namespace, 1);
        }

        return $namespace;
    }
}
