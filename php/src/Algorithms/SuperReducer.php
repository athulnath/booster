<?php 
namespace Booster\Algorithms;

class SuperReducer {

	public function reduce($data) {
		$i = 1;
		$tmp = $data;
		while($i < strlen($data)) {
			if(empty($data)) {
				// return "Empty String";
			} else if($data[$i - 1] === $data[$i]) {
				$data = str_replace($data[$i - 1].$data[$i], '', $data);
				$i = $i + 2;
			} else {
				$i++;
			}
		}

		if($tmp !== $data) {
			return $this->reduce($data);
		} else {
			if(empty($data)) {
				return "Empty String";
			} else {
				return $data;
			}
		}
	}
}