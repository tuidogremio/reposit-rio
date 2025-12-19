<?php

     require "Predios.php";
        $novo_predio = new Predios;

    if(isset($_POST['cadastrar'])){

        $nome_predio = $_POST['nome_predio'];
        $altura_predio = $_POST['altura_predio'];
        $largura_predio = $_POST['largura_predio'];
        $residentes = $_POST['residentes'];
        $obs = $_POST['obs'];
        
        if(empty(trim($nome_predio))){
            echo "<script> alert('Campo Nome predio em branco');window.location.href='predio.php'; </script>";
            exit;
            }
        
        if(empty(trim($altura_predio))){
            echo "<script> alert('Campo Altura predio em branco');window.location.href='predio.php'; </script>";
            exit;
            }

        if(empty(trim($largura_predio))){
            echo "<script> alert('Campo Largura predio em branco');window.location.href='predio.php'; </script>";
            exit;
            }

        if(empty(trim($residentes))){
            echo "<script> alert('Campo Residentes em branco');window.location.href='predio.php'; </script>";
            exit;
            }

        if(empty(trim($obs))){
            echo "<script> alert('Campo Observações em branco');window.location.href='predio.php'; </script>";
            exit;
            }

        $novo_predio->setNomePredio($nome_predio);
        $novo_predio->setAlturaPredio($altura_predio);
        $novo_predio->setLarguraPredio($largura_predio);
        $novo_predio->setResidentes($residentes);
        $novo_predio->setObs($obs);

    }



?>


<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Teste de Classes</title>
  </head>
  <body>
  


    <div class="container">
        <h1 style="text-align: center;">Teste de Classes!</h1>
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <label>Nome do predio</label>
                    <input type="text" class="form-control" name="nome_predio">
                </div>
                <div class="col-md-4">
                    <label>Altura do predio</label>
                    <input type="text" class="form-control" name="altura_predio">
                </div>
                <div class="col-md-4">
                    <label>Largura do predio</label>
                    <input type="text" class="form-control" name="largura_predio">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label>Numero de residentes</label>
                    <input type="text" class="form-control"
                    name="residentes">
                </div>
                <div class="col-md-6">
                    <label>Observações</label>
                    <input type="text" class="form-control"
                    name="obs">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button style="width: 100%; margin-top: 3%;" class="btn btn-warning" name="cadastrar">Cadastrar predio</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php

    if($novo_predio->getNomePredio() != "")
    if($novo_predio->getAlturaPredio() != "")
    if($novo_predio->getLarguraPredio() != "")
    if($novo_predio->getResidentes() != "")
    if($novo_predio->getObs() != ""){

        echo "Nome do predio: " . $novo_predio->getNomePredio() . "<br>" .
            "Altura do predio: " . $novo_predio->getAlturaPredio() . "<br>" .
            "Largura do predio: " . $novo_predio->getLarguraPredio() . "<br>" .
            "Residentes so predio: " . $novo_predio->getResidentes() . "<br>" .
            "Observações sobre o predio: " . $novo_predio->getObs() . "<br>";
    }
    




?>