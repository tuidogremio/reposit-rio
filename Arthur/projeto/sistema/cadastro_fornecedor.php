
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro Fornecedor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="CadastroFornecedor">
    <h1>Cadastro Fornecedor</h1>
    <form method="POST" action="processa_fornecedor.php">
    <div class="container">
        <div class="row">
            <div class="col-md-1">
                <p>Código</p>
                <input type="text" placeholder="10" required>
            </div>
            <div class="col-md-3">
                <label>Nome</label>
                <input type="text" name="nome" placeholder="Nome completo do cliente" required>
            </div>
        </div>
    <div>
            <label>Nome</label>
            <input type="text" name="nome" placeholder="Nome completo do cliente" required>
        </div>
        <div>
            <label>E-mail</label>
            <input type="email" name="email" placeholder="cliente@dominio.com" required>
        </div>
        <div>
            <label>CPF</label>
            <input type="text" name="cpf" placeholder="Só números" required>
        </div>

        <div>
            <label>N° do celular</label>
            <input type="text" name="celular" placeholder="N° do celular" required>
        </div>
        <div>
            <label>N° telefone</label>
            <input type="text" name="telefone" placeholder="N° telefone">
        </div>
        <div>
            <label>CEP</label>
            <input type="text" name="cep" placeholder="ex:8487445" required>
        </div>
        <div>
            <label>Logradouro</label>
            <input type="text" name="logradouro" placeholder="ex: Rua 1400" required>
        </div>

        <div>
            <label>N°</label>
            <input type="text" name="numero" placeholder="N°" required>
        </div>
        <div>
            <label>Bairro</label>
            <input type="text" name="bairro" placeholder="Bairro" required>
        </div>
        <div>
            <label>Cidade</label>
            <input type="text" name="cidade" placeholder="Cidade" required>
        </div>
        <div>
            <label>UF</label>
            <input type="text" name="uf" placeholder="UF" maxlength="2" required>
        </div>

        <div>
            <label>Status</label>
            <select name="status" required>
                <option value="ativado">Ativado</option>
                <option value="desativado">Desativado</option>
            </select>
        </div>

        <div class="full-width">
            <button type="submit" class="submit-btn">Cadastrar</button>
        </div>
    </form>

    <div class="back-link">
        <a href="inicio.php">← Voltar para o início</a>
    </div>
</body>
</html>
