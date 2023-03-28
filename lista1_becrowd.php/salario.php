<?php

$numeroFuncionario = fgets(STDIN);
$horasTrabalhadas = fgets(STDIN);
$valorHorasTrabalhadas = round (fgets(STDIN), 2);

$salario = number_format($horasTrabalhadas * $valorHoraTrabalhaddas, '2', '.', '')
;

echo "NUMBER = $numeroFuncionario ";
echo "SALARY = U$ $salario " . PHP_EOL;

?>