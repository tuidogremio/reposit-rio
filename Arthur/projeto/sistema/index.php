<?php
session_start();
if (isset($_SESSION['logado']) && $_SESSION['logado'] === true) {
    header('Location: inicio.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="Login">
    <h1>Login</h1>
    <form action="verifica_login.php" method="POST">
        <input type="text" name="usuario" placeholder="Usuário" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
