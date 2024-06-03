<?php

declare(strict_types=1);

namespace Azubi\tests\Math;

use Azubi\Math\Math;
use Azubi\Math\MathInterface;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    /**
     * Subject Under Test
     */
    private ?MathInterface $sut;

    /**
     * runs before each test method
     */
    protected function setUp(): void
    {
        $this->sut = new Math();
    }

    /**
     * runs after each test method
     */
    protected function tearDown(): void
    {
        $this->sut = null;
    }

    public function testAdd()
    {
        $this->assertEquals(4.0, $this->sut->add(2.0, 2.0));
        $this->assertEquals(2.0, $this->sut->add(1.0, 1.0));
        $this->assertEquals(3.0, $this->sut->add(1.5, 1.5));
    }

    public function testSubtract()
    {
        $this->assertEquals(3.0, $this->sut->subtract(9.0, 6.0));
        $this->assertEquals(5.0, $this->sut->subtract(15.0, 10.0));
        $this->assertEquals(-3.0, $this->sut->subtract(6.0, 9.0));
    }

    public function testMultiply()
    {
        $this->assertEquals(4.0, $this->sut->multiply(2.0, 2.0));
        $this->assertEquals(20.0, $this->sut->multiply(4.0, 5.0));
        $this->assertEquals(0.25, $this->sut->multiply(0.5, 0.5));
    }

    public function testDivide()
    {
        $this->assertEquals(2.0, $this->sut->divide(4.0, 2.0));
        $this->assertEquals(0.5, $this->sut->divide(1.0, 2.0));
        $this->assertEquals(1.0, $this->sut->divide(0.5, 0.5));
    }

    public function testDivideByZero()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->sut->divide(1.0, 0.0);
    }
}
