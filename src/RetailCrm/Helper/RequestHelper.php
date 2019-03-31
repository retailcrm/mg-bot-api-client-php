<?php

/**
 * PHP version 7.0
 *
 * RequestHelper
 *
 * @category RetailCrm
 * @package  Helper
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Helper;

/**
 * PHP version 7.0
 *
 * RequestHelper class
 *
 * @category RetailCrm
 * @package  Helper
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class RequestHelper
{
    /**
     * Prepare module data
     *
     * @param array  $config
     * @param string $clientId
     *
     * @return array
     */
    public static function moduleRequest(array $config, string $clientId): array
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
