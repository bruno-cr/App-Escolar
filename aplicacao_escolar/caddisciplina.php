<HTML>
<HEAD>
<meta charset="utf-8">
 <TITLE>Cadastro de Disciplinas</TITLE>
</HEAD>
<BODY>
<?php 
include "config.php";

$coddisc = $_POST["txtCoddisciplina"];
$nome = $_POST["txtNome"];

$sql = "INSERT INTO disciplinas VALUES($coddisc,'$nome')";
$sqlInsert = mysqli_query($conexao,$sql);
?>
<script type="text/javascript">
  alert("Disciplina cadastrada com sucesso!");
</script>
<meta http-equiv="refresh" content="0;url=caddisciplina.html">;
</BODY>
</HTML>