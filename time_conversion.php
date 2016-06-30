<?php
$handler = fopen("php://stdin", "r");
$time = fgets($handler);

$timeArray = explode(":", $time);
$hour = $timeArray[0];
$min = $timeArray[1];
$sec = intval($timeArray[2]);

echo $hour . ":" . $min . ":" . $sec;

