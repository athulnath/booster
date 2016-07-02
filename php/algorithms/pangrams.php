<?php 
class Pangram {
	public function isPangram($string) {
		for($i = 65; $i <= 90; $i++) {
			if(stripos($string, chr($i)) === false) {
				return false;
			}
		}
		return true;
	}
}


class Reader {
	public static function stdin() {
		$_fp = fopen("php://stdin","r");
		return trim(fgets($_fp)); 		
	}
}

$data = Reader::stdin();
echo (new Pangram())->isPangram($data) ? "pangram": "not pangram";