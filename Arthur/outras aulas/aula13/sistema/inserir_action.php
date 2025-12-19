<?php

    require "conexao.php";

    if(isset($_POST['enviar'])){

        $nome_predio = $_POST['nome_predio'];
        $localizacao = $_POST['localizacao'];
        $altura = $_POST['altura'];
        $largura = $_POST['largura'];

        if(empty(trim($nome_predio))){
            echo "<script> alert('Campo Nome do Predio em branco');window.location.href='inserir.php'; </script>"; 
            exit;
        }
        if(empty(trim($localizacao))){
            echo "<script> alert('Campo localização em branco');window.location.href='inserir.php'; </script>";
            exit; 
        }
        if(empty(trim($altura))){
            echo "<script> alert('Campo altura em branco');window.location.href='inserir.php'; </script>"; 
            exit;
        }
        if(empty(trim($largura))){
            echo "<script> alert('Campo largura em branco');window.location.href='inserir.php'; </script>";
            exit; 
        }

        //Preparar uma instrução de SQL
        $stmt = $pdo->prepare("INSERT INTO predio (nome_predio, localizacao, altura, largura) VALUES (:nome_predio, :localizacao, :altura, :largura)");
        $stmt->bindParam(":nome_predio", $nome_predio);
        $stmt->bindParam(":localizacao", $localizacao);
        $stmt->bindParam(":altura", $altura);
        $stmt->bindParam(":largura", $largura);
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