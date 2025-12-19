<?php
session_start();
if (!isset($_SESSION['logado'])) {
    echo "<script> alert('Faça login,por favor');
        window.location.href='index.php'; </script>";
    exit;
}
