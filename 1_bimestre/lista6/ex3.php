<?php

// inicializa o vetor A com valores aleatórios entre 0 e 20
for ($i = 0; $i < 100; $i++) {
    $A[$i] = rand(0, 20);
}

// verifica quais posições do vetor possuem valores menores ou iguais a 10 e as armazena em outro vetor B
$j = 0;
for ($i = 0; $i < 100; $i++) {
    if ($A[$i] <= 10) {
        $B[$j] = $i;
        $j++;
    }
}

// imprime as posições e os valores correspondentes do vetor A nas posições armazenadas em B
echo "Posições do vetor A com valores menores ou iguais a 10: ";
for ($i = 0; $i < count($B); $i++) {
    echo $B[$i] . "(" . $A[$B[$i]] . ") ";
}

?>
