<HTML>
<HEAD>
<meta charset="utf-8">
 <TITLE>Cadastro de Cursos</TITLE>
</HEAD>
<BODY>
<?php 
include "config.php";

$codcurso = $_POST["txtCodcurso"];
$nome = $_POST["txtNome"]; 
$coddisc1 = $_POST["txtCoddisc1"];
$coddisc2 = $_POST["txtCoddisc2"];
$coddisc3 = $_POST["txtCoddisc3"];

$sql = "INSERT INTO cursos VALUES($codcurso,'$nome',$coddisc1,$coddisc2,$coddisc3)";
$sqlInsert = mysqli_query($conexao,$sql);
?>
<script type="text/javascript">
  alert("Curso cadastrada com sucesso!");
</script>
<meta http-equiv="refresh" content="0;url=cadcurso.php">;
</BODY>
</HTML>