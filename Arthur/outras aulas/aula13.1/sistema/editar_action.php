<?php

    require "conexao.php";

    if($_GET['id'] !=NULL && isset($_GET['id'])){

    $id = $_GET['id'];

    if(isset($_POST['editar'])){

        $nome_carro = $_POST['nome_carro'];
        $marca = $_POST['marca'];
        $quanti_portas = $_POST['quanti_portas'];
        $usado = $_POST['usado'];

        if(empty(trim($nome_carro))){
            echo "<script> alert('Campo Nome do Carro em branco');window.location.href='editar.php'; </script>"; 
            exit;
        }
        if(empty(trim($marca))){
            echo "<script> alert('Campo Marca em branco');window.location.href='editar.php'; </script>";
            exit; 
        }
        if(empty(trim($quanti_portas))){
            echo "<script> alert('Campo Quantidade de Portas em branco');window.location.href='editar.php'; </script>"; 
            exit;
        }
        if(empty(trim($usado))){
            echo "<script> alert('Campo Usado em branco');window.location.href='editar.php'; </script>";
            exit; 
        }

        //Prepara a instrução de editar
        $smtm = $pdo->prepare("UPDATE carros SET nome_carro = :nome_carro, marca = :marca, quanti_portas = :quanti_portas, usado = :usado WHERE id = :id");
        $smtm->bindParam(":id" , $id);
        $smtm->bindParam(":nome_carro" , $nome_carro);
        $smtm->bindParam(":marca" , $marca);
        $smtm->bindParam(":quanti_portas" , $quanti_portas);
        $smtm->bindParam(":usado" , $usado);
        $smtm->execute();
    
         //Entrega o valor da variavel stmt para a resultado
        $resultado = $smtm;

        //Valida se é TRUE ou FALSE o resultado do execute
        if($resultado){

            echo "<script> alert('Informações editadas com sucesso');window.location.href='index.php'; </script>"; 

        }else{

            echo "<script> alert('Não foi possivel editar as informações');window.location.href='index.php'; </script>"; 

        }
    }

}else{

     echo "<script> alert('id não encontrado');window.location.href='index.php'; </script>"; 

}


?>