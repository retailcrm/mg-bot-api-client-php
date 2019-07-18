<?php
/**
 * PHP version 7.1
 *
 * Class RegisterTest
 *
 * @package  RetailCrm\Common\Tests
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Common\Tests;

use RetailCrm\Common\Register;
use PHPUnit\Framework\TestCase;

/**
 * Class RegisterTest
 *
 * @package  RetailCrm\Mg\Bot\Tests
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class RegisterTest extends TestCase
{

    /**
     * testGetArrayConfiguration
     */
    public function testGetArrayConfiguration()
    {
        $register = new Register();
        $register->setAccountUrl('https://example.com/settings');
        $register->setActions(['ativity' => '/activity']);
        $register->setActive(true);
        $register->setBaseUrl('http:s//example.com');
        $register->setClientId(hash('ripemd160', time()));
        $register->setCode('somecode');
        $register->setIntegrationCode('somecode');
        $register->setLogo('https://example.com/logo.svg');
        $register->setName('somename');

        $array = $register->getArrayConfiguration();

        self::assertArrayHasKey('baseUrl', $array);
        self::assertArrayHasKey('integrationCode', $array);
        self::assertArrayHasKey('clientId', $array);
    }
}
