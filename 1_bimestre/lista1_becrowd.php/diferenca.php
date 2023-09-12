<?php
$a = intval(fgets(STDIN));
$b = intval(fgets(STDIN));
$c = intval(fgets(STDIN));
$d = intval(fgets(STDIN));

$resultado = ($a * $b - $c * $d);

echo "DIFERENCA = $resultado" . PHP_EOL;

?>