<?php

/**
 * PHP version 7.0
 *
 * Register Helper
 *
 * @package  RetailCrm\Common
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Common;

use LazyJsonMapper\LazyJsonMapper;

/**
 * PHP version 7.0
 *
 * Register helper class. Fields:
 *
 * | Field name         | Data type |
 * |--------------------|-----------|
 * | code               | string    |
 * | integrationCode    | string    |
 * | active             | string    |
 * | name               | string    |
 * | logo               | string    |
 * | clientId           | string    |
 * | baseUrl            | string    |
 * | accountUrl         | string    |
 * | actions            | array     |
 * | availableCountries | array     |
 * | integrations       | array     |
 *
 * @package  RetailCrm\Common
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string   getCode()                              "Get `code` value"
 * @method $this    setCode(string $value)                 "Set `code` value"
 * @method string   getIntegrationCode()                   "Get `integrationCode` value"
 * @method $this    setIntegrationCode(string $value)      "Set `integrationCode` value"
 * @method string   getActive()                            "Get `active` value"
 * @method $this    setActive(string $value)               "Set `active` value"
 * @method string   getName()                              "Get `name` value"
 * @method $this    setName(string $value)                 "Set `name` value"
 * @method string   getLogo()                              "Get `logo` value"
 * @method $this    setLogo(string $value)                 "Set `logo` value"
 * @method string   getClientId()                          "Get `clientId` value"
 * @method $this    setClientId(string $value)             "Set `clientId` value"
 * @method string   getBaseUrl()                           "Get `baseUrl` value"
 * @method $this    setBaseUrl(string $value)              "Set `baseUrl` value"
 * @method string   getAccountUrl()                        "Get `accountUrl` value"
 * @method $this    setAccountUrl(string $value)           "Set `accountUrl` value"
 * @method array    getActions()                           "Get `actions` value"
 * @method $this    setActions(array $value)               "Set `actions` value"
 * @method array    getAvailableCountries()                "Get `availableCountries` value"
 * @method $this    setAvailableCountries(array $value)    "Set `availableCountries` value"
 * @method array    getIntegrations()                      "Get `integrations` value"
 * @method $this    setIntegrations(array $value)          "Set `integrations` value"
 */
class Register extends LazyJsonMapper
{
    /**
     * @internal
     */
    const JSON_PROPERTY_MAP = [
        'code' => 'string',
        'integrationCode' => 'string',
        'active' => 'string',
        'name' => 'string',
        'logo' => 'string',
        'clientId' => 'string',
        'baseUrl' => 'string',
        'accountUrl' => 'string',
        'actions' => 'mixed',
        'availableCountries' => 'string[]',
        'integrations' => 'mixed'
    ];
}
