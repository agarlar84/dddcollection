<?php

namespace DDDCollection;

use DDDCollection\Exception\IncorrectItemToAddException;

class StrictCollection extends Collection
{
    public function add($anElementToCollect)
    {
        if (!is_a($anElementToCollect, static::$collectibleObjectsClassName)) {
            throw new IncorrectItemToAddException(static::$collectibleObjectsClassName, $anElementToCollect);
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