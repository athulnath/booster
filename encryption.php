<?php
$handler = fopen("php://stdin", "r");
$input = fgets($handler);

$data = [];
$len = strlen($input);
for ($i = 0; $i < $len; $i++) {
    if (trim($input[$i]) !== "") {
        $data[] =  $input[$i];
    }
}

$L = count($data);
$row = floor(sqrt($L));
$column = ceil(sqrt($L));

while($row * $column < $L) {
    if($row < $column) {
        ++$row;
    } else {
        ++$column;
    }
}

$encData = '';

for ($i = 0; $i < $column; $i++) {
    $pos = $i;
    for ($j = 0; $j < $row; $j++) {
        if ($pos < $L) {
            $encData .= $data[$pos];
        }
        $pos += $column;
    }
    $encData .= " ";
}

echo $encData;
