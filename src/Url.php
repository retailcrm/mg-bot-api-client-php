<?php

/**
 * PHP version 7.1
 *
 * Url
 *
 * @package  RetailCrm\Common
 */

namespace RetailCrm\Common;

/**
 * Class Url
 *
 * @package  RetailCrm\Common
 */
class Url
{
    /**
     * Check trailing slash into url
     *
     * @param string $url
     *
     * @return string
     */
    public static function normalizeUrl($url)
    {
        if ('/' !== $url[strlen($url) - 1]) {
            $url .= '/';
        }

        return $url;
    }

    /**
     * Convert request data to GET parameters
     *
     * @param array $params
     *
     * @return string
     */
    public static function buildGetParameters(array $params)
    {
        $result = '';

        foreach ($params as $param => $value) {
            if (!is_array($value)) {
                $result .= '&' . $param . '=' . $value;
            } else {
                foreach ($value as $subvalue) {
                    $result .= '&' . $param . '=' . $subvalue;
                }
            }
        }

        return strlen($result) > 0 ? '?' . substr($result, 1) : '';
    }
}
