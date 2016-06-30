<?php
function getGrowth($cycles, $startHeight) {

    for ($i = 1; $i <= $cycles; $i++) {
        if ($i % 2 == 0) {
            ++$startHeight;
        } else {
            $startHeight *= 2;
        }
    }

    return $startHeight;
}

$handler = fopen("php://stdin", "r");
$num_tests = fgets($handler);

$tesArray = [];
for($i = 0; $i < $num_tests; $i++) {
    array_push($tesArray, (int)fgets($handler));
}

foreach($tesArray as $inp) {
    echo getGrowth($inp, 1) . PHP_EOL;
}