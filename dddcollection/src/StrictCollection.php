<?php

namespace DDDCollection;

class StrictCollection extends Collection
{
    public static $collectibleObjectsClassName = '';
    protected $collection = [];

    public function add($anElementToCollect)
    {
        if (!is_a($anElementToCollect, static::$collectibleObjectsClassName)) {
            throw new \Exception('Object is not a '.static::$collectibleObjectsClassName.' class');
        }

        $this->collection[] = $anElementToCollect;

        return $this;
    }

    public function offsetSet($offset, $value)
    {
        if (is_a($value, static::$collectibleObjectsClassName)) {
            $this->collection[$offset] = $value;
        }
    }
}