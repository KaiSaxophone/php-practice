<?php

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        if (($i * $j) % 2 === 1) {
            echo $i * $j . ' ';
        } else {
            echo '[E] ';
        }
    }
    echo "\n";
}

?>