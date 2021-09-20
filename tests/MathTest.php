<?php

use Php\Package\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{

	public function setUp(): void
	{

	}

	public function testNewMathException(): void
	{
		$this->expectException(ArgumentCountError::class);
		new Math();
	}

	public function testGetX(): void
	{
		$mathObject = new Math(4, 6);
		$this->assertEquals(4, $mathObject->getX());
	}

	public function testGetY(): void
	{
		$mathObject = new Math(4, 6);
		$this->assertEquals(6, $mathObject->getY());
	}

	public function testSetY(): void
	{
		$mathObject = new Math(4, 6);
		$mathObject->setY(3);
		$this->assertEquals(3, $mathObject->getY());

		$mathObject->setY(7);
		$this->assertEquals(7, $mathObject->getY());
		$this->assertFalse($mathObject->getY() > 7);
		$this->assertFalse($mathObject->getY() < 7);
	}

	public function testSetX(): void
	{
		$mathObject = new Math(4, 6);
		$mathObject->setX(5);
		$this->assertEquals(5, $mathObject->getX());

		$mathObject->setX(2);
		$this->assertEquals(2, $mathObject->getX());
		$this->assertFalse($mathObject->getX() > 2);
		$this->assertFalse($mathObject->getX() < 2);
	}

	public function testCalc(): void
	{
		$mathObject = new Math(4, 6);
		$math1 = $mathObject->calc(fn ($x, $y) => $x + $y);

		$this->assertEquals(10, $math1);
		$this->assertFalse($math1 > 10);
		$this->assertFalse($math1 < 10);

		$math2 = $mathObject->calc(fn ($x, $y) => $x * $y);

		$this->assertEquals(24, $math2);
		$this->assertFalse($math2 > 24);
		$this->assertFalse($math2 < 24);
	}
}
