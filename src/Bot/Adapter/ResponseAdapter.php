<?php

/**
 * PHP version 7.1
 *
 * Response adapter
 *
 * @package RetailCrm\Mg\Bot\Adapter
 * @author  retailCRM <integration@retailcrm.ru>
 * @license https://opensource.org/licenses/MIT MIT License
 * @link    http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Adapter;

use Psr\Http\Message\ResponseInterface;
use RetailCrm\Mg\Bot\Model\Response;

/**
 * Class ResponseAdapter
 *
 * @package RetailCrm\Mg\Bot
 * @author  retailCRM <integration@retailcrm.ru>
 * @license https://opensource.org/licenses/MIT MIT License
 * @link    http://help.retailcrm.pro/docs/Developers
 */
class ResponseAdapter
{
    /**
     * @var \RetailCrm\Mg\Bot\Model\Response $model
     */
    private $model;
    /**
     * @var \Psr\Http\Message\ResponseInterface $interface
     */
    private $interface;

    /**
     * ResponseAdapter constructor.
     *
     * @param \Psr\Http\Message\ResponseInterface $interface
     */
    public function __construct(ResponseInterface $interface)
    {
        $this->interface = $interface;
        $this->model = new Response();
    }

    /**
     * Build response
     *
     * @return \RetailCrm\Mg\Bot\Model\Response
     */
    public function build(): Response
    {
        $this->model->setStatus($this->interface->getStatusCode());
        $this->model->setBody((string) $this->interface->getBody());

        return $this->model;
    }
}
