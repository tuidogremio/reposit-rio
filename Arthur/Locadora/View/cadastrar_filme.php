<?php

    require_once "../Conexao/conexao.php";
    require "../Controller/Action_SQL.php";
    require "../Model/Filmes.php";

    //Instrução de inserir
    $novo_filme = new Filmes;

     //Recebe as informações
    if(isset($_POST['inserir'])){

        $filme = $_POST['filme'];
        $descricao = $_POST['descricao'];
        $alugado = $_POST['alugado'];
        $quem_alugou = $_POST['quem_alugou'];
        $ano = $_POST['ano'];
        $genero = $_POST['genero'];
        $classificacao = $_POST['classificacao'];
        $diretor = $_POST['diretor'];
        $sinopse = $_POST['sinopse'];
        $status = $_POST['status'];

        if(empty(trim($filme))){
            echo "<script> alert('Campo Nome do Filme em branco');window.location.href='../View/cadastrar.php'; </script>"; 
            exit;
        }
        if(empty(trim($descricao))){
            echo "<script> alert('Campo Descrição em branco');window.location.href='../View/cadastrar.php'; </script>";
            exit; 
        }
        if(empty(trim($alugado))){
            echo "<script> alert('Campo Alugado em branco');window.location.href='../View/cadastrar.php'; </script>"; 
            exit;
        }
        if(empty(trim($quem_alugou))){
            echo "<script> alert('Campo Quem Alugou em branco');window.location.href='../View/cadastrar.php'; </script>";
            exit; 
        }
        if(empty(trim($ano))){
            echo "<script> alert('Campo Ano em branco');window.location.href='../View/cadastrar.php'; </script>";
            exit; 
        }
        if(empty(trim($genero))){
            echo "<script> alert('Campo Genero em branco');window.location.href='../View/cadastrar.php'; </script>";
            exit; 
        }
        if(empty(trim($classificacao))){
            echo "<script> alert('Campo Classificação em branco');window.location.href='../View/cadastrar.php'; </script>";
            exit; 
        }
        if(empty(trim($diretor))){
            echo "<script> alert('Campo Diretor em branco');window.location.href='../View/cadastrar.php'; </script>";
            exit; 
        }
        if(empty(trim($sinopse))){
            echo "<script> alert('Campo Sinopse em branco');window.location.href='../View/cadastrar.php'; </script>";
            exit; 
        }
        if(empty(trim($status))){
            echo "<script> alert('Campo Status em branco');window.location.href='../View/cadastrar.php'; </script>";
            exit; 
        }

        //Chama as funções de armazenamento temporario
        $novo_filme->setFilme($filme);
        $novo_filme->setDescricao($descricao);
        $novo_filme->setAlugado($alugado);
        $novo_filme->setQuem_alugou($quem_alugou);
        $novo_filme->setAno($ano);
        $novo_filme->setGenero($genero);
        $novo_filme->setClassificacao($classificacao);
        $novo_filme->setDiretor($diretor);
        $novo_filme->setSinopse($sinopse);
        $novo_filme->setStatus($status);
    
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
                <h1 style="text-align: center; margin-bottom: 2%;">Cadastro de Filmes</h1>
            </div>
        </div>
        <form method="post">
            <div class="row justify-content-center" style="margin-bottom: 2%;">
                <div class="col-md-6">
                    <label>Nome do Filme</label>
                    <input type="text" class="form-control" name="filme">
                </div>
                <div class="col-md-6">
                    <label>Descrição</label>
                    <input type="text" class="form-control" name="descricao">
                </div>
            </div>
            <div class="row justify-content-center" style="margin-bottom: 2%;">
                <div class="col-md-4">
                    <label>Alugado</label>
                    <input type="text" class="form-control" name="alugado">
                </div>
                <div class="col-md-4">
                    <label>Quem Alugou</label>
                    <input type="text" class="form-control" name="quem_alugou">
                </div>
                <div class="col-md-4">
                    <label>Ano</label>
                    <input type="text" class="form-control" name="ano">
                </div>
            </div>
            <div class="row justify-content-center" style="margin-bottom: 2%;">
                <div class="col-md-4">
                    <label>Genero</label>
                    <input type="text" class="form-control" name="genero">
                </div>
                <div class="col-md-4">
                    <label>Classificação</label>
                    <input type="text" class="form-control" name="classificacao">
                </div>
                <div class="col-md-4">
                    <label>Diretor</label>
                    <input type="text" class="form-control" name="diretor">
                </div>
            </div>
            <div class="row justify-content-center" style="margin-bottom: 2%;">
                <div class="col-md-6">
                    <label>Sinopse</label>
                    <input type="text" class="form-control" name="sinopse">
                </div>
                <div class="col-md-6">
                    <label>Status</label>
                    <input type="text" class="form-control" name="status">
                </div>
            </div>
            <div class="row justify-content-center" style="margin-bottom: 2%;">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary"style="width: 100%" name="inserir">Cadastrar Filme</button>
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

    //Usa as funções do model para inserir no banco
    if($novo_filme->getFilme() != "" &&
       $novo_filme->getDescricao() != "" &&
       $novo_filme->getAlugado() != "" &&
       $novo_filme->getQuem_alugou() != "" &&
       $novo_filme->getAno() != "" &&
       $novo_filme->getGenero() != "" &&
       $novo_filme->getClassificacao() != "" &&
       $novo_filme->getDiretor() != "" &&
       $novo_filme->getSinopse() != "" &&
       $novo_filme->getStatus() != "" ){

        //Chama a função para inserir no banco
        $nova_insercao = new Action_SQL;
        $nova_insercao->inserir(
            $novo_filme->getFilme(),
            $novo_filme->getDescricao(),
            $novo_filme->getAlugado(),
            $novo_filme->getQuem_alugou(),
            $novo_filme->getAno(),
            $novo_filme->getGenero(),
            $novo_filme->getClassificacao(),
            $novo_filme->getDiretor(),
            $novo_filme->getSinopse(),
            $novo_filme->getStatus());
       }

?>