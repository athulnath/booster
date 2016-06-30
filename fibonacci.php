<?php
/**
 * Find nth Fibonacci number
 * 
 */

function  nonRecFibonacci($limit) {
    $a = 0;
    $b = 1;
    $c = 0;
    $next = 0;
   
    for($i = 0; $i <= $limit; $i++) {
        
        if($i <= 1) {
            $next = $i;
        } else {
            $c = $a + $b;
            $a = $b;
            $b = $c;
            $next = $c;
        }
    }  
    return $next;
}

function recFibonacci($n) {
    
    if($n == 0) {
        return 0;
    }
    else if($n == 1) {
        return 1;
    }
    else {
        return  recFibonacci($n - 1) + recFibonacci($n - 2);
    }
}

$nth = 3;
echo nonRecFibonacci($nth) . PHP_EOL;
echo recFibonacci($nth);
