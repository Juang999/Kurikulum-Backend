<?php
//NO.2
for ($i=1; $i <= 9; $i++) { 
    for ($j=1; $j <= 9; $j++) { 
        if ($i == 2 || $i == 4 || $i == 6 || $i == 8) {
            echo "+";
        }else {
            echo "-";
        }
    }
    echo "\n";
}

echo "\n";
echo "\n";
for ($i=1; $i <= 9; $i++) { 
    for ($j=1; $j <= 9; $j++) { 
        if ($j == 1 || $j == 3 || $j == 5 || $j == 7 || $j == 9) {
            echo "+";
        }else {
            echo "-";
        }
    }
    echo "\n";
}

echo "\n";
echo "\n";

$arr = [4, 5, 6, 8, 7, 9];
sort($arr);
foreach ($arr as $key => $value) {
    $bilang = 
}

print_r($arr);
?>