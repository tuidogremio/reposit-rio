<?php

    require_once 'PHPMailer-master/src/PHPMailer.php';
    require_once 'PHPMailer-master/src/SMTP.php';
    require_once 'PHPMailer-master/src/Exception.php';

    if(isset($_POST['mail'])){

        $nome_reme = $_POST['nome_reme'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];
        $email = $_POST['email'];

        if(empty(trim($nome_reme))){
            echo "<script> alert('Campo Nome do remetente em branco');window.location.href='envio_email.php'; </script>";
            exit;
        }
        if(empty(trim($email))){
            echo "<script> alert('Campo Email em branco');window.location.href='envio_email.php'; </script>";
            exit;
        }
        if(empty(trim($assunto))){
            echo "<script> alert('Campo Assunto em branco');window.location.href='envio_email.php'; </script>";
            exit;
        }
        if(empty(trim($mensagem))){
            echo "<script> alert('Campo Mensagem em branco');window.location.href='envio_email.php'; </script>";
            exit;
        }

        // Configurar e enviar o e-mail
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'mail.florestasenegocios.com.br';  
            $mail->SMTPAuth = true;
            $mail->Username = 'sindi@florestasenegocios.com.br';
            $mail->Password = 'sindi123@A';
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->CharSet = 'UTF-8';

            $mail->setFrom('sindi@florestasenegocios.com.br', 'Email para envio de informações');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Teste de email';

                $mail->Body = "
                    <strong>Aqui esta o Nome do remetente</strong>
                    <p>$nome_reme</p>
                    <strong>Aqui esta o assunto</strong>
                    <p>$assunto</p>
                    <strong>Aqui esta a mensagem</strong>
                    <p>$mensagem</p>
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
                    <label for="">Nome do remetente</label>
                    <input type="text" class="form-control" name="nome_reme">
                </div>
                <div class="col-md-4">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="col-md-4">
                    <label for="">Assunto do email</label>
                    <input type="text" class="form-control" name="assunto">
                </div>
            </div>
            <div class="row" style="margin-top: 3%;">
                <div class="col-md-12">
                    <label>Mensagem</label>
                     <textarea class="form-control" name="mensagem" rows="4"></textarea>
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