<HTML>
<HEAD>
<meta charset="utf-8">
 <TITLE>Cadastro de Alunos</TITLE>
</HEAD>
<BODY>
<?php
session_start();
include "config.php";

$matricula = $_SESSION["matricula"];
$nome = $_POST["txtNome"]; 
$endereco = $_POST["txtEndereco"];
$cidade = $_POST["txtCidade"];
$codcurso = $_POST["txtCodcurso"];

$sql = "UPDATE alunos SET nome = '$nome',endereco = '$endereco',cidade = '$cidade',codcurso = $codcurso WHERE matricula = ".$matricula;
$sqlUpdate = mysqli_query($conexao,$sql);
?>
<script type="text/javascript">
  alert("Aluno atualizado com sucesso!");
</script>
<meta http-equiv="refresh" content="0;url=pesqalugeral.php">;
</BODY>
</HTML>