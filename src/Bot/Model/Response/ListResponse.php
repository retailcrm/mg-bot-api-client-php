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
 * ListResponse class.
 *
 * This class implements `ArrayAccess` and `Iterator` interfaces.
 * It means you can access items using array syntax, or use this class in `foreach` loop.
 *
 * Example:
 * ```
 * $request = new \RetailCrm\Mg\Bot\Model\Request\BotsRequest();
 * $request->setActive(1);
 * $request->setRoles([Constants::BOT_ROLE_RESPONSIBLE]);
 *
 * $data = $client->bots($request);
 * $firstBot = $data[0];
 *
 * foreach($data as $bot) { ... }
 * ```
 *
 * Fields:
 *
 * | Field name     | Data type     |
 * |----------------|---------------|
 * | result         | array[object] |
 * | errors         | array[string] |
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class ListResponse implements \Iterator, \ArrayAccess, \Countable {
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
     * \Countable implementation
     *
     * @return int
     */
    public function count(): int
    {
        return count($this->items ?: []);
    }

    /**
     * Set offset
     *
     * @param mixed $offset offset value
     * @param mixed $value  value
     *
     * @return void
     * @internal
     */
    public function offsetSet($offset, $value)
    {
        throw new \BadMethodCallException(
            "This call not allowed: offsetSet [$offset] [$value]"
        );
    }

    /**
     * Unset offset
     *
     * @param mixed $offset offset value
     *
     * @return void
     * @internal
     */
    public function offsetUnset($offset)
    {
        throw new \BadMethodCallException(
            "This call not allowed: offsetSet [$offset]"
        );
    }
    /**
     * Check offset
     *
     * @param mixed $offset offset value
     *
     * @return bool
     * @internal
     */
    public function offsetExists($offset)
    {
        return isset($this->items[$offset]);
    }
    /**
     * Get offset
     *
     * @param mixed $offset offset value
     *
     * @return mixed
     * @internal
     */
    public function offsetGet($offset)
    {
        if (!isset($this->items[$offset])) {
            throw new \InvalidArgumentException("Item \"$offset\" not found");
        }

        return $this->items[$offset];
    }

    /**
     * @param $name
     *
     * @return mixed
     * @internal
     */
    public function __get($name)
    {
        return $this->items[$name];
    }

    /**
     * Implements rewind() for Iterable
     * @internal
     */
    public function rewind() {
        $this->position = 0;
    }

    /**
     * Implements current() for Iterable
     *
     * @internal
     * @return mixed
     */
    public function current() {
        return $this->items[$this->position];
    }

    /**
     * Implements key() for Iterable
     *
     * @internal
     * @return int|mixed
     */
    public function key() {
        return $this->position;
    }

    /**
     * Implements next() for Iterable
     * @internal
     */
    public function next() {
        ++$this->position;
    }

    /**
     * Implements valid() for Iterable
     *
     * @internal
     * @return bool
     */
    public function valid() {
        return isset($this->items[$this->position]);
    }
}