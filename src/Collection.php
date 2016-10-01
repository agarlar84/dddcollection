<?php
namespace DDDCollection;

use ArrayAccess;
use ArrayIterator;
use Countable;
use IteratorAggregate;

class Collection implements IteratorAggregate, Countable, ArrayAccess
{
    public static $collectibleObjectsClassName = '';
    protected $collection = [];

    public function __construct($objClassName, ...$variadicElementsToCollect)
    {
        static::$collectibleObjectsClassName = $objClassName;

        $this->collection = [];
        foreach ($variadicElementsToCollect as $occupancy) {
            $this->add($occupancy);
        }
    }

    public function add($anElementToCollect)
    {
        $this->collection[] = $anElementToCollect;

        return $this;
    }

    public function getIterator()
    {
        return new ArrayIterator($this->collection);
    }

    public function count()
    {
        $count = 0;
        /** @var Countable $collectedElement */
        foreach ($this->collection as $collectedElement) {
            $count += count($collectedElement);
        }

        return $count;
    }

    public function offsetExists($offset)
    {
        return isset($this->collection[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->collection[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->collection[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->collection[$offset]);
    }

    public function getCollection()
    {
        return $this->collection;
    }
}
