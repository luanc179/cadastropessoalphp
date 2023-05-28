<?php
  include_once "../connect/conexaocasa.php";

if (isset($_POST["cadastrar2"])) :
    $post_vis = $_POST["post_vis"];
    $nome = $_POST["nome2"];
    $idtmil = $_POST["idtmil"];
    $om = $_POST["om"];
    $entrada = $_POST["entrada2"];
    $saida = $_POST["saida2"];
    $vtr = $_POST["vtr"];
    $eb_placa = $_POST["eb_placa"];
    $post = $_POST["post2"];
    $nomeguerra = $_POST["nomeguerra2"];
    $destino = $_POST["destino2"];

    $stmt2 = $conn->prepare("INSERT INTO cadastro.miloom
   (post_vis, nome, idtmil, om, entrada, saida, vtr, eb_placa, post, nomeguerra, destino) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt2->bind_param("sssssssssss", $post_vis, $nome,  $idtmil ,$om, $entrada, $saida, $vtr, $eb_placa, $post, $nomeguerra, $destino);


    $stmt2->execute();
    echo '<script> alert ("Cadastrado com sucesso!"); location.href=("./cadastro_milOOM.php")</script>';
    $stmt2->close();
    $conn->close();

endif;
