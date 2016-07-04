<?php 
namespace Test\Algorithms;

use Booster\Algorithms\Pangram;
use PHPUnit\Framework\TestCase;


class PangramTest extends TestCase {
	const PANGRAM = 'pangram';
	const NOT_PANGRAM = 'not pangram';

	public function testSimpleTest() {
		$png = new Pangram();
		$this->assertEquals($png->isPangram('We promptly judged antique ivory buckles for the next prize'), self::PANGRAM);
		$this->assertEquals($png->isPangram('We promptly judged antique ivory buckles for the prize'), self::NOT_PANGRAM);
	}
}	
 ?>
