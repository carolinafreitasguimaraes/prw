<?php
    for ($i = 0; $i < 10; $i++){
        $x[$i] = intval(fgets(STDIN));
    }

    for ($i = 0; $i < 10; $i++) {
        if ($x[$i] <= 0) {
            $x[$i] = 1;
        }
    }
    for ($i = 0; $i < 10; $i++) {
        echo "X[$i] = " . $x[$i] . "\n";
    }
?>