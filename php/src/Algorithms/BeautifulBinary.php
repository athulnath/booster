<?php
namespace Booster\Algorithms;

use Booster\Common\Reader;

class BeautifulBinary {
	public static function getMinimumStep($n, $binary) {
		$counter = 0;
		$i = 0;
		while($i < $n) {
			if($binary[$i] === "0" && $binary[$i + 1] === "1" && $binary[$i + 2] === "0") {
					++$counter;
					$i = $i + 3;
			} else {
				$i++;
			}	
		}
		return $counter;
	}
}