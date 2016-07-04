<?php 
namespace Test\Algorithms;

use Booster\Algorithms\SuperReducer;
use PHPUnit\Framework\TestCase;


class SuperReducerTest extends TestCase {
	
	private $_reducer;
	const EMPTY_STRING = 'Empty String';

	public function __construct() {
		$this->_reducer = new SuperReducer();
	}

	public function testReduceSimple() {
		$this->assertEquals($this->_reducer->reduce('aaaa'), self::EMPTY_STRING);
	}

	public function testReduceEmpty() {
		$this->assertEquals($this->_reducer->reduce('baab'), self::EMPTY_STRING);
	}

	public function testReduce() {
		$this->assertEquals($this->_reducer->reduce('aaabccddd'), 'abd');
	}
}	
 ?>
