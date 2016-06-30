<?php
$handler = fopen("php://stdin", "r");
$limit = fgets($handler);
$arr = array_slice(explode(" ", fgets($handler)), 0, $limit);

$positive = 0;
$negative = 0;
$zero = 0;
foreach($arr as $data) {
    
    if($data > 0 ) {
        ++$positive;
    } else if($data < 0) {
        ++$negative;
    } else if($data == 0) {
        ++$zero;
    }
}

$count = count($arr);
echo round($positive / $count, 3) . PHP_EOL;
echo round($negative / $count, 3) . PHP_EOL;
echo round($zero / $count, 3) . PHP_EOL;