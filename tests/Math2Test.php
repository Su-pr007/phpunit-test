<?php

namespace Hexlet\Phpunit\Tests;

use PHPUnit\Framework\TestCase;
use Php\Package\Math;

class Math2Test extends TestCase
{
	private Math $mathObject;

	function setUp(): void
	{
		$this->mathObject = new Math(3, 5);
	}

	function testGetX(): void
	{
		$this->assertEquals(3, $this->mathObject->getX());
		$this->assertNotEquals(5, $this->mathObject->getX());
	}

	function testGetY(): void
	{
		$this->assertEquals(5, $this->mathObject->getY());
		$this->assertNotEquals(3, $this->mathObject->getY());
	}

	function testMath(): void
	{
		$math1 = $this->mathObject->calc(fn ($x, $y) => $x + $y);

		$this->assertTrue($math1 == 8);
		$this->assertFalse($math1 > 8);
		$this->assertFalse($math1 < 8);
	}
}