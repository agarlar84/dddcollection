<?php

namespace DDDCollection;

class ProxyCountCollection extends Collection
{
    private $callableCount;

    public function __construct($objClassName, $count, ...$variadicElementsToCollect)
    {
        $this->callableCount = $count;
        parent::__construct($objClassName, ...$variadicElementsToCollect);
    }

    public function count()
    {
        return call_user_func($this->callableCount);
    }
}