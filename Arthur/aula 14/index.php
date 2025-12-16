<?php

    //Inicia sessão
    session_start();
    require "Conexao/conexao.php";

    //Realiza uma introdução para selecionar usuarios
    $verifica_login = $pdo->prepare("SELECT * FROM usuarios");
    $verifica_login->execute();

    $resultado = $verifica_logar;

    //Verifica se foi possivel selecionar
    if($resultado == FALSE){

        echo "<script> alert('Erro ao selecionar');window.location.href=''; </script>";

    }

    if(isset($_POST['logar'])){

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if(empty(trim($email))){
            echo "<script> alert('Campo email em branco');window.location.href='index.php'; </script>";
            exit;
        }
        if(empty(trim($senha))){
            echo "<script> alert('Campo senha em branco');window.location.href='index.php'; </script>";
            exit;
        }

        //
        $comparar = $resultado->fetch(PDO::FETCH_ASSOC);

        if($email == $comparar['email'] && $senha == $comparar['senha']){

               
            $_SESSION['logado'] == TRUE;
            header("Location: View/home.php");


        }else{

            echo "<script> alert('Email ou senha incorretos');window.location.href='index.php'; </script>";
            exit;

        }

       
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>

    <div class="container">
        <h1 style="text-align: center; margin-top: 3%;">Login</h1>

        <form action="" method="post">

            <div class="row" style="margin-top: 3%;">
                <div class="col-md-12">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
            </div>
            <div class="row" style="margin-top: 3%;">
                <div class="col-md-12">
                    <label for="">Senha</label>
                    <input type="password" class="form-control" name="senha">
                </div>
            </div>
            <div class="row" style="margin-top: 3%;">
                <div class="col-md-12">
                    <button style="width: 100%;" class="btn btn-secondary" name="logar">Cadastrar novo imovel</button>
                </div>
            </div>

        </form>
    </div>















    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>