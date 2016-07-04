<?php 
namespace Test\Algorithms;

use Booster\Algorithms\BeautifulBinary;
use PHPUnit\Framework\TestCase;

class BeautifulBinary extends TestCase {

	public function testSimple() {
		$this->assertEquals(BeautifulBinary::getMinimumStep(7, "0101010"), 2);
		// $this->assertEquals(BeautifulBinary::getMinimumStep(5, "01100"), 0);
		$this->assertEquals(BeautifulBinary::getMinimumStep(10, "0100101010"), 3);
	}
}
