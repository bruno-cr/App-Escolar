<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pesquisa de Alunos - Geral</title>
</head>

<body>
<p align="center"><table align="center" border="1" width="740">
<tr>
  <td><img src="sislogo.jpg" width="740" 
  height="180" border="0"></td>
</tr>
<tr>
  <td bgcolor="#FFFFC0"><p align="center">
  <b>Alunos em Ordem Alfab&eacute;tica</b></p></td>
</tr>
<table align="center"
 width=750 cellpadding=0 cellspacing=0 border=1>
<tr>
  <td><b>Matr&iacute;cula</b></td>
  <td><b>Nome do Aluno</b></td>
  <td><b>Endere&ccedil;o</b></td>
  <td><b>Cidade</b></td>
  <td><b>Curso</b></td>
  <td><b>Editar</b></td>
  <td><b>Excluir</b></td>
</tr>
<?php
include "config.php";
$sql = "SELECT * FROM alunos ORDER BY matricula";
$sqlExecuta = mysqli_query($conexao,$sql);
while($linha = mysqli_fetch_assoc($sqlExecuta)){
?>
<tr>
  <td><?php echo $linha["matricula"]; ?></td>
  <td><?php echo $linha["nome"]; ?></td>
  <td><?php echo $linha["endereco"]; ?></td>
  <td><?php echo $linha["cidade"]; ?></td>
  <?php 
    $sqlCur = "SELECT nome FROM cursos WHERE codcurso = ".$linha["codcurso"];
    $sqlCurExec = mysqli_query($conexao,$sqlCur);
    $curso = mysqli_fetch_assoc($sqlCurExec);
  ?>
  <td><?php echo $curso["nome"]; ?></td>
  <td><a href="editaluno.php?matricula=<?php echo $linha["matricula"]; ?>"><img src="b_edit.png"></td>
  <td><a href="delaluno.php?matricula=<?php echo $linha["matricula"]; ?>"><img src="b_drop.png"></td>
</tr>
<?php 
}
?>

</table>
</table>
</p>
</body>
</html>