<?php

namespace DDDCollection;

class CallableCount
{
    /** @var Callable callable */
    public $fn;

    public function __construct(Callable $fn)
    {
        $this->fn = $fn;
    }

    public function __invoke()
    {
        return call_user_func($this->fn);
    }
}
