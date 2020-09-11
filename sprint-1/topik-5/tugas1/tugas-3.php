<?php
$kali = [2, 3, 4, 5, 6, 7, 8, 9];
function perkalian($a) {
    global $kali;
    foreach ($kali as $value) {
        $perkalian = $value*$a;
        echo $perkalian."\n";
    }
}
perkalian(3);
?>