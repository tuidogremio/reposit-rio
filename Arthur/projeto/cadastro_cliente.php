<?php include('auth.php'); 
// Bloco PHP para processar o formulário
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta dos dados do formulário
    $nome = $_POST['nome'] ?? '';
    $cpf = $_POST['cpf'] ?? '';
    $nascimento = $_POST['nascimento'] ?? '';
    $sexo = $_POST['sexo'] ?? '';
    $estado_civil = $_POST['estado_civil'] ?? '';
    $renda = $_POST['renda'] ?? '';

    // Aqui você faria a validação e a inserção no banco de dados (Ex: MySQL)
    
    // Simulação de sucesso
    $mensagem = "Cadastro de **$nome** recebido com sucesso! (Dados não foram salvos em um banco de dados real).";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Clientes</title>
    
    <style>
        /* Importação de uma fonte básica, similar à da imagem */
        body {
            font-family: Arial, sans-serif;
            background-color: #34c734ff;
            color: #ff0000ff;
            margin: 0;
            padding: 20px;
        }

        /* Container principal para centralizar e dar largura ao formulário */
        .container {
            max-width: 1200px; /* Largura que permite a visualização das 3 colunas */
            margin: 40px auto;
            padding: 30px;
            border-radius: 8px;
        }

        /* Estilo dos Títulos */
        .titulo-principal {
            text-align: center;
            font-size: 28px;
            margin-bottom: 30px;
        }

        .titulo-secao {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
            /* Na imagem, não há uma linha, mas mantive a estrutura anterior para clareza */
            /* border-bottom: 1px solid #eee; */
            padding-bottom: 5px;
        }

        /* Layout dos campos em colunas (Usando Flexbox) */
        .linha-campos {
            display: flex;
            gap: 30px; /* Espaço entre as colunas */
            margin-bottom: 20px;
        }

        .campo-grupo {
            flex: 1; /* Faz com que todos os campos-grupo tenham a mesma largura */
            display: flex;
            flex-direction: column;
        }

        /* Para o campo "Nome" que ocupa toda a largura */
        .campo-grupo.completo {
            flex: 0 0 100%; /* Ocupa 100% da largura, não encolhe nem cresce */
            margin-bottom: 20px;
        }

        /* Oculta o campo vazio usado para alinhar a coluna da Renda Mensal */
        .campo-grupo.vazio {
            flex: 1; /* Ocupa o espaço da 3ª coluna */
            visibility: hidden;
        }

        /* Estilo para Labels */
        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: 500;
        }

        /* Estilo para Inputs de Texto, Data e Select */
        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* Garante que o padding não aumente a largura total */
            font-size: 14px;
            /* Estilo para Placeholder */
            color: #777;
        }

        /* Estilo para Select (dropdown) para fixar a altura com os inputs */
        select {
            appearance: none; /* Remove estilo padrão do SO */
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url('data:image/svg+xml;charset=US-ASCII,<svg xmlns="http://www.w3.org/2000/svg" width="292.4" height="292.4" viewBox="0 0 292.4 292.4"><path fill="#000000" d="M287.1 79.4l-14.3-14.3c-1.9-1.9-4.1-2.9-6.4-2.9h-246.3c-2.3 0-4.5 1-6.4 2.9l-14.3 14.3c-1.9 1.9-2.9 4.1-2.9 6.4v133.2c0 2.3 1 4.5 2.9 6.4l14.3 14.3c1.9 1.9 4.1 2.9 6.4 2.9h246.3c2.3 0 4.5-1 6.4-2.9l14.3-14.3c1.9-1.9 2.9-4.1 2.9-6.4v-133.2c0-2.3-1-4.5-2.9-6.4z"/></svg>'); /* Seta customizada */
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 10px;
            padding-right: 30px; /* Espaço para a seta */
        }


        /* Estilo para o grupo de Radio Buttons (Sexo) */
        .campo-grupo.radio-group {
             /* Preenche o espaço para alinhar a coluna com os outros campos */
             padding-top: 30px; 
        }
        .campo-grupo.radio-group label {
            /* Retira o padding superior da label principal para alinhar */
            margin-bottom: 0;
        }

        .radio-opcoes {
            display: flex;
            gap: 20px;
            align-items: center;
            margin-top: 5px; /* Espaçamento para alinhar com os outros inputs */
        }

        .radio-opcoes label {
            font-weight: normal;
            margin-bottom: 0;
            margin-left: 5px; /* Espaço entre o radio e o texto */
            cursor: pointer;
        }

        /* Estilo do Botão */
        .btn-cadastrar {
            background-color: rgb(255, 0, 255);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            margin-top: 20px;
            transition: background-color 0.3s;
            width: 100%;
        }

        .btn-cadastrar:hover {
            background-color: #0056b3;
        }

        /* Estilo da mensagem de sucesso (PHP) */
        .alerta-sucesso {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
            text-align: center;
        }

        /* Media Query para Responsividade em telas menores */
        @media (max-width: 768px) {
            .linha-campos {
                flex-direction: column; /* Coloca os campos em coluna verticalmente */
                gap: 15px;
            }
            .campo-grupo.radio-group {
                padding-top: 0;
            }
            .campo-grupo.vazio {
                display: none;
            }
            .container {
                margin: 20px;
                padding: 20px;
            }
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
        <a href="cadastro_fornecedor.php">Cadastro Fornecedor</a>
        <a href="sobre.php">Sobre</a>
        <a href="sair.php">Sair</a>

    </nav>
    <div class="container">
        <h1 class="titulo-principal">Cadastro Clientes</h1>
            
        <h2 class="titulo-secao">Dados pessoais</h2>

        <?php if (!empty($mensagem)): ?>
            <div class="alerta-sucesso"><?php echo $mensagem; ?></div>
        <?php endif; ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            
            <div class="campo-grupo completo">
                <label for="nome">Nome do cliente</label>
                <input type="text" id="nome" name="nome" placeholder="Nome do cliente" required>
            </div>

            <div class="linha-campos">
                <div class="campo-grupo">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00">
                </div>
                
                <div class="campo-grupo">
                    <label for="nascimento">Data de nascimento</label>
                    <input type="text" id="nascimento" name="nascimento" placeholder="dd/mm/aaaa" onfocus="(this.type='date')" onblur="(this.type='text')">
                </div>
                
                <div class="campo-grupo radio-group">
                    <label>Sexo</label>
                    <div class="radio-opcoes">
                        <input type="radio" id="masculino" name="sexo" value="Masculino">
                        <label for="masculino">Masculino</label>
                        <input type="radio" id="feminino" name="sexo" value="Feminino">
                        <label for="feminino">Feminino</label>
                    </div>
                </div>
            </div>

            <div class="linha-campos">
                <div class="campo-grupo">
                    <label for="estado_civil">Estado Civil</label>
                    <select id="estado_civil" name="estado_civil">
                        <option value="Solteiro">Solteiro</option>
                        <option value="Casado">Casado</option>
                        <option value="Divorciado">Divorciado</option>
                        <option value="Viuvo">Viúvo</option>
                    </select>
                </div>
                
                <div class="campo-grupo">
                    <label for="renda">Renda mensal</label>
                    <input type="text" id="renda" name="renda" placeholder="0,00">
                </div>

                <div class="campo-grupo vazio"></div>
            </div>
            
            <button type="submit" class="btn-cadastrar">Cadastrar</button>

        </form>
    </div>
</body>
</html>
