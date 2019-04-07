<?php

/**
 * PHP version 5.4
 *
 * Test case class
 *
 * @package  Test
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Mg\Bot\Test;

use PHPUnit\Framework\TestCase as BaseCase;
use RetailCrm\Mg\Bot\Client;

/**
 * Class TestCase
 *
 * @category RetailCrm
 * @package  Test
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
class TestCase extends BaseCase
{
    /**
     * Return bot api client object
     *
     * @param string $url     (default: null)
     * @param string $key     (default: null)
     * @param bool   $debug   (default: false)
     *
     * @return \RetailCrm\Mg\Bot\Client
     */
    public static function getApiClient(
        $url = null,
        $key = null,
        $debug = false
    ) {
        $configUrl = getenv('MG_BOT_URL');
        $configKey = getenv('MG_BOT_KEY');
        $configDbg = getenv('MG_BOT_DBG');

        return new Client(
            $url ?: $configUrl,
            $key ?: $configKey,
            $debug ?: $configDbg
        );
    }
}
