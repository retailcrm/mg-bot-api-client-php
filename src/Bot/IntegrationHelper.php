<?php

/**
 * PHP version 7.0
 *
 * Request Helper
 *
 * @package  RetailCrm\Mg\Bot
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot;

/**
 * PHP version 7.0
 *
 * RequestHelper class
 *
 * @package  RetailCrm\Mg\Bot
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class IntegrationHelper
{
    /**
     * Prepare module data
     *
     * @param array  $config
     * @param string $clientId
     *
     * @return array
     */
    public static function moduleRequest(array $config, string $clientId)
    {
        $config['host'] = str_replace("https://", '', $config['host']);

        $moduleConfiguration = [
            'code' => $config['code'],
            'integrationCode' => $config['code'],
            'active' => true,
            'name' => $config['name'],
            'clientId' => $clientId,
            'logo' => sprintf("https://%s%s", $config['host'], $config['logo']),
            'baseUrl' => sprintf("https://%s", $config['host']),
            'accountURL' => sprintf("https://%s/settings/%s", $config['host'], $clientId),
            'actions' => ['activity' => '/actions/activity'],
            'integrations' => ['mgBot' => []]
        ];

        return $moduleConfiguration;
    }
}
