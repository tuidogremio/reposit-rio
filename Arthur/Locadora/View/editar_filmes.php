<?php

    require_once "../Conexao/conexao.php";
    require "../Controller/Action_SQL.php";
    require "../Model/Filmes.php";

    //Recebe o id e coloca em variavel
    $id_recebido = $_GET['id'];

    //Instrução de selecionar com id
    $nova_selecao = new Action_SQL;
    $requisicao = $nova_selecao->selecionar_id($id_recebido);
    $resultado = $requisicao->fetch(PDO::FETCH_ASSOC);

    //Instrução de inserir
    $novo_filme_editado = new Livros;

    //Recebe as informações
    if(isset($_POST['editar'])){

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
            echo "<script> alert('Campo Nome do livro em branco');window.location.href='../View/cadastrar.php'; </script>"; 
            exit;
        }
        if(empty(trim($descricao))){
            echo "<script> alert('Campo descrição em branco');window.location.href='../View/cadastrar.php'; </script>";
            exit; 
        }
        if(empty(trim($alugado))){
            echo "<script> alert('Campo Alugado em branco');window.location.href='../View/cadastrar.php'; </script>"; 
            exit;
        }
        if(empty(trim($quem_alugou))){
            echo "<script> alert('Campo Quem alugou em branco');window.location.href='../View/cadastrar.php'; </script>";
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
        $novo_filme_editado->setDescricao($descricao);
        $novo_filme_editado->setAlugado($alugado);
        $novo_filme_editado->setQuem_alugou($quem_alugou);
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

        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align: center; margin-bottom: 3%;">Editar Livros</h1>
            </div>
        </div>
        <form method="post">
            <div class="row justify-content-center" style="margin-bottom: 3%;">
                <div class="col-md-6">
                    <label>Nome do Livro (Edição)</label>
                    <input type="text" class="form-control" name="filme"
                    value="<?=htmlspecialchars($resultado['filme'])?>">
                </div>
                <div class="col-md-6">
                    <label>Descrição (Edição)</label>
                    <input type="text" class="form-control" name="descricao" value="<?=htmlspecialchars($resultado['descricao'])?>">
                </div>
            </div>
            <div class="row justify-content-center" style="margin-bottom: 3%;">
                <div class="col-md-4">
                    <label>quem_alugou (Edição)</label>
                    <input type="text" class="form-control" name="quem_alugou"
                    value="<?=htmlspecialchars($resultado['quem_alugou'])?>">
                </div>
                <div class="col-md-4">
                    <label>Classificação (Edição)</label>
                    <input type="text" class="form-control" name="alugado"
                    value="<?=htmlspecialchars($resultado['alugado'])?>">
                </div>
                <div class="col-md-4">
                    <label>ano (Edição)</label>
                    <input type="text" class="form-control" name="ano"
                    value="<?=htmlspecialchars($resultado['ano'])?>">
                </div>
            </div>
            <div class="row justify-content-center" style="margin-bottom: 3%;">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary"style="width: 100%" name="editar">Editar livro</button>
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
    if($novo_filme_editado->getfilme() != "" &&
       $novo_filme_editado->getdescricao() != "" &&
       $novo_filme_editado->getalugado() != "" &&
       $novo_filme_editado->getquem_alugou() != "" &&
       $novo_filme_editado->getano() != ""){

        //Chama a função para inserir no banco
        $nova_edicao = new Action_SQL;
        $nova_edicao->editar(
            $id_recebido,
            $novo_filme_editado->getfilme(),
            $novo_filme_editado->getdescricao(),
            $novo_filme_editado->getalugado(),
            $novo_filme_editado->getquem_alugou(),
            $novo_filme_editado->getano());
       }

?>