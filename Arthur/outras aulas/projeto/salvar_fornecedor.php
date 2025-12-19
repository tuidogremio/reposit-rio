<?php include('auth.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['cpf'])) {
        echo "<script>alert('Preencha todos os campos obrigatórios!'); history.back();</script>";
        exit;
    }

    // Simula salvar
    echo "<script>alert('Fornecedor cadastrado com sucesso!'); location.href='inicio.php';</script>";
}
?>

