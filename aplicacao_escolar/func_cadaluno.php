<HTML>
<HEAD>
<meta charset="utf-8">
 <TITLE>Cadastro de Alunos</TITLE>
</HEAD>
<BODY>
<?php 
include "config.php";

$matricula = $_POST["txtMatricula"];
$nome = $_POST["txtNome"]; 
$endereco = $_POST["txtEndereco"];
$cidade = $_POST["txtCidade"];
$codcurso = $_POST["txtCodcurso"];

$sql = "INSERT INTO alunos VALUES($matricula,'$nome','$endereco','$cidade',$codcurso)";
$sqlInsert = mysqli_query($conexao,$sql);
?>
<script type="text/javascript">
  alert("Aluno cadastrado com sucesso!");
</script>
<meta http-equiv="refresh" content="0;url=cadaluno.php">;
</BODY>
</HTML>