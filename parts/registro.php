<?php
include_once "conexao.php";
include_once "table.php";

include_once "conexao.php";

$consulta = "SELECT * FROM informacoes;";

$con = $conn->query($consulta) or die($mysqli->error);

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/style.css">
  <title>REGISTRO</title>
</head>

<body>
<form action="../index.php">
    <input type="submit" class="btn" value="Voltar" />
</form> <br><br>
  <h1>REGISTRO</h1><br><br>
  <table border="1">
    <tr>
      <td>Nome</td>
      <td>Tipo de documento</td>
      <td>Numero de documento</td>
      <td>Destino</td>
      <td>Post/Grad</td>
      <td>Nome de Guerra</td>
      <td>Entrada</td>
      <td>Saída</td>
    </tr>
    <?php while ($dado = $con->fetch_array()) { ?>
      <tr>
        <td><?php echo $dado['nome']; ?></td>
        <td><?php echo $dado['tpdoc']; ?></td>
        <td><?php echo $dado['numdoc']; ?></td>
        <td><?php echo $dado['destino']; ?></td>
        <td><?php echo $dado['post']; ?></td>
        <td><?php echo $dado['nomeguerra']; ?></td>
        <td><?php echo $dado['entrada']; ?></td>
        <td><?php echo $dado['saida']; ?></td>
        <td>
        <td>
  <form action="excluir.php" method="get">
    <input type="submit" class="btn-excluir" name="excluir" id="excluir" value="Excluir" />
    <input type="hidden" name="numdoc" value="<?php echo $dado['numdoc']; ?>"/>
  </form>
  <form action="alterar.php" method="get">
    <input type="hidden" name="numdoc" value="<?php echo $dado['numdoc']; ?>" />
    <input type="submit" class="btn-alterar" name="alterar" id="alterar" value="Alterar" />
  </form>
</td>

        </td>
      </tr>
    <?php } ?>
  </table>
</body>

</html>