<!DOCTYPE html>
<html>
<head>
    
    <title>Página de Login</title>
    <link rel="stylesheet" type="text/css" href="/Login/css/LoginStyle.css">
</head>
<body>
    <div class="login-card">
        <div class="title-box">
            <h1>LP-Enterprise</h1>
        </div>
        <p></p>
        <form method="post" action="login.php">
            <label for="username" class="left-align">Nome de Usuário:</label>
            <input type="text" name="username" id="username" required class="login-label">

            <label for="password" class="left-align">Senha:</label>
            <input type="password" name="password" id="password" required class="login-label">

            <input type="submit" value="Login">
        </form>
    </div>
    
</body>
</html>
