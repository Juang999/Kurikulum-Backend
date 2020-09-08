<?php 
$n=8;
for ($i=1; $i<$n; $i++) { 
    if ($i==2) {
        continue;
    }
    elseif ($i==4) {
        continue;
    }
    elseif ($i==6) {
        continue;
    }

echo $i.', ';
}
?>