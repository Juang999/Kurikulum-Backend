<?php

echo "nomor yang akan diulang: ";
$nomor = trim(fgets(STDIN));

var_dump($nomor);

for ($i=1; $i <= $nomor; $i++) { 
    echo "nomor ke-".$i." : ";
    $input[] = trim(fgets(STDIN));
}
print_r($input);
//MEAN
$a = count($input);
$b = array_sum($input)/$a;
echo "\n";
echo "nilai MEAN adalah : ".$b."\n";
//MEDIAN
sort($input);
$median = round($input[$a/2]);
echo "nomor MEDIAN adalah :";
print_r($median);
echo "\n";
//MODUS
$MODUS = array_count_values($input);
arsort($MODUS);
foreach ($MODUS as $key => $value) {
    if ($value == max($MODUS)) {
        echo "\n";
        echo "modus : [$key], dengan banyaknya data $value";
        echo "\n";
    }
}
rsort($input);
for ($i=0; $i < 3; $i++) { 
    $maks[] = $input[$i];
    echo "nilai tertinggi : ";
   
}
print_r($maks);
sort($input);
for ($i=0; $i < 3; $i++) { 
    $min[] = $input[$i];
    echo "nilai terendah : ";
}
print_r($min);
?>