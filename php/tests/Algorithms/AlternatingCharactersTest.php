<?php 
namespace Test\Algorithms;

use PHPUnit\Framework\TestCase;
use Booster\Algorithms\AlternatingCharacters;

class AlternatingCharactersTest extends TestCase {
	public function testGetMinimumNumber() {
		$obj = new AlternatingCharacters();

		$this->assertEquals($obj->getMinimumNumberToChange("AAAA"), 3);
		$this->assertEquals($obj->getMinimumNumberToChange("BBBBB"), 4);
		$this->assertEquals($obj->getMinimumNumberToChange("ABABABAB"), 0);
		$this->assertEquals($obj->getMinimumNumberToChange("BABABA"), 0);
		$this->assertEquals($obj->getMinimumNumberToChange("AAABBB"), 4);
	}
}
 ?>
