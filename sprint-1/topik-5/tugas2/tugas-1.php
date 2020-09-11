<?php
//LINGKARAN
$lingkaran = function($r):int {
    return 22/7*($r*$r);
};
echo $lingkaran(6);
echo "\n";

//SEGITIGA
$segitiga = function($a, $t):int {
    return ($a*$t)/2;
};
echo $segitiga(10, 5);
echo "\n";

//TRAPESIUM
$trapesium = function($alas1, $alas2, $tinggi){
    return (($alas1*$alas2)*$tinggi)/2;
};
echo $trapesium(18, 6, 10);
echo "\n";
?>