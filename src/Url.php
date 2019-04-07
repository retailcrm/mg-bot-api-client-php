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
    const RFC_DEFAULT = 1;
    const RFC_CUSTOM  = 2;

    private $parts = [];

    public function __toString()
    {
        return $this->build();
    }

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
     * Build request url
     *
     * @param string $path
     * @param array  $parameters
     * @param int    $rfc
     *
     * @return string
     */
    public function buildUrl($path, $parameters, $rfc = self::RFC_DEFAULT)
    {
        $url = $path;

        switch ($rfc) {
            case self::RFC_CUSTOM:
                foreach ($parameters as $key => $value) {
                    if (is_array($value)) {
                        foreach ($value as $element) {
                            $this->add($key, $element);
                        }
                    } else {
                        $this->add($key, $value);
                    }
                }

                $url = sprintf("%s?%s", $url, $this->build());
                break;
            case self::RFC_DEFAULT:
            default:
                $queryString = http_build_query($parameters, '', '&');
                $url = sprintf("%s?%s", $path, $queryString);
                break;
        }

        return $url;
    }

    /**
     * Add each key valued element of parameters array
     * to internal structure before build
     *
     * @param string $key
     * @param mixed  $value
     *
     * @return void
     */
    private function add($key, $value)
    {
        $this->parts[] = array(
            'key'   => $key,
            'value' => $value
        );
    }

    /**
     * Build query string with same keys if needed
     *
     * @param string $separator
     * @param string $equals
     *
     * @return string
     */
    private function build($separator = '&', $equals = '=')
    {
        $queryString = array();

        foreach ($this->parts as $part) {
            $queryString[] = urlencode($part['key']) . $equals . urlencode($part['value']);
        }

        return implode($separator, $queryString);
    }
}
