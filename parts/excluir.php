<?php

include_once "conexao.php";
include_once "registro.php";
include_once "table.php";

if(isset($_GET["excluir"])) {
    $numdoc = $_GET['numdoc'];

    $stmt = $conn->prepare("DELETE FROM informacoes WHERE numdoc = ?");
    if(!$stmt) {
        die('Erro no statement: ' . htmlspecialchars($conn->error));
    }
    $stmt->bind_param("s", $numdoc);
    
    $stmt->execute();
    echo '<script> alert ("Excluido com sucesso!"); location.href=("./registro.php")</script>';
    $stmt->close();
    $conn->close();


}