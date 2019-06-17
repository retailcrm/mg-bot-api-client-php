<?php

/**
 * PHP version 7.0
 *
 * Url handler
 *
 * @package  RetailCrm\Common
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Common;

/**
 * PHP version 7.0
 *
 * Url class
 *
 * @package  RetailCrm\Common
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class Url
{
    /**
     * This class is used to store normalizeUrl method
     * which is used in Client and HttpClient to check
     * trailing slash.
     */
    private function __construct() {}

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
}
