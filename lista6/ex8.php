<?php
// Inicializa os dois vetores como vazios
$impar = [];
$par = [];

// Lê os 15 valores da entrada
for ($i = 0; $i < 15; $i++) {
    $valor = (int) fgets(STDIN);
    if ($valor % 2 == 0) {
        // Se o valor é par, adiciona no vetor par
        $par[] = $valor;
        if (count($par) == 5) {
            // Se o vetor par encheu, imprime e reinicializa
            for ($j = 0; $j < 5; $j++) {
                printf("par[%d] = %d\n", $j, $par[$j]);
            }
            $par = [];
        }
    } else {
        // Se o valor é ímpar, adiciona no vetor ímpar
        $impar[] = $valor;
        if (count($impar) == 5) {
            // Se o vetor ímpar encheu, imprime e reinicializa
            for ($j = 0; $j < 5; $j++) {
                printf("impar[%d] = %d\n", $j, $impar[$j]);
            }
            $impar = [];
        }
    }
}

// Imprime o que restou nos dois vetores
for ($i = 0; $i < count($impar); $i++) {
    printf("impar[%d] = %d\n", $i, $impar[$i]);
}
for ($i = 0; $i < count($par); $i++) {
    printf("par[%d] = %d\n", $i, $par[$i]);
}
?>