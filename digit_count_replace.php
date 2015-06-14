<?php
$arr = [45, 59,237, 599, 498, 91, 890];
$input_digit = 9;
$replace_digit = 0;
$count = 0;

function recDigitParser($digit, $input_digit, $replace_digit) {
    
    global $count;
    
    if($digit == 0) {
        return 0;
    }
    
    $res = recDigitParser((int)($digit / 10), $input_digit, $replace_digit);
    $lastDigit = $digit % 10;
    
    $res *= 10;
    
    if($lastDigit === $input_digit) {
      $lastDigit = $replace_digit;  
      ++$count;
    }
    
    $res += $lastDigit;
   
    return $res;
    
} 

foreach($arr as $key => $data) {
    $arr[$key] = recDigitParser($data, $input_digit, $replace_digit);
}

print_r($arr);
echo $count;