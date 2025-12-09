<?php

    require_once "../Conexao/conexao.php";
    require "../Controller/Action_SQL.php";
    require "../Model/Livros.php";

    //Recebe o id e coloca em variavel
    $id_recebido = $_GET['id'];

    //Instrução de selecionar com id
    $nova_selecao = new Action_SQL;
    $requisicao = $nova_selecao->selecionar_id($id_recebido);
    $resultado = $requisicao->fetch(PDO::FETCH_ASSOC);

    //Instrução de inserir
    $novo_livro_editado = new Livros;

    //Recebe as informações
    if(isset($_POST['editar'])){

        $nome_livro = $_POST['nome_livro'];
        $descricao = $_POST['descricao'];
        $classificacao = $_POST['classificacao'];
        $genero = $_POST['genero'];
        $referencias = $_POST['referencias'];

        if(empty(trim($nome_livro))){
            echo "<script> alert('Campo Nome do livro em branco');window.location.href='../View/cadastrar.php'; </script>"; 
            exit;
        }
        if(empty(trim($descricao))){
            echo "<script> alert('Campo descrição em branco');window.location.href='../View/cadastrar.php'; </script>";
            exit; 
        }
        if(empty(trim($classificacao))){
            echo "<script> alert('Campo classificação em branco');window.location.href='../View/cadastrar.php'; </script>"; 
            exit;
        }
        if(empty(trim($genero))){
            echo "<script> alert('Campo genero em branco');window.location.href='../View/cadastrar.php'; </script>";
            exit; 
        }
        if(empty(trim($referencias))){
            echo "<script> alert('Campo referencias em branco');window.location.href='../View/cadastrar.php'; </script>";
            exit; 
        }

        //Chama as funções de armazenamento temporario
        $novo_livro_editado->setNome_Livro($nome_livro);
        $novo_livro_editado->setDescricao($descricao);
        $novo_livro_editado->setClassificacao($classificacao);
        $novo_livro_editado->setGenero($genero);
        $novo_livro_editado->setReferencias($referencias);
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
                    <input type="text" class="form-control" name="nome_livro"
                    value="<?=htmlspecialchars($resultado['nome_livro'])?>">
                </div>
                <div class="col-md-6">
                    <label>Descrição (Edição)</label>
                    <input type="text" class="form-control" name="descricao" value="<?=htmlspecialchars($resultado['descricao'])?>">
                </div>
            </div>
            <div class="row justify-content-center" style="margin-bottom: 3%;">
                <div class="col-md-4">
                    <label>Genero (Edição)</label>
                    <input type="text" class="form-control" name="genero"
                    value="<?=htmlspecialchars($resultado['genero'])?>">
                </div>
                <div class="col-md-4">
                    <label>Classificação (Edição)</label>
                    <input type="text" class="form-control" name="classificacao"
                    value="<?=htmlspecialchars($resultado['classificacao'])?>">
                </div>
                <div class="col-md-4">
                    <label>Referencias (Edição)</label>
                    <input type="text" class="form-control" name="referencias"
                    value="<?=htmlspecialchars($resultado['referencias'])?>">
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
    if($novo_livro_editado->getNome_Livro() != "" &&
       $novo_livro_editado->getDescricao() != "" &&
       $novo_livro_editado->getClassificacao() != "" &&
       $novo_livro_editado->getGenero() != "" &&
       $novo_livro_editado->getReferencias() != ""){

        //Chama a função para inserir no banco
        $nova_edicao = new Action_SQL;
        $nova_edicao->editar(
            $id_recebido,
            $novo_livro_editado->getNome_Livro(),
            $novo_livro_editado->getDescricao(),
            $novo_livro_editado->getClassificacao(),
            $novo_livro_editado->getGenero(),
            $novo_livro_editado->getReferencias());
       }

?>