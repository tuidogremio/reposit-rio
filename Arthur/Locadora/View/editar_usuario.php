<?php

session_start();
if($_SESSION['logado'] != TRUE){
 echo "<script> alert('Por favor faça o login');window.location.href='../index.php'; </script>"; 


}

?>
<?php

    require_once "../Conexao/conexao.php";
    require "../Controller/Action_SQL.php";
    require "../Model/Usuario.php";

    //Recebe o id e coloca em variavel
    $id_recebido = $_GET['id'];

    //Instrução de selecionar com id
    $nova_selecao = new Action_SQL;
    $requisicao = $nova_selecao->selecionar_id($id_recebido);
    $resultado = $requisicao->fetch(PDO::FETCH_ASSOC);

    //Instrução de inserir
    $novo_usuario_editado = new Usuario;

    //Recebe as informações
    if(isset($_POST['editar'])){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];

        if(empty(trim($nome))){
            echo "<script> alert('Campo Nome do Filme em branco');window.location.href='../View/cadastrar.php'; </script>"; 
            exit;
        }
        if(empty(trim($email))){
            echo "<script> alert('Campo Email em branco');window.location.href='../View/cadastrar.php'; </script>";
            exit; 
        }
        if(empty(trim($senha))){
            echo "<script> alert('Campo Senha em branco');window.location.href='../View/cadastrar.php'; </script>"; 
            exit;
        }
        if(empty(trim($telefone))){
            echo "<script> alert('Campo Telefone em branco');window.location.href='../View/cadastrar.php'; </script>";
            exit; 
        }

        //Chama as funções de armazenamento temporario
        $novo_usuario_editado->setNome($nome);
        $novo_usuario_editado->setEmail($email);
        $novo_usuario_editado->setSenha($senha);
        $novo_usuario_editado->setTelefone($telefone);
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
                <h1 style="text-align: center; margin-bottom: 3%;">Editar Usuario</h1>
            </div>
        </div>
        <form method="post">
            <div class="row justify-content-center" style="margin-bottom: 3%;">
                <div class="col-md-6">
                    <label>Nome do Usuario (Edição)</label>
                    <input type="text" class="form-control" name="nome"
                    value="<?=htmlspecialchars($resultado['nome'])?>">
                </div>
                <div class="col-md-6">
                    <label>Email (Edição)</label>
                    <input type="text" class="form-control" name="email" value="<?=htmlspecialchars($resultado['email'])?>">
                </div>
            </div>
            <div class="row justify-content-center" style="margin-bottom: 3%;">
                <div class="col-md-6">
                    <label>Telefone (Edição)</label>
                    <input type="text" class="form-control" name="telefone"
                    value="<?=htmlspecialchars($resultado['telefone'])?>">
                </div>
                <div class="col-md-6">
                    <label>Senha (Edição)</label>
                    <input type="text" class="form-control" name="senha"
                    value="<?=htmlspecialchars($resultado['senha'])?>">
                </div>
            </div>
            <div class="row justify-content-center" style="margin-bottom: 3%;">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary"style="width: 100%" name="editar">Editar Usuario</button>
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
    if($novo_usuario_editado->getNome() != "" &&
       $novo_usuario_editado->getEmail() != "" &&
       $novo_usuario_editado->getSenha() != "" &&
       $novo_usuario_editado->getTelefone() != "" ){

        //Chama a função para inserir no banco
        $nova_edicao = new Action_SQL;
        $nova_edicao->editar(
            $id_recebido,
            $novo_usuario_editado->getNome(),
            $novo_usuario_editado->getEmail(),
            $novo_usuario_editado->getSenha(),
            $novo_usuario_editado->getTelefone());
       }

?>