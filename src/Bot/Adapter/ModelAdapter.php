<?php

/**
 * PHP version 7.1
 *
 * ModelAdapter
 *
 * @package RetailCrm\Mg\Bot\Adapter
 * @author  retailCRM <integration@retailcrm.ru>
 * @license https://opensource.org/licenses/MIT MIT License
 * @link    http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Adapter;

use RetailCrm\Common\Exception\InvalidJsonException;
use RetailCrm\Common\Serializer;
use RetailCrm\Mg\Bot\Model\Response;

/**
 * Class ModelAdapter
 *
 * @package RetailCrm\Mg\Bot\Adapter
 * @author  retailCRM <integration@retailcrm.ru>
 * @license https://opensource.org/licenses/MIT MIT License
 * @link    http://help.retailcrm.pro/docs/Developers
 */
class ModelAdapter
{
    /**
     * @var mixed $model
     */
    private $model;

    /**
     * @var string $classname
     */
    private $classname;

    /**
     * ModelAdapter constructor.
     *
     * @param string $classname
     *
     */
    public function __construct(string $classname)
    {
        $this->model = new $classname;
        $this->classname = $classname;
    }

    /**
     * Get Response Model
     *
     * @param \RetailCrm\Mg\Bot\Model\Response $response
     *
     * @return \RetailCrm\Mg\Bot\Model\ModelInterface
     */
    public function getResponseModel(Response $response)
    {
        return Serializer::deserialize($response->getBody(), $this->model);
    }

    /**
     * Get Response List
     *
     * @param \RetailCrm\Mg\Bot\Model\Response $response
     *
     * @return array
     */
    public function getResponseList(Response $response)
    {
        $array = json_decode($response->getBody(), true);

        if (json_last_error() != JSON_ERROR_NONE) {
            throw new InvalidJsonException('Received invalid JSON', 1);
        }

        $result = [];

        foreach ($array as $item) {
            $result[] = Serializer::deserialize($item, $this->classname, Serializer::S_ARRAY);
        }

        return $result;
    }
}
