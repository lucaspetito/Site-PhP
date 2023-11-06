<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    
    header('Location: /Login/Login_Index/PaginaLogin/Trabalho.php');
    exit();
}

if (isset($_SESSION['usuario'])) {
    
    $nomeUsuario = $_SESSION['usuario'];
    echo "<h1 id='mensagem'>Bem-vindo, $nomeUsuario!</h1>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" href="/Login/SistemaProdutos/css/styleprofissional.css">
    
</head>

<script>
        // nome de usuário da mensagem
        var nomeUsuario = "<?php echo isset($_SESSION['usuario']) ? $_SESSION['usuario'] : ''; ?>";

        // mensagem de boas-vindas
        var mensagem = document.getElementById('mensagem');
        mensagem.textContent = "Bem-vindo, " + nomeUsuario + "!";

        // temporizador para ocultar a mensagem após 2 segundos
        setTimeout(function() {
            mensagem.style.display = 'none';
        }, 2000);
</script>

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
        <h1>Sistema de Gerenciamento de Produtos</h1>
        
    </div>
</body>
</html>