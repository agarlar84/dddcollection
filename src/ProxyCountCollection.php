<?php

namespace DDDCollection;

class ProxyCountCollection extends Collection
{
    private $count;

    public function __construct($objClassName, $count, ...$variadicElementsToCollect)
    {
        $this->count = $count;
        parent::__construct($objClassName, $variadicElementsToCollect);
    }

    public function count()
    {
        return $this->count;
    }
}