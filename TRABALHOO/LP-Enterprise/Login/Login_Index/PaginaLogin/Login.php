<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    
    if ($username === "Lucas" && $password === "123") {
        echo "Login bem-sucedido!";
    } else {
        echo "Nome de usuário ou senha incorretos. Tente novamente.";
    }
}
?>
