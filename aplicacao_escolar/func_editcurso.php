<HTML>
<HEAD>
<meta charset="utf-8">
 <TITLE>Cadastro de Alunos</TITLE>
</HEAD>
<BODY>
<?php
session_start();
include "config.php";

$codcurso = $_SESSION["curso"];
$nome = $_POST["txtNome"]; 
$coddisc1 = $_POST["txtCoddisc1"];
$coddisc2 = $_POST["txtCoddisc2"];
$coddisc3 = $_POST["txtCoddisc3"];

$sql = "UPDATE cursos SET nome = '$nome',coddisc1 = $coddisc1,coddisc2 = $coddisc2,coddisc3 = $coddisc3 WHERE codcurso = ".$codcurso;
$sqlUpdate = mysqli_query($conexao,$sql);
?>
<script type="text/javascript">
  alert("Curso atualizado com sucesso!");
</script>
<meta http-equiv="refresh" content="0;url=pesqcurgeral.php">;
</BODY>
</HTML>