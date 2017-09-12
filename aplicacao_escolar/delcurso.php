<HTML>
<HEAD>
<meta charset="utf-8">
 <TITLE>Cadastro de Alunos</TITLE>
</HEAD>
<BODY>
<?php
include "config.php";

$curso = $_GET["curso"];

$sql = "DELETE FROM cursos WHERE codcurso = ".$curso;
$sqlDelete = mysqli_query($conexao,$sql);
?>
<meta http-equiv="refresh" content="0;url=pesqcurgeral.php">;
</BODY>
</HTML>