<?php

class ProxyCountCollectionTest extends PHPUnit_Framework_TestCase
{
    public function testProxyCountCollectionUsesCallback()
    {
        $fn = new \DDDCollection\CallableCount(
            function () {
                return 10;
            }
        );

        $sut = new \DDDCollection\ProxyCountCollection('anAwesomeClass', $fn);
        $this->assertEquals(10, count($sut));
    }
}
