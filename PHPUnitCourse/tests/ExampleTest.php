<?php
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testAddingTwoPlusTwoResultsInFour()
    {
        $this->assertEquals(4, 2 + 2);
    }

    // public function testTrueIsTrue()
    // {
    //     $a = true;
    //     $this->assertTrue(true, $a);
    // }
}