<?php 

    $stmt = $pdo->prepare("SELECT * FROM predio");
    $stmt->execute();

    $resultado = $stmt;

    if(!$resultado){

        echo "<script> alert('Não foi possivel fazer o selecionamento');window.location.href='index.php'; </script>";

    }

?>