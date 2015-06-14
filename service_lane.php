<?php
function getVehicleType($serviceArray, $start, $end) {

    $vehicleType = $serviceArray[$start];
    while($start <= $end) {
        if($serviceArray[$start] < $vehicleType) {
            $vehicleType = $serviceArray[$start];
        }
        ++$start;
    }
    return (int)$vehicleType;
}

$handler = fopen("php://stdin", "r");
$inpArr = explode(" ", fgets($handler));

$widthArrSize = $inpArr[0];;
$tesCount = $inpArr[1];

$widthArray = array_slice(explode(" ", fgets($handler)), 0 , $widthArrSize);

$testCases = [];
for($i = 0; $i < $tesCount; $i++) {
    array_push($testCases, explode(" ", fgets($handler)));
}

foreach($testCases as $case) {
    $res = getVehicleType($widthArray, (int)$case[0], (int)$case[1]);
    echo $res . "\n";
}