<?php

session_start();
if($_SESSION['logado'] != TRUE){
 echo "<script> alert('Por favor faça o login');window.location.href='../index.php'; </script>"; 


}




?>

<?php

    require_once "../Conexao/conexao.php";
    require "../Controller/Action_SQL.php";


    //Selecionar
    $nova_selecao = new Action_SQL;
    $requisicao = $nova_selecao->selecionar();

    //Excluir
    $nova_exclusao = new Action_SQL;
    if(isset($_POST['excluir'])){

      $id = $_POST['excluir'];

      $nova_exclusao->deletar($id);

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
        
        <h1 style="margin-top: 5%; margin-bottom: 5%; text-align: center;">Bem vindo</h1>

        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME DO LIVRO</th>
                <th scope="col">CLASSIFICAÇÃO</th>
                <th scope="col">GÊNERO</th>
                <th scope="col">REFERENCIAS</th>
                </tr>
            </thead>
            
            <tbody>
                <!--Começa um laço while para contar quanta informação tem no banco-->
                <?php while($row = $requisicao->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                    <!--Imprime cada informação do banco-->
                    <!--th = negrito e td = normal-->
                    <th><?= $row['id']; ?></th>
                    <td><?= $row['nome_livro']; ?></td>
                    <td><?= $row['classificacao']; ?></td>
                    <td><?= $row['genero']; ?></td>
                    <td><?= $row['referencias']; ?></td>
                    <td>
                      <div class="row">
                        <div class="col-md-4">
                          <a href="../View/editar.php?id=<?= $row['id'];?>" class="btn btn-secondary">Editar</a>
                        </div>

                        <div class="col-md-4">
                          <form method="post">
                            <button value="<?= $row['id'];?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar?')" name="excluir">Deletar</button>
                          </form>
                        </div>
                      </div>
                      
                    </td>  
                    </tr>
                <!--//Termina o while aqui-->    
                <?php endwhile; ?>
            </tbody>
            
        </table>
    </div>












    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>