<?php include 'verifica_sessao.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Cliente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome do Cliente" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
