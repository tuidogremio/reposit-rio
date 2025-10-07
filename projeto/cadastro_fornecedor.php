<?php include('auth.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Fornecedor</title>
    <style>
        body {
            background-color: #34c734ff;
            color: #ff0000ff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 30px;
            font-size: 32px;
        }

        form {
            max-width: 100%;
            margin: 30px auto;
            
            padding: 30px;
            border-radius: 8px;
            color: white;
        }

        .row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .md {
            flex: 1;
            min-width: 180px;
            margin: 10px;
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
            color: white;
        }

        input, select {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            color: black;
        }

        input[readonly] {
            background-color: #e0e0e0;
            color: #666;
        }

        .form-actions {
            text-align: right;
            margin-top: 30px;
        }

        .form-actions button {
            background-color: rgb(255, 0, 255);
            color: white;
            border: none;
            padding: 12px 24px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        nav {
            text-align: center;
            margin-top: 30px;
        }

        nav a {
            margin: 0 15px;
            color: rgb(255, 0, 255);
            text-decoration: none;
            font-weight: bold;
        }
        
    </style>
</head>
<body>
<nav>
        <a href="inicio.php">Inicio</a>
        <a href="cadastro_cliente.php">Cadastro Cliente</a>
        <a href="sobre.php">Sobre</a>
        <a href="sair.php">Sair</a>

    </nav>
<h2>Cadastro Fornecedor</h2>

<form action="salvar_fornecedor.php" method="POST">
    <!-- Linha 1 -->
    <div class="row">
        <div class="md">
            <label for="codigo">Código</label>
            <input type="text" name="código" placeholder="32" required>
        </div>
        <div class="md">
            <label for="nome">Nome</label>
            <input type="text" name="nome" placeholder="Nome completo do cliente" required>
        </div>
        <div class="md">
            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="cliente@dominio.com" required>
        </div>
        <div class="md">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" placeholder="Só números" required>
        </div>
    </div>

    <!-- Linha 2 -->
    <div class="row">
        <div class="md">
            <label for="celular">Nº do celular</label>
            <input type="text" name="celular" placeholder="Nº do celular">
        </div>
        <div class="md">
            <label for="telefone">Nº telefone</label>
            <input type="text" name="telefone" placeholder="Nº telefone">
        </div>
        <div class="md">
            <label for="cep">CEP</label>
            <input type="text" name="cep" placeholder="ex:8487445">
        </div>
        <div class="md">
            <label for="logradouro">Logradouro</label>
            <input type="text" name="logradouro" placeholder="ex: Rua 1400">
        </div>
    </div>

    <!-- Linha 3 -->
    <div class="row">
        <div class="md">
            <label for="numero">Nº</label>
            <input type="text" name="numero" placeholder="Nº">
        </div>
        <div class="md">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" placeholder="Bairro">
        </div>
        <div class="md">
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" placeholder="Cidade">
        </div>
        <div class="md">
            <label for="uf">UF</label>
            <input type="text" name="uf" placeholder="UF">
        </div>
    </div>

    <!-- Linha 4 -->
    <div class="row">
        <div class="md" style="max-width: 200px;">
            <label for="status">Status</label>
            <select name="status">
                <option value="Ativado">Ativado</option>
                <option value="Desativado">Desativado</option>
            </select>
        </div>
    </div>

    <div class="form-actions">
        <button type="submit">Cadastrar</button>
    </div>
    
</form>

</body>
</html>
