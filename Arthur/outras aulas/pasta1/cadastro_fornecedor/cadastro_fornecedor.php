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
                 <div class="col-md-1">
                    <label for="exampleInputEmail1">Código</label>
                    <input type="text" class="form-control" name="código">
                </div>
                 <div class="col-md-4">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="col-md-4">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="col-md-3">
                    <label for="exampleInputEmail1">Cpf</label>
                    <input type="text" class="form-control" name="cpf" >
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="exampleInputEmail1">N°do celular</label>
                    <input type="text" class="form-control" name="n°_de_celular">
                </div>
                <div class="col-md-2">
                    <label for="exampleInputEmail1">N°do telefone</label>
                    <input type="text" class="form-control" name="Telefone">
                </div>
                <div class="col-md-2">
                    <label for="exampleInputEmail1">CEP</label>
                    <input type="text" class="form-control" name="cep">
                </div>
                 <div class="col-md-2">
                    <label for="exampleInputEmail1">Logradouro</label>
                    <input type="text" class="form-control" name="logradouro">
                </div>
                <div class="col-md-1">
                    <label for="exampleInputEmail1">N°</label>
                    <input type="text" class="form-control" name="n°" >
                </div>
                <div class="col-md-3">
                    <label for="exampleInputEmail1">Bairro</label>
                    <input type="text" class="form-control" name="bairro" >
                </div> 
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="exampleInputEmail1">Cidade</label>
                    <input type="text" class="form-control" name="cidade">
                </div>
                <div class="col-md-3">
                    <label for="exampleInputEmail1">Uf</label>
                    <input type="text" class="form-control" name="uf" >

                </div>
                <div class="col-md-3">
                    <label for="exampleInputEmail1">Status</label>
                    <input type="text" class="form-control" name="status" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-success">Cadastrar</button>
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

        
        if($_POST["código"]){ //Checa se a variavel foi recebida
            $código = $_POST["código"];
        }else{
            echo "<script> alert('Campo código em branco');
            window.location.href='1.1.php'; </script>";
        }
        if($_POST["nome"]){ 
            $nome = $_POST["nome"];
        }else{
            echo "<script> alert('Campo nome em branco');
            window.location.href='1.1.php'; </script>";
        }
        if($_POST["email"]){
            $email = $_POST["email"];
        }else{
            echo "<script> alert('Campo email em branco');
            window.location.href='1.1.php'; </script>";
        }
        if($_POST["cpf"]){
            $cpf = $_POST["cpf"];
        }
        else{
            echo "<script> alert('Campo cpf em branco');
            window.location.href='1.1.php'; </script>";
        }
        if($_POST["n°.de.celular"]){
            $n°_de_celular = $_POST["n°.de.celular"];
        }else{
            echo "<script> alert('Campo n° de celular em branco');
            window.location.href='1.1.php'; </script>";
        }
        if($_POST["Telefone"]){
            $Telefone = $_POST["Telefone"];
        }else{
            echo "<script> alert('Campo N° de telefone em branco');
            window.location.href='1.1.php'; </script>";
        }
        if($_POST["cep"]){
            $cep = $_POST["cep"];
        }else{
            echo "<script> alert('Campo CEP em branco');
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