<?php 
namespace Booster\Algorithms;


class PalindrumIndex {

	public function getIndex($string) {
		
		$l = 0;
		$r = strlen($string) - 1;

		while($l < $r) {
			if($string[$l] === $string[$r]) {
				$l++;
				$r--;
			} else {
				break;
			}
		}

	if($l >= $r) {
		return -1;
	}

	$saveL = $l;
	$saveR = $r;

	$l++;
	$leftFault = 1;
	while($l < $r) {
		if($string[$l] === $string[$r]) {
			$l++;
			$r--;
		} else {
			$leftFault = 0;
			break;
		}
	}

	return $leftFault? $saveL : $saveR;

	}
}


//aab
//aaa
// $fp = fopen("php://stdin", "r");
// $n = intval(fgets($fp));
// $obj = new PalindrumIndex();
// for($i = 0; $i < $n; $i++) {
// 	echo $obj->getIndex(trim(fgets($fp))) . PHP_EOL;
// }
 ?>