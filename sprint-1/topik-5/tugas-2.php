<?php
//segitiga
function segitiga($a, $t) {
    echo ($a*$t)*1/2;
}
echo "segitiga: ";
segitiga(5, 7);
echo "\n";
//lingkaran
function lingkaran($j) {
    echo 22/7*($j*$j);
}
echo "lingkaran: ";
lingkaran(5);
echo "\n";
//trapesium
function trapesium($a1, $a2, $t) {
    echo 1/2*($a1+$a2)*$t;
}
echo "trapesium: ";
trapesium(4, 10, 5);
echo "\n";
?>