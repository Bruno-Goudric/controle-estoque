<?php
    if($_POST){
    session_start();

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $_SESSION["usuario"] = $nome;
    $_SESSION["senha"] = $senhaHash;

    header("location:login.php");

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form Design</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="loginbox">
        <img src="imagens/avatar.png" alt="avatar_login" class="avatar">
        <h1>Login Here</h1>
        <form action="register.php" method="POST">
            <p>Nome</p>
            <input type="text" name="nome" placeholder="Digite seu nome">
            <p>Email</p>
            <input type="text" id="nome" name="email" placeholder="Digite seu email">
            <p>Senha</p>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
            <input type="submit" name="" value="Login">
            <a href="#">Esqueceu sua senha?</a><br>
            <a href="#">Ainda não tem conta?</a> <a href="register.html">Registre-se</a>
        </form>
    </div>


    
</body>
</html>