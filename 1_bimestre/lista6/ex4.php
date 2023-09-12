<?php

// lê os 20 valores do vetor N
for ($i = 0; $i < 20; $i++) {
    $N[$i] = intval(fgets(STDIN));
}

// realiza a troca dos elementos do vetor N
for ($i = 0; $i < 10; $i++) {
    $temp = $N[$i];
    $N[$i] = $N[19 - $i];
    $N[19 - $i] = $temp;
}

// imprime o vetor modificado
for ($i = 0; $i < 20; $i++) {
    echo "N[" . $i . "] = " . $N[$i] . "\n";
}

?>