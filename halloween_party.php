<?php
$handler = fopen("php://stdin", "r");
$T = fgets($handler);

$kArr = [];
for ($i = 0; $i < $T; $i++) {
    array_push($kArr, fgets($handler));
}

foreach ($kArr as $K) {
    if ($K % 2 == 0) {
        $med = $K / 2;
        echo $med * $med . PHP_EOL;
    } else {
        $med1 = (int) ($K / 2);
        $med2 = $K - $med1;
//        echo $med1. " " . $med2. PHP_EOL;
        echo $med1 * $med2 . PHP_EOL;
    }
}



