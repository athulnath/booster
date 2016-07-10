<?php 
namespace Booster\Algorithms;


class ConvertToAnagram {

	public function getMinimumSteps($string) {

		$string = strtolower($string);
		$n = strlen($string);
		if($n % 2 !== 0) return -1;

		$minSteps = 0;
		$firstMap = array_fill(0, 26, 0);
		$secondMap = array_fill(0, 26, 0);

		$i = 0;
		$k = $n/2;
		while($i < $n / 2) {
			$firstMap[ord($string[$i++]) - ord('a')]++;
			$secondMap[ord($string[$k++]) - ord('a')]++;
		}

		for($i = 0; $i < 26; $i++) {
			if($firstMap[$i] > $secondMap[$i] && $firstMap[$i] !== 0) {
				$minSteps += $firstMap[$i] - $secondMap[$i];
			}  
		}

		return $minSteps;
	}
}


//aab
//aaa
// $fp = fopen("php://stdin", "r");
// $n = intval(fgets($fp));
// $obj = new ConvertToAnagram();
// for($i = 0; $i < $n; $i++) {
// 	echo $obj->getMinimumSteps(trim(fgets($fp))) . PHP_EOL;
// }
 ?>