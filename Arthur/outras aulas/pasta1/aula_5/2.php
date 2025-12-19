<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Aula 4</title>
  </head>
  <body>
    <div class="container">
        <h1 style="text-align: center; margin-top: 35px;">Cadastro Fornecedor</h1>
        <form method="post">
            <div class="row">
                <div class="col-md-6">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" name="Nome">
            </div>
            </div>
            <div class="row">
            <div class="col-md-6">    
            <label for="exampleInputEmail1">Email</label>
                <input type="password" class="form-control" name="Email">
            </div>
            </div>
            <div class="row">
                <div class="col-md-6"> 
                <div class="row">
                <label for="exampleInputEmail1">Telefone</label>
                <input type="text" class="form-control" name="Telefone">
            </div>
            </div>
            <div class="row">
                <div class="col-md-6"> 
                <label for="exampleInputEmail1">Celular</label>
                <input type="password" class="form-control" name="Celular">
            </div>
            </div>
            <div class="row">
                <button style="margin-top: 50px; width: 1000px;" type="submit" name="logar" class="btn btn-danger">Logar</button>
            </div>
        </form>
    </div>
    

  






    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

<?php

    if(isset($_POST["logar"])){

        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        //Valida se esta em branco
        if(empty($usuario) || empty($senha)){
            echo "<script> alert('Por favor, preencha os campos');
            window.location.href='1.2.php'; </script>";
        }else{
            if($usuario == "Mauricio" && $senha == "123a"){
                header("Location: 1.1.php");
            }else{
                echo "<script> alert('Usuario ou senha invalido');
                window.location.href='1.2.php'; </script>";
            }

        }

    }

?>