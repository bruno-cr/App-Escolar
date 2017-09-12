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
<tr>
  <td><b>C&oacute;digo do Curso</b></td>
  <td><b>Nome do Curso</b></td>
  <td><b>Disciplina 1</b></td>
  <td><b>Disciplina 2</b></td>
  <td><b>Disciplina 3</b></td>
  <td><b>Editar</b></td>
  <td><b>Excluir</b></td>
</tr>
<?php
include "config.php";
$sql = "SELECT * FROM cursos ORDER BY codcurso";
$sqlExecuta = mysqli_query($conexao,$sql);
while($linha = mysqli_fetch_assoc($sqlExecuta)){
?>
<tr>
  <td><?php echo $linha["codcurso"]; ?></td>
  <td><?php echo $linha["nome"]; ?></td>
  <?php 
    mysqli_set_charset($conexao,"utf8");
    $sqlDisc1 = "SELECT nome FROM disciplinas WHERE coddisc = ".$linha["coddisc1"];
    $sqlDiscExec1 = mysqli_query($conexao,$sqlDisc1);
    $disc1 = mysqli_fetch_assoc($sqlDiscExec1);
  ?>
  <td><?php echo $disc1["nome"]; ?></td>
  <?php 
    mysqli_set_charset($conexao,"utf8");
    $sqlDisc2 = "SELECT nome FROM disciplinas WHERE coddisc = ".$linha["coddisc2"];
    $sqlDiscExec2 = mysqli_query($conexao,$sqlDisc2);
    $disc2 = mysqli_fetch_assoc($sqlDiscExec2);
  ?>
  <td><?php echo $disc2["nome"]; ?></td>
  <?php 
    mysqli_set_charset($conexao,"utf8");
    $sqlDisc3 = "SELECT nome FROM disciplinas WHERE coddisc = ".$linha["coddisc3"];
    $sqlDiscExec3 = mysqli_query($conexao,$sqlDisc3);
    $disc3 = mysqli_fetch_assoc($sqlDiscExec3);
  ?>
  <td><?php echo $disc3["nome"]; ?></td>
  <td><a href="editcurso.php?curso=<?php echo $linha["codcurso"]; ?>"><img src="b_edit.png"></td>
  <td><a href="delcurso.php?curso=<?php echo $linha["codcurso"]; ?>"><img src="b_drop.png"></td>
</tr>
<?php 
}
?>
</table>
</table>
</p>
</body>
</html>