<?php 
$_fp = fopen("php://stdin","r");
$data = trim(fgets($_fp)); 
$n = strlen($data);
$tmp = [];
for($i = 0; $i < $n; $i++) {
	$isSpeChar = false;
	for($j = 0; $j < count($tmp); $j++) {
		if(strtolower($data[$i]) == strtolower($tmp[$j]) || !((ord($data[$i]) >= 97 && ord($data[$i]) <= 122) || (ord($data[$i]) >= 65 && ord($data[$i]) <= 90)) ) {
			$isSpeChar = true;
		}
	}

	if(!$isSpeChar) {
		$tmp[] = $data[$i];
	}
}
echo count($tmp) === 26 ? "pangram": "not pangram";