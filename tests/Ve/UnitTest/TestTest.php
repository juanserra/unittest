<?php


namespace Ve\UnitTest;

/**
 * Tests to cover Test class
 *
 * @package Ve\UnitTest
 * @author  Steve West
 * @covers  Ve\UnitTest\Test
 */
class TestTest extends \PHPUnit_Framework_TestCase
{

	/**
	 * @var Test
	 */
	protected $object;

	protected function setUp()
	{
		$this->object = new Test;
	}

	/**
	 * @coversDefaultClass returnHello
	 * @group              UnitTest
	 */
	public function testHello()
	{
		$this->assertEquals(
			'Hello',
			$this->object->returnHello()
		);
	}

	/**
	 * @coversDefaultClass addNumbers
	 * @group              UnitTest
	 * @dataProvider       numberProvider
	 */
	public function testAdd($a, $b, $expected)
	{
		$this->assertEquals(
			$expected,
			$this->object->addNumbers($a, $b)
		);
	}

	public function numberProvider()
	{
		return [
			[1, 1, 2],
			[2, 3, 5],
			[100, 50, 150],
		];
	}

}
