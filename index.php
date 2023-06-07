<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./css/style.css">
    <title>Tela de Login</title>
</head>
<body>
    <center>
    <form method="POST" action="processa_login.php">
    <h2>Login</h2>
        <label for="username">Usuário:</label>
        <input type="text" name="username" id="username" required><br><br>
        
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>
    </center>
</body>
</html>