<?php

class CallableCountTest extends PHPUnit_Framework_TestCase
{
    public function testCallable()
    {
        $fn = function () {
            return 10;
        };
        $sut = new \DDDCollection\CallableCount($fn);
        $this->assertEquals(10, $sut());
    }
}
