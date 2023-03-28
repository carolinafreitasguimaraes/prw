<?php

// lê o número de casos de teste T
$T = intval(fgets(STDIN));

// processa cada caso de teste
for ($i = 0; $i < $T; $i++) {
    // lê o valor de N para o caso de teste atual
    $N = intval(fgets(STDIN));
    
    // calcula o N-ésimo termo da série de Fibonacci
    $fibonacci = array(0, 1);
    for ($j = 2; $j <= $N; $j++) {
        $fibonacci[$j] = $fibonacci[$j - 1] + $fibonacci[$j - 2];
    }
    
    // imprime o resultado
    echo "Fib(" . $N . ") = " . $fibonacci[$N] . "\n";
}

?>