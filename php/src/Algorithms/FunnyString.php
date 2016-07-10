<?php 
namespace Booster\Algorithms;


class FunnyString {

	private function run($string) {
		$revString = strrev($string);
		$i = 1;
		$n = strlen($string);
		while($i < $n) {
			if(abs(ord($string[$i]) - ord($string[$i - 1])) !== abs(ord($revString[$i]) - ord($revString[$i - 1]))) {
				return false;
			}
			$i++;
		}
		return true;
	}

	public function checkFunny($string) {
		return $this->run($string)? "Funny" : "Not Funny";
	}
}



// $fp = fopen("php://stdin", "r");
// $n = intval(fgets($fp));
// $obj = new FunnyString();
// for($i = 0; $i < $n; $i++) {
// 	echo $obj->checkFunny(trim(fgets($fp))) . PHP_EOL;
// }

 ?>