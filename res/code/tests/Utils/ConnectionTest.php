<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use \Otus\Utils\Connection;

class ConnectionTest extends TestCase
{
    public function testGetInstance()
    {
        $this->assertInstanceOf(
            Connection::class,
            Connection::getInstance()
        );
    }


    public function testIsSingleton()
    {
        $connectionOne = Connection::getInstance();
        $connectionTwo = Connection::getInstance();
        $this->assertEquals(
            $connectionOne,
            $connectionTwo
        );
    }
}