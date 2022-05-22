<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Constraint\IsType;

class ItemTest extends TestCase
{
    public function testDescriptionIsNotEmpty()
    {
        $item = new Item;

        $this->assertNotEmpty($item->getDescription());
    }

    public function testIDisAnInteger()
    {
        $item = new ItemChild;

        $this->assertIsInt($item->getID());
    }

    public function testTokenIsAString()
    {
        $item = new ItemChild;

        $this->assertIsString($item->getToken());
    }

    public static function assertIsString($actual, string $message = ''): void
    {
        static::assertThat(
            $actual,
            new IsType(IsType::TYPE_STRING),
            $message
        );
    }

    public static function assertIsInt($actual, string $message = ''): void
    {
        static::assertThat(
            $actual,
            new IsType(IsType::TYPE_INT),
            $message
        );
    }
}