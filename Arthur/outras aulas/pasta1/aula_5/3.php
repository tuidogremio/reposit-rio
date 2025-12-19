<!DOCTYPE html>
<html lang="pt-br">
    
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <div class="container">
        <h1 style="text-align: center; margin-top: 35px;">Cadastro Fornecedor</h1>
  </head>
  <body>
    <div class="container">
        <form method="post">
            <div class="row">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="col-md-6">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" name="Email" >
                </div>
            </div>
            <div class="row">
            <div class="col-md-2">
                    <label for="exampleInputEmail1">Telefone</label>
                    <input type="text" class="form-control" name="Telefone">
                </div>
                <div class="col-md-5">
                    <label for="exampleInputEmail1">Celular</label>
                    <input type="text" class="form-control" name="Celular" >
                </div>
                <div class="col-md-8">
                    <label for="exampleInputEmail1">Sexo</label>
                    <input type="text" class="form-control" name="Sexo" >
                </div> 
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="exampleInputEmail1">Bairro</label>
                    <input type="text" class="form-control" name="bairro">
                </div>
                <div class="col-md-6">
                    <label for="exampleInputEmail1">Cidade</label>
                    <input type="text" class="form-control" name="cidade" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <input class="form-check-input" type="checkbox" value="" name="termos">
                    <label class="form-check-label" for="defaultCheck1">Aceito os termos oferecidos</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2">
                    <button type="submit" name="enviar" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

<?php
    if(isset($_POST["enviar"])){

        //Recebendo variaveis do html via post
        if($_POST["nome"]){ //Checa se a variavel foi recebida
            $nome = $_POST["nome"];
        }else{
            echo "<script> alert('Campo nome em branco');
            window.location.href='1.1.php'; </script>";
        }
        if($_POST["idade"]){
            $idade = $_POST["idade"];
        }else{
            echo "<script> alert('Campo idade em branco');
            window.location.href='1.1.php'; </script>";
        }
        if($_POST["indentidade"]){
            $indentidade = $_POST["indentidade"];
        }
        else{
            echo "<script> alert('Campo indentidade em branco');
            window.location.href='1.1.php'; </script>";
        }
        if($_POST["cep"]){
            $cep = $_POST["cep"];
        }else{
            echo "<script> alert('Campo CEP em branco');
            window.location.href='1.1.php'; </script>";
        }
        if($_POST["bairro"]){
            $bairro = $_POST["bairro"];
        }else{
            echo "<script> alert('Campo bairro em branco');
            window.location.href='1.1.php'; </script>";
        }
        if($_POST["cidade"]){
            $cidade = $_POST["cidade"];
        }else{
            echo "<script> alert('Campo cidade em branco');
            window.location.href='1.1.php'; </script>";
        }

        if(isset($_POST["termos"])){
            $termos = "Aceitei os termos";
        }else{
            echo "<script> alert('Por favor, aceite nossos termos');
            window.location.href='1.1.php'; </script>";
        }

        echo ("Nome: " . $nome . "<br>" .
             "Idade: " . $idade . "<br>" .
             "Indentidade: " . $indentidade . "<br>" .
             "CEP: " . $cep . "<br>" .
             "Bairro: " . $bairro . "<br>" .
             "Cidade: " . $cidade . "<br>" .
             "Termos: " . $termos . "<br>");

    }else{
        echo "";
    }
    
?>