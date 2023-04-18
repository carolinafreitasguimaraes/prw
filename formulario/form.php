<?php 
// $_GET obtem dado do formulário enviado via GET
// $POST obtem dado do formulário via POST

// nome entre '' deve ser igual ao name do input
// definindo no formulário html

$nome = $_POST['nome'];
$idade = $_POST['idade'];
echo "<h1>$nome</h1>";
echo "<h2>$idade</h2>";
echo "<input value =$idade>";
if(strlen($nome) < 20)
{
    echo "<h3> Nome deve conter no mínimo 20 caracteres</h3>";
}

if($idade > 18){
    echo "<h3> Aluno maior de idade!</h3>";
}
    else{
    echo "<h3>Aluno menor de idade!</h3>";
}
?>
<!-- Código html -->
<a href='form.html'><button>voltar</button></a>
