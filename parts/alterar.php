<?php
include_once "conexao.php";

if(isset($_GET["numdoc"])) {
    $numdoc = $_GET['numdoc'];

    $stmt = $conn->prepare("SELECT * FROM informacoes WHERE numdoc = ?");
    $stmt->bind_param("s", $numdoc);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows === 0) exit('Nenhum registro encontrado');

    $dados = $result->fetch_assoc();

    $stmt->close();
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST["nome"];
    $tpdoc = $_POST["tpdoc"];
    $numdoc = $_POST["numdoc"];
    $destino = $_POST["destino"];
    $post = $_POST["post"];
    $nomeguerra = $_POST["nomeguerra"];
	$entrada = $_POST["entrada"];
    $saida = $_POST["saida"];

    $stmt = $conn->prepare("UPDATE informacoes SET nome=?, tpdoc=?, numdoc=?, destino=?, post=?, nomeguerra=?, entrada=?, saida=? WHERE numdoc=?");
    $stmt->bind_param("sssssssss", $nome, $tpdoc, $numdoc, $destino, $post, $nomeguerra, $entrada, $saida, $numdoc);
    $stmt->execute();

    // redirecionar para a página de registro ou exibir mensagem de sucesso;
    header("Location: registro.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/style.css">
	<title>Editar Registro</title>
</head>
<body>
	<h1>Editar Registro</h1>
	<?php
		include_once "conexao.php";
		if(isset($_GET['numdoc'])){
			$email = $_GET['numdoc'];
			$consulta = "SELECT * FROM informacoes WHERE numdoc='$numdoc'";
			$con = $conn->query($consulta) or die($conn->error);
			$dado = $con->fetch_array();
		}
	?>
	<form method="POST" action="">
		<label for="nome">Nome completo:</label><br>
		<input type="text" name="nome" value="<?php echo $dado['nome'] ?>"><br>
		<label for="tpdoc">Tipo de documento:</label><br>
		<input type="text" name="tpdoc" value="<?php echo $dado['tpdoc'] ?>" readonly><br>
		<label for="numdoc">Numero do documento:</label><br>
		<input type="text" name="numdoc" value="<?php echo $dado['numdoc'] ?>"><br>
		<label for="destino">Destino:</label><br>
		<input type="text" name="destino" value="<?php echo $dado['destino'] ?>"><br>
		<label for="post">Post/Grad:</label><br>
		<input type="text" name="post" value="<?php echo $dado['post'] ?>"><br>
		<label for="nomeguerra">Nome de Guerra:</label><br>
		<input type="text" name="nomeguerra" value="<?php echo $dado['nomeguerra'] ?>"><br>
		<label for="entrada">Entrada:</label><br>
		<input type="time" name="entrada" value="<?php echo $dado['entrada'] ?>"><br>
		<label for="saida">Saida:</label><br>
		<input type="time" name="saida" value="<?php echo $dado['saida'] ?>"><br>
		<input type="submit" value="Salvar">
	</form>
	<br>
	<form action="../index.php">
		<input type="submit" value="Voltar" />
	</form>
</body>
</html>