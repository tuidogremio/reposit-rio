<?php

require_once 'PHPMailer-master/src/PHPMailer.php';
require_once 'PHPMailer-master/src/SMTP.php';
require_once 'PHPMailer-master/src/Exception.php';
require "Controller/Action_SQL.php";
require "Conexao/conexao.php";


$nova_pessoa = new Action_SQL;    

if (isset($_POST['mail'])) {

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $signo = $_POST['signo'];

    if (empty(trim($nome))) {
        echo "<script> alert('Campo Nome em branco');window.location.href='envio_email.php'; </script>";
        exit;
    }
    if (empty(trim($idade))) {
        echo "<script> alert('Campo Idade em branco');window.location.href='envio_email.php'; </script>";
        exit;
    }
    if (empty(trim($email))) {
        echo "<script> alert('Campo E-mail em branco');window.location.href='envio_email.php'; </script>";
        exit;
    }
    if (empty(trim($altura))) {
        echo "<script> alert('Campo Altura em branco');window.location.href='envio_email.php'; </script>";
        exit;
    }
    if (empty(trim($peso))) {
        echo "<script> alert('Campo Peso em branco');window.location.href='envio_email.php'; </script>";
        exit;
    }
     if (empty(trim($signo))) {
        echo "<script> alert('Campo Signo em branco');window.location.href='envio_email.php'; </script>";
        exit;
    }

    
    $nova_pessoa->inserir($nome, $idade, $email, $altura, $peso, $signo);

     // Configurar e enviar o e-mail
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';  
            $mail->SMTPAuth = true;
            $mail->Username = 'aml.game.09@gmail.com';
            $mail->Password = 'xivs jxku qayw qqlt';
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->CharSet = 'UTF-8';

            $mail->setFrom('aml.game.09@gmail.com', 'Email para envio de informações');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Teste de email';

                $mail->Body = "
                    <strong>Aqui esta o nome</strong>
                    <p>$nome</p>
                    <strong>Aqui esta o idade</strong>
                    <p>$idade</p>
                    <strong>Aqui esta a email</strong>
                    <p>$email</p>
                    <strong>Aqui esta a altura</strong>
                    <p>$altura</p>
                    <strong>Aqui esta a peso</strong>
                    <p>$peso</p>
                    <strong>Aqui esta a signo</strong>
                    <p>$signo</p>
                    ";


                // Enviar o e-mail antes de retornar a resposta
                if ($mail->send()) {
                    echo "<script> alert('Email enviado com sucesso');window.location.href='envio_email.php'; </script>";
                } else {
                    error_log('Erro ao enviar e-mail: ' . $mail->ErrorInfo);
                }
            } catch (Exception $e) {
                echo "<script> alert('Erro ao enviar o email');window.location.href='envio_email.php'; </script>";
            }

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

    <title>Email</title>
  </head>
  <body>

    <div class="container">
        <h1 style="text-align: center;">Envio de email de satisfação</h1>

        <form action="" method="post">

            <div class="row" style="margin-top: 3%;">
                <div class="col-md-4">
                    <label for="">Nome</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="col-md-4">
                    <label for="">Idade</label>
                    <input type="text" class="form-control" name="idade">
                </div>
                <div class="col-md-4">
                    <label for="">E-mail</E-mail></label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="col-md-4">
                    <label for="">Altura</E-mail></label>
                    <input type="text" class="form-control" name="altura">
                </div>
                <div class="col-md-4">
                    <label for="">Peso</E-mail></label>
                    <input type="text" class="form-control" name="peso">
                </div>
                <div class="col-md-4">
                    <label for="">Signo</E-mail></label>
                    <input type="text" class="form-control" name="signo">
                </div>
            </div>
           
            <div class="row" style="margin-top: 3%;">
                <div class="col-md-12">
                    <button style="width: 100%;" class="btn btn-warning" name="mail">Mandar email</button>
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