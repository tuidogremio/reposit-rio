<?php
session_start();

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

if ($usuario === 'Arthur' && $senha === '123') {
    $_SESSION['logado'] = true;
    header('Location: inicio.php');
    exit;
} else {
    echo "<script>alert('Usuário ou senha incorretos!'); window.location.href='index.php';</script>";
}
