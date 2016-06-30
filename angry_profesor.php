<?php
$handler = fopen("php://stdin", "r");
$T = fgets($handler);

$res = [];
for($i = 0; $i < $T; $i++) {
    $input = explode(" ", fgets($handler));
    $studentCount = $input[0];
    $K = $input[1];
    
    $count = 0;
    $studentArray = array_slice(explode(" ", fgets($handler)), 0, $studentCount + 1);
    for($j = 0; $j < $studentCount; $j++) {
        if((int)$studentArray[$j] <=0) {
            ++$count;
        }
    }
    
    if($count >= $K) {
        array_push($res, "NO");
    } else {
        array_push($res, "YES");
    }
}

foreach($res as $ans) {
    echo $ans . PHP_EOL;
}