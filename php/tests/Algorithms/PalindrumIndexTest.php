<?php 
namespace Test\Algorithms;

use Booster\Algorithms\PalindrumIndex;
use PHPUnit\Framework\TestCase;

class PalindrumIndexTest extends TestCase {
	
	public function testGetIndex() {
		$obj = new PalindrumIndex();	
		$this->assertEquals($obj->getIndex("aaab"), 3);
		$this->assertEquals($obj->getIndex("baa"), 0);
		$this->assertEquals($obj->getIndex("aaa"), -1);
	}
}


 ?>