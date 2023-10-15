<?php

    if(isset($_POST['submit']))
    {
      //  print_r('Nome: ' . $_POST['nome']);
      //  print_r('<br>');
      //  print_r('E-mail: ' . $_POST['email']);
      //  print_r('<br>');
      //  print_r('Mensagem: ' . $_POST['Mensagem']);

      include_once('config.php');

      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $mensagem = $_POST['mensagem'];

      $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,mensagem) 
      VALUES ('$nome','$email','$mensagem')");
    }

?>
<!DOCTYPE html>

<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Conexão Solidária</title>
    <link rel="stylesheet" href="css/cabecalho.css">
    <link rel="stylesheet" href="css/contato.css">
</head>
<body>
    <section class="section-formulario">
        <div class="container">
            <form action="contato.php" method="POST">
                <h1>FAÇA PARTE DESSA CONEXÃO</h1>
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
                        <input type="telefone" name="telefone" id="telefone-box" class="input" required>
                        <label for="telefone-box">Telefone para contato</label>
                    </div>

                <div class="input-single" id="input-box-maior">
                    <textarea type="text" name="mensagem" id="mensagem-box" class="input" required></textarea>
                    <label for="mensagem-box">Vem se conectar!</label>
                </div>

                <div class="btns">
                    <div id="btn-voltar">
                        <a href="index.html"><button type="button" class="btn-saiba-mais">Voltar</button></a>
                    </div>
                    <div id="btn-enviar">
                        <input type="submit" name="submit" id="submit" value="Conectando-se">
                    </div>
                </div>
            </form>
        </div>
    </section>
    
</body>

</html>