<?php 
// $_GET obtem dado do formulário enviado via GET
// $POST obtem dado do formulário via POST

// nome entre '' deve ser igual ao name do input
// definindo no formulário html

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$acao = $_POST['acao'];
echo "<h1>$numero1</h1>";
echo "<h2>$numero2</h2>";

if( $acao = 'adicao'){
   $resultado= $numero1 + $numero2 ;
}
else( $acao = 'subtracao'){
    $resultado= $numero1 - $numero2 ;
 }
 else( $acao = 'multiplicacao'){
    $resultado= $numero1 * $numero2 ;
 }
 else( $acao = 'divisao'){
    $resultado= $numero1 / $numero2 ;
 }
?>
<!-- Código html -->
<a href='form.html'><button>voltar</button></a>
