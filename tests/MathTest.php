<?php

use Php\Package\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
	private Math $mathObject;

	public function setUp(): void
	{
		$this->mathObject = new Math(4, 6);
	}

	public function testNewMath(): void
	{
		$this->expectException(ArgumentCountError::class);

		$this->mathObject = new Math();
	}

	public function testGetX(): void
	{
		$this->assertEquals(4, $this->mathObject->getX());
	}

	public function testGetY(): void
	{
		$this->assertEquals(6, $this->mathObject->getY());
	}

	public function testSetY(): void
	{
		$this->mathObject->setY(3);
		$this->assertEquals(3, $this->mathObject->getY());

		$this->mathObject->setY(7);
		$this->assertEquals(7, $this->mathObject->getY());
		$this->assertFalse($this->mathObject->getY() > 7);
		$this->assertFalse($this->mathObject->getY() < 7);
	}

	public function testSetX(): void
	{
		$this->mathObject->setX(5);
		$this->assertEquals(5, $this->mathObject->getX());

		$this->mathObject->setX(2);
		$this->assertEquals(2, $this->mathObject->getX());
		$this->assertFalse($this->mathObject->getX() > 2);
		$this->assertFalse($this->mathObject->getX() < 2);
	}

	public function testCalc(): void
	{
		$math1 = $this->mathObject->calc(fn ($x, $y) => $x + $y);

		$this->assertEquals(10, $math1);
		$this->assertFalse($math1 > 10);
		$this->assertFalse($math1 < 10);

		$math2 = $this->mathObject->calc(fn ($x, $y) => $x * $y);

		$this->assertEquals(24, $math2);
		$this->assertFalse($math2 > 24);
		$this->assertFalse($math2 < 24);
	}
}
