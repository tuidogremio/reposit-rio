<?php
  require_once "conexao.php";
  require_once "selecionar.php"; 
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

        <?php require "topo.php"; ?>
        
        <h1 style="margin-top: 5%; margin-bottom: 5%; text-align: center;">Bem vindo usuario</h1>

        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME DO CARRO</th>
                <th scope="col">MARCA</th>
                <th scope="col">QUANTIDADE DE PORTAS</th>
                <th scope="col">USADO</th>
                </tr>
            </thead>
            
            <tbody>
                <!--Começa um laço while para contar quanta informação tem no banco-->
                <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                    <!--Imprime cada informação do banco-->
                    <!--th = negrito e td = normal-->
                    <th><?= $row['id']; ?></th>
                    <td><?= $row['nome_carro']; ?></td>
                    <td><?= $row['marca']; ?></td>
                    <td><?= $row['quanti_portas']; ?></td>
                    <td><?= $row['usado']; ?></td>
                    <td>
                      <a href="editar.php?id=<?= $row['id'];?>" class="btn btn-secondary">Editar</a>
                      <a href="deletar.php?id=<?= $row['id'];?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar?')">Deletar</a>
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