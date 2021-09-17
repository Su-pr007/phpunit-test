<?php

namespace Php\Package;

use PHPUnit\Util\Exception;

class Math
{
	private $x;
	private $y;

	public function __construct(int $x, int $y)
	{
		if (empty($x) || empty($y)) {
			throw new Exception('not entered variables');
		}

		$this->x = $x;
		$this->y = $y;
	}

	public function getX(): int
	{
		return $this->x;
	}

	public function getY(): int
	{
		return $this->y;
	}

	public function setX($x): void
	{
		$this->x = $x;
	}

	public function setY($y): void
	{
		$this->y = $y;
	}

	public function calc($fn): int
	{
		return $fn($this->x, $this->y);
	}
}
