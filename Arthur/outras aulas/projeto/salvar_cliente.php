<?php include('auth.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['nome']) || empty($_POST['cpf']) || empty($_POST['nascimento'])) {
        echo "<script>alert('Preencha todos os campos obrigatórios!'); history.back();</script>";
        exit;
    }

    // Aqui salvaria no banco ou arquivo (simulação)
    echo "<script>alert('Cliente cadastrado com sucesso!'); location.href='inicio.php';</script>";
}
?>
