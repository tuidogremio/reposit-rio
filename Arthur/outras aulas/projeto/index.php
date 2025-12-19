<?php
session_start();
$error = "";

if (isset($_POST["enviar"])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($user == 'Arthur' && $pass == '123') {
        $_SESSION['logado'] = true;
        header("Location: inicio.php");
        exit;
    } else {
        $error = "Usuário ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        
        <h2>Login</h2>
        <form action="" method="post">
            <input type="text" name="user" placeholder="Usuário" required>
            <input type="password" name="pass" placeholder="Senha" required>
            <button name="enviar" type="submit" class="full-btn">Entrar</button>
            <?php if ($error) echo "<p class='error'>$error</p>"; ?>
        </form>
</body>
</html>
