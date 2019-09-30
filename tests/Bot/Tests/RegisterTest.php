<?php
/**
 * PHP version 7.1
 *
 * RegisterTest.php
 *
 * @author  retailCRM <integration@retailcrm.ru>
 * @license https://opensource.org/licenses/MIT MIT License
 * @link    http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Tests;

use RetailCrm\Common\Register;
use RetailCrm\Mg\Bot\Test\TestCase;

/**
 * PHP version 7.0
 *
 * Class RegisterTest
 *
 * @package  RetailCrm\Mg\Bot\Tests
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class RegisterTest extends TestCase
{
    /** @var Register $register */
    private static $register;

    /**
     * testGetArrayConfiguration
     * @group("register")
     */
    public function testGetArrayConfiguration()
    {
        static::assertRegister(static::getRegister()->getArrayConfiguration());
    }

    /**
     * testGetJsonConfiguration
     * @group("register")
     */
    public function testGetJsonConfiguration()
    {
        static::assertRegister(json_decode(static::getRegister()->getJsonConfiguration(), true));
    }

    /**
     * assertRegister asserts passed array properties with current register object
     *
     * @param array $serialized
     */
    private static function assertRegister(array $serialized): void
    {
        static::assertNotEmpty($serialized, 'ERROR: Serialized array is empty');

        if (!empty($serialized)) {
            static::assertEquals(static::getRegister()->getName(), $serialized['name']);
            static::assertEquals(static::getRegister()->getCode(), $serialized['code']);
            static::assertEquals(static::getRegister()->getBaseUrl(), $serialized['baseUrl']);
            static::assertEquals(static::getRegister()->getLogo(), $serialized['logo']);
            static::assertEquals(static::getRegister()->getAccountUrl(), $serialized['accountUrl']);
            static::assertEquals(static::getRegister()->getActions(), $serialized['actions']);
            static::assertEquals(static::getRegister()->getActive(), $serialized['active']);
            static::assertEquals(static::getRegister()->getAvailableCountries(), $serialized['availableCountries']);
            static::assertEquals(static::getRegister()->getClientId(), $serialized['clientId']);
            static::assertEquals(static::getRegister()->getIntegrationCode(), $serialized['integrationCode']);
            static::assertEquals(static::getRegister()->getIntegrations(), $serialized['integrations']);
        }
    }

    private static function getRegister(): Register
    {
        if (empty(static::$register)) {
            static::$register = new Register();
            static::$register->setName('name');
            static::$register->setCode('code');
            static::$register->setBaseUrl('https://example.com');
            static::$register->setLogo('https://example.com/logo.png');
            static::$register->setAccountUrl('https://example.com/account');
            static::$register->setActions(['/activity']);
            static::$register->setActive(true);
            static::$register->setAvailableCountries(['RU']);
            static::$register->setClientId('long random hash of /dev/urandom');
            static::$register->setIntegrationCode('integrationCode');
            static::$register->setIntegrations(['mgBot' => []]);
        }

        return static::$register;
    }
}
