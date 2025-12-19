<?php

session_start();
if($_SESSION['logado'] != TRUE){
 echo "<script> alert('Por favor faça o login');window.location.href='../index.php'; </script>"; 


}

?>
<?php

    require_once '../PHPMailer-master/src/PHPMailer.php';
    require_once '../PHPMailer-master/src/SMTP.php';
    require_once '../PHPMailer-master/src/Exception.php';
    require "../Controller/Action_SQL.php";
    require_once "../Conexao/conexao.php";
    require "../Model/Usuario.php";

    //Instrução de inserir
    $novo_usuario = new Usuario;

     //Recebe as informações
    if(isset($_POST['mail'])){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];

        if(empty(trim($nome))){
            echo "<script> alert('Campo Nome em branco');window.location.href='../View/cadastrar.php'; </script>"; 
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
        $novo_usuario->setNome($nome);
        $novo_usuario->setEmail($email);
        $novo_usuario->setSenha($senha);
        $novo_usuario->setTelefone($telefone);

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
                    Obrigado por se cadastrar!
                    ";


                // Enviar o e-mail antes de retornar a resposta
                if ($mail->send()) {
                    echo "<script> alert('Email enviado com sucesso');window.location.href='cadastrar_usuario.php'; </script>";
                } else {
                    error_log('Erro ao enviar e-mail: ' . $mail->ErrorInfo);
                }
            } catch (Exception $e) {
                echo "<script> alert('Erro ao enviar o email');window.location.href='cadastrar_usuario.php'; </script>";
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

    <title>Home</title>
  </head>
  <body>

    

    <div class="container">

        <?php require "../Includes/topo.php"; ?>

        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align: center; margin-bottom: 3%;">Cadastro de Usuários</h1>
            </div>
        </div>
        <form method="post">
            <div class="row justify-content-center" style="margin-bottom: 3%;">
                <div class="col-md-6">
                    <label>Nome do Usuário</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="col-md-6">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
            </div>
            <div class="row justify-content-center" style="margin-bottom: 3%;">
                <div class="col-md-6">
                    <label>Senha</label>
                    <input type="password" class="form-control" name="senha">
                </div>
                <div class="col-md-6">
                    <label>Telefone</label>
                    <input type="text" class="form-control" name="telefone">
                </div>
            </div>
            <div class="row justify-content-center" style="margin-bottom: 3%;">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary"style="width: 100%" name="mail">Cadastrar</button>
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

             //Chama as funções de armazenamento temporario
        $novo_usuario->setNome($nome);
        $novo_usuario->setEmail($email);
        $novo_usuario->setSenha($senha);
        $novo_usuario->setTelefone($telefone);

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
                    <p>$email</p>
                    <strong>Aqui esta a email</strong>
                    <p>$senha</p>
                    <strong>Aqui esta a altura</strong>
                    <p>$telefone</p>
                    ";


                // Enviar o e-mail antes de retornar a resposta
                if ($mail->send()) {
                    echo "<script> alert('Email enviado com sucesso');window.location.href='cadastrar_usuario.php'; </script>";
                } else {
                    error_log('Erro ao enviar e-mail: ' . $mail->ErrorInfo);
                }
            } catch (Exception $e) {
                echo "<script> alert('Erro ao enviar o email');window.location.href='cadastrar_usuario.php'; </script>";
            }
    
        
       }

?>