<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Constraint\IsType;

class ProductTest extends TestCase
{
    public function testIDIsAnInteger()
    {
        $product = new Product;

        $reflector = new ReflectionClass(Product::class);

        $property = $reflector->getProperty('product_id');

        $property->setAccessible(true);
        $value = $property->getValue($product);

        $this->assertIsInt($value);
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