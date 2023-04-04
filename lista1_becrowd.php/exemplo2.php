<?php
 $alunos = array ("Murilo", "Cássio", "Ricardo","João");
 print_r($alunos); 
 echo "<br>";
 echo "Quantidade de elementos :".count($alunos)."<br>";
 echo "<hr>";
 sort($alunos);
 for($x = 0; $x < count($alunos); $x++)
 {
    echo "Aluno na posição $x: ".$alunos[$x]."<br>";
    echo "quantidade de caracters: ".strlen($alunos[$x])."<br>";
    echo "<hr>";
 }

 $indice = array_search("Murilo",$alunos);
 if($indice === false)
   echo "Elemento não encontrado! <br>";
 else
   echo "Elemento entrado na posição $indice! <br>"
 ?>