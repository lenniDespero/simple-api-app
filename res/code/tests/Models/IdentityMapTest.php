<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use \Otus\Models\IdentityMap;

class SimpleClassForTest{}

class IdentityMapTest extends TestCase
{
    public function testGetInstance()
    {
        $this->assertInstanceOf(
            IdentityMap::class,
            IdentityMap::getInstance()
        );
    }


    public function testIsSingleton()
    {
        $first = IdentityMap::getInstance();
        $second = IdentityMap::getInstance();

        $this->assertEquals(
            $first,
            $second
        );
    }

    public function testGetAndSet()
    {
        $record = new SimpleClassForTest();
        IdentityMap::addRecord($record, 321);
        $this->assertEquals(
            $record,
            IdentityMap::getRecord('SimpleClassForTest', 321)
        );
    }
}