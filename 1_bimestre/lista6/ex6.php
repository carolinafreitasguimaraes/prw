<?php
$T = (int) fgets(STDIN);

$N = array();
$pos = 0;

for ($i = 0; $i < 1000; $i++) {
    $N[$i] = $pos;
    $pos++;
    if ($pos == $T) {
        $pos = 0;
    }
}

for ($i = 0; $i < 1000; $i++) {
    echo "N[$i] = " . $N[$i] . "\n";
}
?>