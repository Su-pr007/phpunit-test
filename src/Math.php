<?php

namespace Php\Package;

use PHPUnit\Util\Exception;

class Math
{
	private int $x;
	private int $y;

	/**
	 * @param int $x
	 * @param int $y
	 */
	public function __construct(int $x, int $y)
	{
		if (empty($x) || empty($y)) {
			throw new Exception('not entered variables');
		}

		$this->x = $x;
		$this->y = $y;
	}

	/**
	 * @return int
	 */
	public function getX(): int
	{
		return $this->x;
	}

	/**
	 * @return int
	 */
	public function getY(): int
	{
		return $this->y;
	}

	/**
	 * @param $x
	 */
	public function setX(int $x): void
	{
		$this->x = $x;
	}

	/**
	 * @param $y
	 */
	public function setY(int $y): void
	{
		$this->y = $y;
	}

	/**
	 * @param $fn
	 *
	 * @return int
	 */
	public function calc($fn): int
	{
		return $fn($this->x, $this->y);
	}
}
