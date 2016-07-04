<?php 
namespace Booster\Algorithms;

use Booster\Common\Reader;

class Pangram {
	public function isPangram($string) {
		for($i = 65; $i <= 90; $i++) {
			if(stripos($string, chr($i)) === false) {
				return 'not pangram';
			}
		}
		return 'pangram';
	}
}