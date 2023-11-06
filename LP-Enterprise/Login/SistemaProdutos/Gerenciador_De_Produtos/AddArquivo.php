<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    
    header('Location: /Login/Login_Index/PaginaLogin/Trabalho.php');
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
    
        <h2>Adicionar Produto</h2>
        <form action="PhpAddArquivo.php" method="post">
            <label for="nome_produto">Nome do Produto:</label>
            <input type="text" id="nome_produto" name="nome_produto" required>
            <br>
            <p></p>

            <label for="data_validade">Data de Validade:</label>
            <input type="date" id="data_validade" name="data_validade" required>
            <br>
            <p></p>

            <label for="preco">Preço:</label>
            <input type="text" id="preco" name="preco" required>
            <br>
            <p></p>

            <input type="submit" value="Adicionar Produto">
        </form>
        
    </div>
    
</body>
</html>