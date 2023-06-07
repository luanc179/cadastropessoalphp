<?php
 include_once "./connect/conexaocasa.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $validUsername = "usuario";
    $validPassword = "12345";
    
    if ($username == $validUsername && $password == $validPassword) {
 
        header("Location: ./home.php");
        exit();
    } else {
        echo "Nome de usuário ou senha incorretos.";
    }
}
?>