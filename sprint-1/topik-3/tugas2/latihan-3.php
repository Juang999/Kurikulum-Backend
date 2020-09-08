<?php
for ($i= 1; $i <= 9; $i++) { 
    for ($j=1; $j <= 9; $j++) { 
        if ($i + $j == 10 || $i == $j || $i > $j && $i + $j > 10 || $i < $j && $i + $j < 10) {
            echo "&nbsp+&nbsp";
        } else {
            echo "&nbsp&nbsp-&nbsp";
        }
    }
    echo "<br>";
}
?>