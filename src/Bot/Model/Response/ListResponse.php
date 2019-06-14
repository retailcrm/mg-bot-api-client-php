<?php

/**
 * PHP version 7.0
 *
 * ListResponse
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Response;

/**
 * PHP version 7.0
 *
 * ListResponse class
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class ListResponse implements \Iterator {
    /**
     * @var array
     */
    private $items = [];

    /**
     * @var array
     */
    private $errors = [];

    /**
     * @var int
     */
    private $position = 0;

    /**
     * ListResponse constructor.
     *
     * @param $responseType
     * @param $data
     */
    public function __construct($responseType, $data)
    {
        if (isset($data['errors'])) {
            $this->errors = $data['errors'];
        } else {
            foreach($data as $item) {
                $this->items[] = new $responseType($item);
            }
        }
    }

    /**
     * @return bool
     */
    public function isSuccessful()
    {
        return empty($this->errors);
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param $name
     *
     * @return mixed
     */
    public function get($name)
    {
        return $this->items[$name];
    }

    /**
     * @param $name
     *
     * @return mixed
     */
    public function __get($name)
    {
        return $this->items[$name];
    }

    /**
     * Implements rewind() for Iterable
     */
    public function rewind() {
        $this->position = 0;
    }

    /**
     * Implements current() for Iterable
     *
     * @return mixed
     */
    public function current() {
        return $this->items[$this->position];
    }

    /**
     * Implements key() for Iterable
     *
     * @return int|mixed
     */
    public function key() {
        return $this->position;
    }

    /**
     * Implements next() for Iterable
     */
    public function next() {
        ++$this->position;
    }

    /**
     * Implements valid() for Iterable
     *
     * @return bool
     */
    public function valid() {
        return isset($this->items[$this->position]);
    }
}