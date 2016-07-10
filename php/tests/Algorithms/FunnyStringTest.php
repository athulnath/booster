<?php 
namespace Test\Algorithms;

use Booster\Algorithms\FunnyString;
use PHPUnit\Framework\TestCase;

class FunnyStringTest extends TestCase {
	
	public function testIsFunny() {
		$obj = new FunnyString();
		$this->assertEquals($obj->checkFunny("acxz"), "Funny");
		$this->assertEquals($obj->checkFunny("bcxz"), "Not Funny");
	}
}


 ?>