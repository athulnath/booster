<?php
class Binary {
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

class Read {
	public static function getStdin() {
		return fopen("php://stdin", "r");
	}
}


$handle = Read::getStdin();
fscanf($handle, "%d", $n);
fscanf($handle, "%s", $data);
echo Binary::getMinimumStep($n, $data);