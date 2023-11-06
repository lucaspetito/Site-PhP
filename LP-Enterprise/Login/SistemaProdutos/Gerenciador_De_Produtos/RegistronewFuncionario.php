<?php
session_start();


if (!isset($_SESSION['usuario'])) {
    
    header('Location: /Login/Login_Index/PaginaLogin/Trabalho.php');
    exit();
}

if (!isset($_SESSION['usuario']) || $_SESSION['nivel_acesso'] !== 'chefe') {
    
    // Acesso negado
    echo "Você não tem autorização! <br>";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Meu Site</title>
    <link rel="stylesheet" href="/Login/SistemaProdutos/css/styleprofissional.css">
    
</head>

<body>
    <div class="sidebar">
        <ul>
            <li><a href="AddArquivo.php">Adicionar Produto</a></li>
            <li><a href="RegistronewFuncionario.php">Registro</a></li>
            <li><a href="Trabalho.php">HOME</a></li>
            <li><a href="/Login/Login_Index/PaginaLogin/HomeTrabalho.php">Sair</a></li>

            
        </ul>
        <img src="/Login/SistemaProdutos/Imagem/LP.png" alt="Logo">
    </div>

    <div class="content">
    
        <h2>Registro Funcionário</h2>
        <form action="PHPRegistronewFuncionario.php" method="post">
            <label for="nome_funcionario">Nome do Funcionário:</label>
            <input type="text" id="nome_funcionario" name="nome_funcionario" required>
            <br>
            <p></p>
            <label for="data_entrada">Data de Entrada:</label>
            <input type="date" id="data_entrada" name="data_entrada" required>
            <br>
            <p></p>
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required>
            <br>
            <p></p>
            <input type="submit" value="Adicionar Produto">
        </form>
        
    </div>
    
</body>
</html>