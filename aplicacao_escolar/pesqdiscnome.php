<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pesquisa de Cursos - Geral</title>
</head>

<body>
<p align="center"><table align="center" border="1" width="740">
<tr>
  <td><img src="sislogo.jpg" width="740" 
  height="180" border="0"></td>
</tr>
<tr>
  <td bgcolor="#FFFFC0"><p align="center">
  <b>Cursos em Ordem Alfab&eacute;tica</b></p></td>
</tr>
<table align="center"
 width=750 cellpadding=0 cellspacing=0 border=1>
<?php 
include "config.php";
mysqli_set_charset($conexao,"utf8");
$nome = $_POST["txtNome"];
$sql = "SELECT * FROM disciplinas WHERE nome LIKE '%$nome% ORDER BY coddisc";
$sqlExecuta = mysqli_query($conexao,$sql);
if(mysqli_num_rows($sqlExecuta) > 0){
?>
<tr>
  <td><b>C&oacute;digo da Disciplina</b></td>
  <td><b>Nome da Disciplina</b></td>
  <td><b>Editar</b></td>
  <td><b>Excluir</b></td>
</tr>
<?php
while($linha = mysqli_fetch_assoc($sqlExecuta)){
?>
<tr>
  <td><?php echo $linha["coddisc"]; ?></td>
  <td><?php echo $linha["nome"]; ?></td>
  <td><a href="#"><img src="b_edit.png"></td>
  <td><a href="#"><img src="b_drop.png"></td>
</tr>
<?php 
  }
} else{
?>
  <tr>
    <td colspan="4" align="center">Dados n&atilde;o encontrados</td>
  </tr>
<?php 
}
?>
</table>
</table>
</p>
</body>
</html>