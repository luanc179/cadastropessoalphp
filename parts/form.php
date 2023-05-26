<?php
require_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="../css/style.css">
     <title>Formulario</title>
</head>

<body>
    <form action="../index.php">
        <input type="submit" class="btn" value="Voltar" />
    </form><br>
    <h1>Formulario</h1>


    <form action="table.php" method="post">
        <div class="form-group">
            <label for="nome">Nome completo:</label>
            <input type="text" name="nome" id="nome" required>
        </div><br>
        
        <div class="form-group">
            <label for="tpdoc">Tipo de documento:</label>
            <select name="tpdoc">
                <option value="RG">RG</option>
                <option value="CPF">CPF</option>
                <option value="CNH">CNH</option>
            </select>
        </div><br>


        <div class="form-group">
            <label for="numdoc">Numero do documento:</label>
            <input type="text" name="numdoc" id="numdoc" required>
        </div><br>
        
        <div class="form-group">
            <label for="destino">Destino:</label>
            <input type="text" name="destino" id="destino" required>
        </div><br>
        
        
        <div class="form-group">
            <label for="post">Post/Grad:</label>
            <select name="post">
                <option value="Cel">Cel</option>
                <option value="Ten Cel">Ten Cel</option>
                <option value="Maj">Maj</option>
                <option value="Cap">Cap</option>
                <option value="1º Ten">1º Ten</option>
                <option value="2º Ten">2º Ten</option>
                <option value="Asp">Asp</option>
                <option value="Cad">Cad</option>
                <option value="ST">ST</option>
                <option value="1º Sgt">1º Sgt</option>
                <option value="2º Sgt">2º Sgt</option>
                <option value="3º Sgt">3º Sgt</option>
                <option value="Cb">Cb</option>
                <option value="Sd">Sd</option>
                <option value="Al">Al</option>
            </select>
        </div><br>

        <div class="form-group">
            <label for="nomeguerra">Nome de Guerra:</label>
            <input type="nomeguerra" name="nomeguerra" id="nomeguerra" required>
        </div><br>
       
        <div class="form-group">
            <label for="entrada">Entrada:</label>
            <input type="time" name="entrada" id="entrada" required>
        </div><br>

        <div class="form-group">
            <label for="saida">Saida:</label>
            <input type="time" name="saida" id="saida">
        </div><br>
       
       
        <form action="table.php">
            <input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar" />
        </form><br>

</body>
</form>


</html>