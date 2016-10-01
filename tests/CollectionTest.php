<?php

class CollectionTest extends PHPUnit_Framework_TestCase
{
    public function testCollectionCollectItemsCorrectly()
    {
        $sut = new \DDDCollection\Collection('aRandomClassName', new \StdClass(), new \StdClass());
        $this->assertEquals(2, count($sut));
    }
}
