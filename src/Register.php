<?php

/**
 * PHP version 7.1
 *
 * Register
 *
 * @package  RetailCrm\Common
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Common;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Register
 *
 * @package  RetailCrm\Common
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class Register
{
    /**
     * @var string $code
     *
     * @Type("string")
     * @Accessor(getter="getCode",setter="setCode")
     *
     * @Assert\NotBlank
     */
    private $code;

    /**
     * @var string $integrationCode
     *
     * @Type("string")
     * @Accessor(getter="getIntegrationCode",setter="setIntegrationCode")
     * @SerializedName("integrationCode")
     *
     * @Assert\NotBlank
     */
    private $integrationCode;

    /**
     * @var string $active
     * @Type("string")
     * @Accessor(getter="getActive",setter="setActive")
     * @SkipWhenEmpty
     */
    private $active;

    /**
     * @var string $name
     *
     * @Type("string")
     * @Accessor(getter="getName",setter="setName")
     * @SkipWhenEmpty
     */
    private $name;

    /**
     * @var string $logo
     *
     * @Type("string")
     * @Accessor(getter="getLogo",setter="setLogo")
     * @SkipWhenEmpty
     *
     * @Assert\Url(
     *    message = "The logo url is not a valid url",
     *    protocols = {"http", "https"}
     * )
     */
    private $logo;

    /**
     * @var string $clientId
     *
     * @Type("string")
     * @Accessor(getter="getClientId",setter="setClientId")
     * @SerializedName("clientId")
     *
     * @Assert\NotBlank
     */
    private $clientId;

    /**
     * @var string $baseUrl
     *
     * @Type("string")
     * @Accessor(getter="getBaseUrl",setter="setBaseUrl")
     * @SerializedName("baseUrl")
     *
     * @Assert\NotBlank
     * @Assert\Url(
     *    message = "The baseUrl is not a valid url",
     *    protocols = {"http", "https"}
     * )
     */
    private $baseUrl;

    /**
     * @var string $accountUrl
     *
     * @Type("string")
     * @Accessor(getter="getAccountUrl",setter="setAccountUrl")
     *
     * @Assert\NotBlank
     * @Assert\Url(
     *    message = "The baseUrl is not a valid url",
     *    protocols = {"http", "https"}
     * )
     */
    private $accountUrl;

    /**
     * @var array $actions
     *
     * @Type("array")
     * @Accessor(getter="getActions",setter="setActions")
     *
     * @Assert\NotBlank
     */
    private $actions;

    /**
     * @var array $availableCountries
     *
     * @Type("array")
     * @Accessor(getter="getAvailableCountries",setter="setAvailableCountries")
     * @SerializedName("availableCountries")
     * @SkipWhenEmpty
     */
    private $availableCountries;

    /**
     * @var array $integrations
     *
     * @Type("array")
     * @Accessor(getter="getIntegrations",setter="setIntegrations")
     *
     * @Assert\NotBlank
     */
    private $integrations;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getIntegrationCode()
    {
        return $this->integrationCode;
    }

    /**
     * @param string $integrationCode
     */
    public function setIntegrationCode(string $integrationCode)
    {
        $this->integrationCode = $integrationCode;
    }

    /**
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param string $active
     */
    public function setActive(string $active)
    {
        $this->active = $active;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     */
    public function setLogo(string $logo)
    {
        $this->logo = $logo;
    }

    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param string $clientId
     */
    public function setClientId(string $clientId)
    {
        $this->clientId = $clientId;
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * @param string $baseUrl
     */
    public function setBaseUrl(string $baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    /**
     * @return string
     */
    public function getAccountUrl()
    {
        return $this->accountUrl;
    }

    /**
     * @param string $accountUrl
     */
    public function setAccountUrl(string $accountUrl)
    {
        $this->accountUrl = $accountUrl;
    }

    /**
     * @return array
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @param array $actions
     */
    public function setActions(array $actions)
    {
        $this->actions = $actions;
    }

    /**
     * @return array
     */
    public function getAvailableCountries()
    {
        return $this->availableCountries;
    }

    /**
     * @param array $availableCountries
     */
    public function setAvailableCountries(array $availableCountries)
    {
        $this->availableCountries = $availableCountries;
    }

    /**
     * @return array
     */
    public function getIntegrations()
    {
        return $this->integrations;
    }

    /**
     * @param array $integrations
     */
    public function setIntegrations(array $integrations)
    {
        $this->integrations = $integrations;
    }

    /**
     * Get configuration as JSON
     *
     * @return array|string
     * @todo make exact type
     */
    public function getJsonConfiguration()
    {
        return Serializer::serialize($this);
    }

    /**
     * Get configuration as array
     *
     * @return array|string
     * @todo make exact type
     */
    public function getArrayConfiguration()
    {
        return Serializer::serialize($this, Serializer::S_ARRAY);
    }
}
