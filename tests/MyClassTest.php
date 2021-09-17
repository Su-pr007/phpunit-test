<?php

namespace Hexlet\Phpunit\Tests;

use PHPUnit\Framework\TestCase;
use Php\Package\MyClass;

class MyClassTest extends TestCase
{
	private $myClass;

	public function setUp(): void
	{
		$this->myClass = new MyClass;
	}

	function testMyMethod(): void
	{
		$this->assertTrue($this->myClass::testMe());
	}
}