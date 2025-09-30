<?php
session_start();
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    echo "<script>alert('Acesso negado. Faça login primeiro.'); window.location.href='index.php';</script>";
    exit;
}
