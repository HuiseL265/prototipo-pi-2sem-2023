<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recebedados</title>
</head>
<body>
<?php
$conexao = mysqli_connect("localhost","root","","formulario_pi_2sem_2023");
// CHECAR CONEXAO
if(!$conexao){
echo"Não conectado";
}
echo"Conectado ao banco!";

//RECUPERAR E VERIFICAR NOME
$nome = $_POST['nome'];
$nome = mysqli_real_escape_string($conexao, $nome);
$sql = "SELECT nome FROM formulario_pi_2sem_2023.usuario WHERE nome='$nome'";
$retorno = mysqli_query($conexao,$sql);

if(mysqli_num_rows($retorno)>0){
echo"USUÁRIO JÁ CADASTRADO!<br>";
}else{

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO formulario_pi_2sem_2023.usuario(nome,email,telefone) values('$nome','$email','$telefone')";
$resultado = myslqi_query($conexao, $sql);
echo">>>USUÁRIO CADASTRADO COM SUCESSO!<BR>";
}





?>
</body>
</html>
