<?php 
namespace Booster\Algorithms;

class AlternatingCharacters {
	public function getMinimumNumberToChange($string) {
		$i = 1;
		$n = strlen($string);
		$minimumNumber = 0;
		while($i < $n) {
			if($string[$i - 1] === $string[$i]) {
				++$minimumNumber;
			}
			$i++;
		}
		return $minimumNumber;
	}
}


// $fp = fopen("php://stdin","r");
// $n = intval(fgets($fp));
// $alternater = new AlternatingCharacters();
// for($i = 0; $i < $n; $i++) {
// 	$input = trim(fgets($fp));
// 	echo $alternater->getMinimumNumberToChange($input) . PHP_EOL;
// } 
