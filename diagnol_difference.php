<?php
$handler = fopen("php://stdin", "r");
$size = fgets($handler);

$matrix = [];
for($i = 0; $i < $size; $i++) {
    array_push($matrix, array_slice(explode(" ", fgets($handler)), 0, $size));
}

$lSum = 0;
$rSum = 0;
for($i = 0; $i < $size; $i++) {
    $lSum += $matrix[$i][$i];
    $rSum += $matrix[$i][($size - 1) - $i];
}

echo abs($lSum - $rSum);
