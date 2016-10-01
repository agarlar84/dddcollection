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

    public function testVariadicItemsAreBubbleCorrectlyToParent()
    {
        $fn = new \DDDCollection\CallableCount(
            function () {
                return 3;
            }
        );

        $sut = new \DDDCollection\ProxyCountCollection('anAwesomeClass', $fn, new \StdClass(), new \StdClass());

        $this->assertEquals(2, count($sut->getCollection()));
        $this->assertEquals(3, count($sut));
    }
}
