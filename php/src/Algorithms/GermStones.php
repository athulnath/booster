<?php 
namespace Booster\Algorithms;

class GermStones {

	private function check(array $unique, $element) {
		foreach($unique as $ele) {
			if($ele === $element) {
				return true;
			}
		}
		return false;
	}

	public function getGermElements(array $germs) {

		$germElementCounter = 0;
		if(count($germs) > 0)
			$germ = $germs[0];

		if(count($germs) == 1) {
			return strlen($germs[0]);
		}

		$unique = [];
		for($i = 0; $i < strlen($germ); $i++) {
			
			$isGerm = true;
			
			if(!$this->check($unique,$germ[$i])) {
				$unique[] = $germ[$i];
			} else {
				continue;
			}

			for($j = 1; $j < count($germs); $j++) {
				if(strpos($germs[$j], $germ[$i]) === false)  {
					$isGerm = false;
					break;
				}
			}
			if($isGerm) {
				++$germElementCounter;
			}
		}

		return $germElementCounter;
	}
}

// $fp = fopen("php://stdin", "r");
// $n = intval(fgets($fp));
// $input = [];
// for($i = 0; $i < $n; $i++) {
// 	array_push($input,trim(fgets($fp)));
// }
// $obj = new GermStones();
// echo $obj->getGermElements($input);
