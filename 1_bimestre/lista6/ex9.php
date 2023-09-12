<?php

// Lê o valor de N
$n = intval(fgets(STDIN));

// Lê os elementos do vetor X
$x = array_map('intval', explode(' ', fgets(STDIN)));

// Inicializa o menor valor e sua posição como o primeiro elemento do vetor
$menor = $x[0];
$posicao = 0;

// Percorre os elementos do vetor a partir do segundo
for ($i = 1; $i < $n; $i++) {
    // Se o elemento atual for menor que o menor valor encontrado até agora,
    // atualiza o menor valor e sua posição
    if ($x[$i] < $menor) {
        $menor = $x[$i];
        $posicao = $i;
    }
}

// Imprime o resultado
echo "Menor valor: $menor\n";
echo "Posicao: $posicao\n";

?>