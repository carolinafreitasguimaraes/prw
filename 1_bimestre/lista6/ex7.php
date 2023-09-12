<?php
// Lê o valor X
$X = (float) fgets(STDIN);

// Inicializa o vetor N com o valor de X na primeira posição
$N = [$X];

// Preenche o restante do vetor com a metade do valor anterior
for ($i = 1; $i < 100; $i++) {
    $N[] = $N[$i-1] / 2;
}

// Imprime o vetor N
for ($i = 0; $i < 100; $i++) {
    printf("N[%d] = %.4f\n", $i, $N[$i]);
}
?>
Explicação: o código começa lendo o valor X a partir da entrada padrão. Em seguida, cria-se um array N com o valor de X na primeira posição. Depois, preenche-se o restante do array com a metade do valor anterior, utilizando um laço for. Por fim, o código imprime o vetor N, utilizando um outro laço for e a função printf() para formatar a saída de acordo com o enunciado do problema.





