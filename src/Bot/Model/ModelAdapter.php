<?php

/**
 * PHP version 7.1
 *
 * ModelAdapter
 *
 * @package RetailCrm\Mg\Bot\Adapter
 */

namespace RetailCrm\Mg\Bot\Model;

use Psr\Http\Message\ResponseInterface;
use RetailCrm\Common\Exception\InvalidJsonException;
use RetailCrm\Common\Serializer;

/**
 * Class ModelAdapter
 *
 * @package RetailCrm\Mg\Bot\Adapter
 */
class ModelAdapter
{
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
        $this->classname = $classname;
    }

    /**
     * Get Response Model
     *
     * @param \Psr\Http\Message\ResponseInterface $response
     *
     * @return \RetailCrm\Mg\Bot\Model\ModelInterface
     */
    public function getResponseModel(ResponseInterface $response)
    {
        return Serializer::deserialize((string)$response->getBody(), $this->classname);
    }

    /**
     * Get Response List
     *
     * @param \Psr\Http\Message\ResponseInterface $response
     *
     * @return array
     */
    public function getResponseList(ResponseInterface $response)
    {
        $array = json_decode((string)$response->getBody(), true);

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
