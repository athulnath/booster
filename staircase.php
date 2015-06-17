<?php

$handler = fopen("php://stdin", "r");
$row = fgets($handler);

//for($i = 0; $i < $row; $i++) {
//    
//    for($j = 0; $j < $row - 1 - $i ; $j++) {
//        echo " ";
//    }
//    
//    for($k = 0; $k < $i; $k++) {
//        echo "#";
//    }
//    
//    echo "\n";
//}

//for($i = 1; $i <= $row; $i++) {
//    for($j = 0; $j <= $row - $i; $j++) {
//        echo " ";
//    }
//    for($k = 0; $k < 2 * $i - 1; $k++) {
//        echo "*";
//    }
//    echo "\n";
//}


//for($i = 0; $i < $row; $i++) {
//    for($j = 0; $j < $i; $j++) {
//        echo " ";
//    }
//    for($k = 0; $k < 2 * ($row - $i) - 1; $k++) {
//        echo "*";
//    }
//    echo "\n";
//}


//for($i = 1; $i <= $row; $i++) {
//    for($j = 0; $j < $row - $i; $j++) {
//        echo " ";
//    }
//    for($k = 0; $k < (2 * $i) - 1; $k++) {
//        echo "*";
//    }
//    echo "\n";
//}
//for($i = 1; $i <= $row; $i++) {
//    
//    for($j = 0; $j < $i; $j++) {
//        echo " ";
//    }
//    for($k = 0; $k < (2 * ($row- $i)) - 1; $k++) {
//        echo "*";
//    }
//    echo "\n";
//}


//for($i = 1; $i <= $row; $i++) {
//    for($j = 0; $j < $row - $i; $j++) {
//        echo "*";
//    }
//    for($k = 0; $k < (2 * $i) - 1; $k++) {
//        echo " ";
//    }
//    echo "\n";
//}
//for($i = 1; $i <= $row; $i++) {
//    
//    for($j = 0; $j < $i; $j++) {
//        echo "*";
//    }
//    for($k = 0; $k < (2 * ($row- $i)) - 1; $k++) {
//        echo " ";
//    }
//    echo "\n";
//}



for($i = 0; $i < $row; $i++) {
    for($j = 0; $j < $row - $i; $j++) {
        echo "*";
    }
    for($k = 0; $k < 2 * $i; $k++) {
        echo " ";
    }
    for($l = 0; $l < $row - $i; $l++) {
        echo "*";
    }
    echo "\n";
}

for($i = 2; $i <= $row; $i++) {
    
    for($j = 0; $j < $i; $j++) {
        echo "*";
    }
    for($k = 0; $k < 2 * ($row - $i); $k++) {
        echo " ";
    }
    for($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "\n";
}