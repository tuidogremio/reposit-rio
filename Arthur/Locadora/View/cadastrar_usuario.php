<?php

    require_once "../Conexao/conexao.php";
    require "../Controller/Action_SQL.php";
    require "../Model/Usuario.php";

    //Instrução de inserir
    $novo_usuario = new Usuario;

     //Recebe as informações
    if(isset($_POST['inserir'])){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];

        if(empty(trim($nome))){
            echo "<script> alert('Campo Nome do livro em branco');window.location.href='../View/cadastrar.php'; </script>"; 
            exit;
        }
        if(empty(trim($email))){
            echo "<script> alert('Campo descrição em branco');window.location.href='../View/cadastrar.php'; </script>";
            exit; 
        }
        if(empty(trim($senha))){
            echo "<script> alert('Campo classificação em branco');window.location.href='../View/cadastrar.php'; </script>"; 
            exit;
        }
        if(empty(trim($telefone))){
            echo "<script> alert('Campo telefone em branco');window.location.href='../View/cadastrar.php'; </script>";
            exit; 
        }

        //Chama as funções de armazenamento temporario
        $novo_usuario->setnome($nome);
        $novo_usuario->setemail($email);
        $novo_usuario->setsenha($senha);
        $novo_usuario->settelefone($telefone);
    
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
                <h1 style="text-align: center; margin-bottom: 3%;">Cadastro de Livros</h1>
            </div>
        </div>
        <form method="post">
            <div class="row justify-content-center" style="margin-bottom: 3%;">
                <div class="col-md-6">
                    <label>Nome do Livro</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="col-md-6">
                    <label>Descrição</label>
                    <input type="text" class="form-control" name="email">
                </div>
            </div>
            <div class="row justify-content-center" style="margin-bottom: 3%;">
                <div class="col-md-6">
                    <label>telefone</label>
                    <input type="text" class="form-control" name="telefone">
                </div>
                <div class="col-md-6">
                    <label>Classificação</label>
                    <input type="text" class="form-control" name="senha">
                </div>
            </div>
            <div class="row justify-content-center" style="margin-bottom: 3%;">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary"style="width: 100%" name="inserir">Cadastrar</button>
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
    if($novo_usuario->getNome() != "" &&
       $novo_usuario->getEmail() != "" &&
       $novo_usuario->getSenha() != "" &&
       $novo_usuario->getTelefone() != "" ){

        //Chama a função para inserir no banco
        $nova_insercao = new Action_SQL;
        $nova_insercao->inserir(
            $novo_usuario->getNome(),
            $novo_usuario->getEmail(),
            $novo_usuario->getSenha(),
            $novo_usuario->getTelefone());
       }

?>