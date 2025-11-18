<?php 

    require_once "conexao.php";

    if(isset($_GET['id']) && $_GET['id'] != NULL){

        $id = $_GET['id'];

        $stmt = $pdo->prepare("DELETE FROM predio WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $resultado = $stmt;

        if($resultado){

            echo "<script> alert('Informações deletadas com sucesso');window.location.href='index.php'; </script>";

        }else{

            echo "<script> alert('Erro ao deletar as informações');window.location.href='index.php'; </script>";

        }

    }else{

        echo "<script> alert('Id não foi encontrado');window.location.href='index.php'; </script>";

    }

?>