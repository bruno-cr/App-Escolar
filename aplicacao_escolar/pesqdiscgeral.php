<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pesquisa de Disciplinas - Geral</title>
</head>

<body>
<p align="center"><table align="center" border="1" width="740">
<tr>
  <td><img src="sislogo.jpg" width="740" 
  height="180" border="0"></td>
</tr>
<tr>
  <td bgcolor="#FFFFC0"><p align="center">
  <b>Disciplinas em Ordem Alfab&eacute;tica</b></p></td>
</tr>
<table align="center"
 width=750 cellpadding=0 cellspacing=0 border=1>
<tr>
  <td><b>C&oacute;digo da Disciplina</b></td>
  <td><b>Nome da Disciplina</b></td>
  <td><b>Editar</b></td>
  <td><b>Excluir</b></td>
</tr>
<?php 
include "config.php";
mysqli_set_charset($conexao,"utf8");
$sql = "SELECT * FROM disciplinas ORDER BY coddisc";
$sqlExecuta = mysqli_query($conexao,$sql);
while ($linha = mysqli_fetch_assoc($sqlExecuta)) {
?>
<tr>
  <td><?php echo $linha["coddisc"]; ?></td>
  <td><?php echo $linha["nome"]; ?></td>
  <td><a href="#"><img src="b_edit.png"></a></td>
  <td><a href="#"><img src="b_drop.png"></a></td>
</tr>
<?php 
}
?>
</table>
</table>
</p>
</body>
</html>