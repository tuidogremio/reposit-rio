<?php 

  require_once "../Conexao/conexao.php";
  require "../Controller/Action_SQL.php";
  require "../Model/Livros.php";

    $novo_livro = new Livros;

    if(isset($_POST['../View/cadastrar.php'])){

        $nome_livro = $_POST['nome_livro'];
        $descricao = $_POST['descricao'];
        $classificacao = $_POST['classificacao'];
        $genero = $_POST['genero'];
        $referencias = $_POST['referencias'];

        if(empty(trim($nome_livro))){
            echo "<script> alert('Campo Nome do Livro em branco');window.location.href='../View/cadastrar.php.php'; </script>"; 
            exit;
        }

        if(empty(trim($descricao))){
            echo "<script> alert('Campo Descrição em branco');window.location.href='../View/cadastrar.php.php'; </script>"; 
            exit;
        }

        if(empty(trim($classificacao))){
            echo "<script> alert('Campo Classificação em branco');window.location.href='../View/cadastrar.php.php'; </script>"; 
            exit;
        }

        if(empty(trim($genero))){
            echo "<script> alert('Campo Genero em branco');window.location.href='../View/cadastrar.php.php'; </script>"; 
            exit;
        }

        if(empty(trim($referencias))){
            echo "<script> alert('Campo Referencias em branco');window.location.href='../View/cadastrar.php.php'; </script>"; 
            exit;
        }

        $novo_livro->setNome_Livro($nome_livro);
        $novo_livro->setDescricao($descricao);
        $novo_livro->setClassificacao($classificacao);
        $novo_livro->setGenero($genero);
        $novo_livro->setReferencias($referencias);
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

    <title>Home</title>
  </head>
  <body>

    

    <div class="container">

        <?php require "../Includes/topo.php"; ?>
               
        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align: center; margin-bottom: 3%;">Cadastrar Livros</h1>
            </div>
        </div>
        <form method="post">
            <div class="row justify-content-center" style="margin-bottom: 3%;">
                <div class="col-md-6">
                    <label>Nome do Livro</label>
                    <input type="text" class="form-control" name="nome_livro">
                </div>
                <div class="col-md-6">
                    <label>Descrição</label>
                    <input type="text" class="form-control" name="descricao">
                </div>
            </div>
            <div class="row justify-content-center" style="margin-bottom: 3%;">
                <div class="col-md-4">
                    <label>Classificação</label>
                    <input type="text" class="form-control" name="classificacao">
                </div>
                <div class="col-md-4">
                    <label>genero</label>
                    <input type="text" class="form-control" name="genero">
                </div>
                <div class="col-md-4">
                    <label>Referencias</label>
                    <input type="text" class="form-control" name="referencias">
                </div>
            </div>
            <div class="row justify-content-center" style="margin-bottom: 3%;">
                <div class="col-md-12"> 
                    <button type="submit" class="btn btn-primary"style="width: 100%" name="../View/cadastrar.php">../View/cadastrar.php</button>
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

<?php

    
    if($novo_livro->getNome_Livro() != "" && 
        $novo_livro->getDescricao() != "" &&
        $novo_livro->getClassificacao() != "" &&
        $novo_livro->getGenero() != "" &&
        $novo_livro->getReferencias() != ""){

            //Chama a função para inqserir no banco
            $nova_insercao = new Action_SQL;
            $nova_insercao->../View/cadastrar.php(
                $novo_livro->getNome_Livro(),
                $novo_livro->getDescricao(),
                $novo_livro->getClassificacao(),
                $novo_livro->getGenero(),
                $novo_livro->getReferencias()); 

        }

?>