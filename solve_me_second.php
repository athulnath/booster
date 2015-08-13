<?php
function sum($a, $b) {
    return $a + $b;
}

$handler = fopen("php://stdin", "r");
$limit = fgets($handler); //read limit

$input = [];
for($i = 0; $i < $limit; $i++) {
    $list = explode(" ", fgets($handler));
    array_push($input, $list);
}        

foreach($input as $list) {
    echo sum((int)$list[0], (int)$list[1]) . PHP_EOL;
}

fclose($handler);

