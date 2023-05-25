<?php
include_once "conexao.php";
include_once "registro.php";

if (isset($_POST["cadastrar"])) :
    $nome = $_POST["nome"];
    $tpdoc = $_POST["tpdoc"];
    $numdoc = $_POST["numdoc"];
    $destino = $_POST["destino"];
    $post = $_POST["post"];
    $nomeguerra = $_POST["nomeguerra"];
    $entrada = $_POST["entrada"];
    $saida = $_POST["saida"];

    $stmt = $conn->prepare("INSERT INTO informacoes
   (nome, tpdoc, numdoc, destino, post, nomeguerra, entrada, saida) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $nome, $tpdoc, $numdoc, $destino, $post, $nomeguerra, $entrada, $saida);


    $stmt->execute();
    echo '<script> alert ("Cadastrado com sucesso!"); location.href=("../index.php")</script>';
    $stmt->close();
    $conn->close();

endif;
