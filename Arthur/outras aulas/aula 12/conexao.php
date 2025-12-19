<?php

//Variaveis para conexão do servidor
$usuario = "root";
$senha = "";
$banco = "exemplo";
$servidor = "localhost";
static $pdo;

try{

//Realiza conexão com banco de dados e entrega para a variavel pdo
$pdo = new PDO("mysql:host=$servidor;dbname=$banco;charset=utf8", $usuario, $senha);
//Exibe mensagens caso haja problemas
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){

//Mostra uma mensagem de erro e informa o erro
echo "Erro ao conectar ao banco de dados: " . $e->getMessage();

}

?>