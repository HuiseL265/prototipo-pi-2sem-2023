<?php

    if(isset($_POST['submit']))
    {
      //  print_r('Nome: ' . $_POST['nome']);
      //  print_r('<br>');
      //  print_r('E-mail: ' . $_POST['email']);
      // print_r('<br>');
      // print_r('Senha: ' . $_POST['senha']);

      include_once('config.php');

      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      $result = mysqli_query($conexao, "INSERT INTO cadastro(nome,email,senha)
      VALUES ('$nome','$email','$senha')");
    }

?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conect Jovem | Login</title>
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>
<section class="section-formulario">
        <div class="container">
            <form action="cadastro.php" method="POST">
                <h1>CADASTRE-SE E FAÇA PARTE DESTA CONEXÃO</h1>
                <P>"Junte-se a nós e faça parte da conexão que impulsiona o seu futuro profissional!"</P>
                <div class="juncao-input-nome-email">
                    <div class="input-single">
                        <input type="text" name="nome" id="nome-box" class="input" required>
                        <label for="nome-box">Nome completo</label>
                    </div>
    
                    <div class="input-single">
                        <input type="email" name="email" id="email-box" class="input" required>
                        <label for="email-box">E-mail</label>
                    </div>
                </div>
                <div class="input-single">
                        <input type="password" name="senha" id="senha-box" class="input" required>
                        <label for="senha-box">Senha</label>
                    </div>

                <div class="btns">
                    <div id="btn-voltar">
                        <a href="index.html"><button type="button" class="btn-saiba-mais">Voltar</button></a>
                    </div>
                    <div id="btn-enviar">
                        <input type="submit" name="submit" id="submit" value="Cadastrar">
                    </div>
                </div>
            </form>
        </div>
    </section>

</body>
</html>

