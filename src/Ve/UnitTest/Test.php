<?php

namespace Ve\UnitTest;

/**
 * A simple class to demonstrate unit testing
 *
 * @package Ve\UnitTest
 * @since   1.0
 */
class Test
{

	/**
	 * Returns a greeting
	 *
	 * @return string
	 * @since  1.0
	 */
	public function returnHello()
	{
		return 'Hello';
	}

	/**
	 * Adds two numbers together and returns the result
	 *
	 * @param int $a
	 * @param int $b
	 *
	 * @return int
	 *
	 * @since 1.0
	 */
	public function addNumbers($a, $b)
	{
		return $a + $b;
	}

}

