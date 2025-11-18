<?php

    require "conexao.php";

    if(isset($_POST['enviar'])){

        $nome_carro = $_POST['nome_carro'];
        $marca = $_POST['marca'];
        $quanti_portas = $_POST['quanti_portas'];
        $usado = $_POST['usado'];

        if(empty(trim($nome_carro))){
            echo "<script> alert('Campo Nome do Carro em branco');window.location.href='inserir.php'; </script>"; 
            exit;
        }
        if(empty(trim($marca))){
            echo "<script> alert('Campo Marca em branco');window.location.href='inserir.php'; </script>";
            exit; 
        }
        if(empty(trim($quanti_portas))){
            echo "<script> alert('Campo Quantidade de Portas em branco');window.location.href='inserir.php'; </script>"; 
            exit;
        }
        if(empty(trim($usado))){
            echo "<script> alert('Campo usado em branco');window.location.href='inserir.php'; </script>";
            exit; 
        }

        //Preparar uma instrução de SQL
        $stmt = $pdo->prepare("INSERT INTO carros (nome_carro, marca, quanti_portas, usado) VALUES (:nome_carro, :marca, :quanti_portas, :usado)");
        $stmt->bindParam(":nome_carro", $nome_carro);
        $stmt->bindParam(":marca", $marca);
        $stmt->bindParam(":quanti_portas", $quanti_portas);
        $stmt->bindParam(":usado", $usado);
        $stmt->execute();

        //Entrega o valor da variavel stmt para a resultado
        $resultado = $stmt;

        //Valida se é TRUE ou FALSE o resultado do execute
        if($resultado){

            echo "<script> alert('Informações cadastradas com sucesso');window.location.href='inserir.php'; </script>"; 

        }else{

            echo "<script> alert('Não foi possivel cadastrar as informações');window.location.href='inserir.php'; </script>"; 

        }

        

    }

?>