<?php

session_start();
if($_SESSION['logado'] != TRUE){
 echo "<script> alert('Por favor faça o login');window.location.href='../index.php'; </script>"; 


}

?>
<?php

    require_once "../Conexao/conexao.php";
    require "../Controller/Action_SQL_filme.php";
    require "../Model/Filmes.php";

    //Recebe o id e coloca em variavel
    $id_recebido = $_GET['id'];

    //Instrução de selecionar com id
    $nova_selecao = new Action_SQL_filme;
    $requisicao = $nova_selecao->selecionar_id($id_recebido);
    $resultado = $requisicao->fetch(PDO::FETCH_ASSOC);

    //Instrução de inserir
    $novo_filme_editado = new Filmes;

    //Recebe as informações
    if(isset($_POST['editar'])){

        $filme = $_POST['filme'];
        $ano = $_POST['ano'];
        $genero = $_POST['genero'];
        $classificacao = $_POST['classificacao'];
        $diretor = $_POST['diretor'];
        $sinopse = $_POST['sinopse'];
        $status = $_POST['status'];

        if(empty(trim($filme))){
            echo "<script> alert('Campo Nome do livro em branco');window.location.href='../View/cadastrar.php'; </script>"; 
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
        $novo_filme_editado->setFilme($filme);
        $novo_filme_editado->setAno($ano);
        $novo_filme_editado->setGenero($genero);
        $novo_filme_editado->setClassificacao($classificacao);
        $novo_filme_editado->setDiretor($diretor);
        $novo_filme_editado->setSinopse($sinopse);
        $novo_filme_editado->setStatus($status);
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

    <title>Editar</title>
  </head>
  <body>

    

    <div class="container">

        <?php require "../Includes/topo.php"; ?>

        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align: center; margin-bottom: 2%;">Editar Filme</h1>
            </div>
        </div>
        <form method="post">
            <div class="row justify-content-center" style="margin-bottom: 2%;">
                <div class="col-md-5">
                    <label>Nome do Filme</label>
                    <input type="text" class="form-control" name="filme" value="<?=htmlspecialchars($resultado['filme'])?>">
                </div>
                <div class="col-md-2">
                    <label>Ano</label>
                    <input type="text" class="form-control" name="ano" value="<?=htmlspecialchars($resultado['ano'])?>">
                </div>
                <div class="col-md-5">
                    <label>Genero</label>
                    <input type="text" class="form-control" name="genero" value="<?=htmlspecialchars($resultado['genero'])?>">
                </div>
            </div>
            <div class="row justify-content-center" style="margin-bottom: 2%;">
                <div class="col-md-6">
                    <label>Classificação</label>
                    <input type="text" class="form-control" name="classificacao" value="<?=htmlspecialchars($resultado['classificacao'])?>">
                </div>
                <div class="col-md-6">
                    <label>Diretor</label>
                    <input type="text" class="form-control" name="diretor" value="<?=htmlspecialchars($resultado['diretor'])?>">
                </div>
            </div>
            <div class="row justify-content-center" style="margin-bottom: 2%;">
                <div class="col-md-6">
                    <label>Sinopse</label>
                    <input type="text" class="form-control" name="sinopse" value="<?=htmlspecialchars($resultado['sinopse'])?>">
                </div>
                <div class="col-md-6">
                    <label>Status</label>
                    <input type="text" class="form-control" name="status" value="<?=htmlspecialchars($resultado['status'])?>">
                </div>
            </div>
            <div class="row justify-content-center" style="margin-bottom: 2%;">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary"style="width: 100%" name="editar">Editar Filme</button>
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
    if($novo_filme_editado->getFilme() != "" &&
       $novo_filme_editado->getAno() != "" &&
       $novo_filme_editado->getGenero() != "" &&
       $novo_filme_editado->getClassificacao() != "" &&
       $novo_filme_editado->getDiretor() != "" &&
       $novo_filme_editado->getSinopse() != "" &&
       $novo_filme_editado->getStatus() != "" ){

        //Chama a função para inserir no banco
        $nova_edicao = new Action_SQL_filme;
        $nova_edicao->editar(
            $id_recebido,
            $novo_filme_editado->getFilme(),
            $novo_filme_editado->getAno(),
            $novo_filme_editado->getGenero(),
            $novo_filme_editado->getClassificacao(),
            $novo_filme_editado->getDiretor(),
            $novo_filme_editado->getSinopse(),
            $novo_filme_editado->getStatus());
       }

?>