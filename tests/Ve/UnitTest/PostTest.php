<?php


namespace Ve\UnitTest;

class PostTest extends \PHPUnit_Framework_TestCase
{

	/**
	 * @var Test
	 */
	protected $object;

	protected function setUp()
	{
		$this->object = new Post;
	}

	/**
	 * @coversDefaultClass returnHello
	 * @group              UnitTest
	 */
	public function testSetProperty()
	{
//		$this->assertEquals(
//			'Hello',
//			$this->object->returnHello()
//		);
		$this->assertEquals(
			true,
			$this->object->set('title', 'something')
		);
	}

	/**
	 * @coversDefaultClass addNumbers
	 * @group              UnitTest
	 * @dataProvider       numberProvider
	 */
//	public function testAdd($a, $b, $expected)
//	{
//		$this->assertEquals(
//			$expected,
//			$this->object->addNumbers($a, $b)
//		);
//	}
//
//	public function numberProvider()
//	{
//		return [
//			[1, 1, 2],
//			[2, 3, 5],
//			[100, 50, 150],
//		];
//	}

}

