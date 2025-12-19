<?php

    require "conexao.php";

    if($_GET['id'] !=NULL && isset($_GET['id'])){

    $id = $_GET['id'];

    if(isset($_POST['editar'])){

        $nome_predio = $_POST['nome_predio'];
        $localizacao = $_POST['localizacao'];
        $altura = $_POST['altura'];
        $largura = $_POST['largura'];

        if(empty(trim($nome_predio))){
            echo "<script> alert('Campo Nome do Predio em branco');window.location.href='editar.php'; </script>"; 
            exit;
        }
        if(empty(trim($localizacao))){
            echo "<script> alert('Campo localização em branco');window.location.href='editar.php'; </script>";
            exit; 
        }
        if(empty(trim($altura))){
            echo "<script> alert('Campo altura em branco');window.location.href='editar.php'; </script>"; 
            exit;
        }
        if(empty(trim($largura))){
            echo "<script> alert('Campo largura em branco');window.location.href='editar.php'; </script>";
            exit; 
        }

        //Prepara a instrução de editar
        $smtm = $pdo->prepare("UPDATE predio SET nome_predio = :nome_predio, localizacao = :localizacao, altura = :altura, largura = :largura WHERE id = :id");
        $smtm->bindParam(":id" , $id);
        $smtm->bindParam(":nome_predio" , $nome_predio);
        $smtm->bindParam(":localizacao" , $localizacao);
        $smtm->bindParam(":altura" , $altura);
        $smtm->bindParam(":largura" , $largura);
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