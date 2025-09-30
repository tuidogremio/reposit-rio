<?php
    if(isset($_POST["enviar"])){//Verifica se houve o envio de informações(click do botao)

    $nome = $_POST['nome']; //Recebe variaveis do html via post
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $sexo = $_POST['sexo'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];

        if(empty($nome)){ //Verifica se ha campos vazios

        echo "<script> alert('Campo nome em branco');
        window.location.href='1.html'; </script>";
    }
        if(empty($email)){ //Verifica se ha campos vazios

        echo "<script> alert('Campo Email em branco');
        window.location.href='1.html'; </script>";
    }
        if(empty($telefone)){ //Verifica se ha campos vazios

        echo "<script> alert('Campo Telefone em branco');
        window.location.href='1.html'; </script>";
    }
        if(empty($celular)){ //Verifica se ha campos vazios

        echo "<script> alert('Campo Celular em branco');
        window.location.href='1.html'; </script>";
    }
        if(empty($sexo)){ //Verifica se ha campos vazios

        echo "<script> alert('Campo Sexo em branco');
        window.location.href='1.html'; </script>";
    }
        if(empty($estado)){ //Verifica se ha campos vazios

        echo "<script> alert('Campo Estado em branco');
        window.location.href='1.html'; </script>";
    }
        if(empty($cidade)){ //Verifica se ha campos vazios

        echo "<script> alert('Campo Cidade em branco');
        window.location.href='1.html'; </script>";
    }
        if(empty($bairro)){ //Verifica se ha campos vazios

        echo "<script> alert('Campo Bairro em branco');
        window.location.href='1.html'; </script>";
    }
        if(empty($numero)){ //Verifica se ha campos vazios

        echo "<script> alert('Campo Numero em branco');
        window.location.href='1.html'; </script>";
    }


    //Imprime as variaveis na tela
    echo ("Nome: " . $nome . "<br>" .
          "Email: " . $email . "<br>" .
          "Telefone: " . $telefone . "<br>" .
          "Celular: " . $celular . "<br>" .
          "Sexo: " . $sexo . "<br>" .
          "Estado: " . $estado . "<br>" .
          "Cidade: " . $cidade . "<br>" .
          "Bairro: " . $bairro . "<br>" .
          "Numero: " . $numero . "<br>");
}
