<HTML>
<HEAD>
<meta charset="utf-8">
 <TITLE>Cadastro de Alunos</TITLE>
</HEAD>
<BODY>
<?php
include "config.php";

$matricula = $_GET["matricula"];

$sql = "DELETE FROM alunos WHERE matricula = ".$matricula;
$sqlDelete = mysqli_query($conexao,$sql);
?>
<meta http-equiv="refresh" content="0;url=pesqalugeral.php">;
</BODY>
</HTML>