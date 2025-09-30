<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $nascimento = $_POST['nascimento'];
    $sexo = $_POST['sexo'];
    $estado_civil = $_POST['estado_civil'];
    $renda = $_POST['renda'];

    echo "<h1>Cliente Cadastrado com Sucesso!</h1>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>CPF:</strong> $cpf</p>";
    echo "<p><strong>Data de Nascimento:</strong> $nascimento</p>";
    echo "<p><strong>Sexo:</strong> $sexo</p>";
    echo "<p><strong>Estado Civil:</strong> $estado_civil</p>";
    echo "<p><strong>Renda Mensal:</strong> R$ $renda</p>";
}
?>
