<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];


    if ($username === "Lucas" && $password === "456") {
        $_SESSION['usuario'] = $username;
        $_SESSION['nivel_acesso'] = 'chefe';
        header("Location: /Login/SistemaProdutos/Gerenciador_De_Produtos/Trabalho.php"); 
        exit();
    } elseif ($username === "Fulano" && $password === "123") {
        $_SESSION['usuario'] = $username;
        $_SESSION['nivel_acesso'] = 'funcionario';
        header("Location: /Login/SistemaProdutos/Gerenciador_De_Produtos/Trabalho.php"); 
        exit();
    } else {
        
        header('location: HomeTrabalho.php ');
    }
}
?>
