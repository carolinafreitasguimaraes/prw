<?php
$soma=0;
 $l = intval(fgets(STDIN));
 $op = (fgets(STDIN));
 for ($ln=0; $ln<12; $ln++){
    for ($cl=0; $cl<12; $cl++){
        $tabela[$ln][$cl] = floatval(fgets(STDIN));
    }
 }
 for ($cl=0; $cl<12; $cl++){
    $soma+=$tabela[$l][$cl];
}
if ($op=="M"){
    $soma=$soma/12;
}
echo number_format($soma,1,"."," ")."\n";
 ?>