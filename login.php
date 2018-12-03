<?php

  if ($_POST) {
    session_start();
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $validaSenha = password_verify($senha, $_SESSION["senha"]);

    if ($validaSenha === true && $_SESSION["email"] === $email) {
      header("location:exito.php");
    } else {
      echo "Seu nome de usuário ou senha estão incorretos! <br> Por favor preencha-os novamente";
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form Design</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="loginbox">
        <img src="imagens/avatar.png" alt="avatar_login" class="avatar">
        <h1>Login Here</h1>
        <form action="index.php" method="POST">
            <p>Email</p>
            <input type="text" id="nome" name="email" placeholder="Digite seu email">
            <p>Senha</p>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
            <input type="submit" name="" value="Login">
            <a href="#">Esqueceu sua senha?</a><br>
            <a href="#">Ainda não tem conta?</a> <a href="register.php">Registre-se</a>
        </form>
    </div>


    
</body>
</html>