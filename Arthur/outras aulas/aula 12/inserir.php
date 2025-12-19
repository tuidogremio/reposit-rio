<?php

require "conexao.php";

if(isset($_POST['enviar'])){

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    if(empty(trim($nome))){
    echo "<script> alert('Campo Nome em branco');window.location.href='inserir.php'; </script>";
    exit;
    }
    if(empty(trim($idade))){
    echo "<script> alert('Campo Idade em branco');window.location.href='inserir.php'; </script>";
    exit;
    }

    $stmt = $pdo->prepare("INSERT INTO exemplo (nome, idade) VALUES (:nome, :idade)");
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":idade", $idade);
    $stmt->execute();

    echo "<script> alert('Informações cadastradas com sucesso');window.location.href='inserir.php'; </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="container"> 
        <form method="post">
        <div class="row">
            <label>Nome</label>
            <input type="text" name="nome">
        </div>
        <div class="row">
            <label>Idade</label>
            <input type="text" name="idade">
        </div>
        <div class="row">
            <button type="submit" name="enviar">Enviar</button>
        </div>
        </form>
    </div>

</body>
</html>