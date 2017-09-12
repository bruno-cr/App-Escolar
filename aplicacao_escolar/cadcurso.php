<HTML>
<HEAD>
<meta charset="utf-8">
<TITLE>Cadastro de Cursos</TITLE>
</HEAD>
<BODY>
<p align="center"><table border="1" width="840">
<tr>
  <td><img src="sislogo.jpg" width="740" height="180" border="0"></td>
</tr>
<tr>
  <td bgcolor=#606060><p align="center"><font color="#FFFFFF">Cadastro de Cursos</font></p></td>
</tr>
 <tr>
  <td><form action="func_cadcurso.php" method="POST">
    <tr>
       <td>Código do Curso:  <input type="text" size="05" name="txtCodcurso"></td>
    </tr>
    <tr>
       <td>Nome do Curso:  <input type="text" size="50" name="txtNome"></td>
    </tr>
    <?php
    include "config.php";
    mysqli_set_charset($conexao,"utf8");
    $sql = "SELECT * FROM disciplinas ORDER BY coddisc";
    $sqlExecuta = mysqli_query($conexao,$sql);
    ?>
    <tr>
       <td>Código da Disciplina 1: 
        <select name="txtCoddisc1">
          <option>Selecione uma disciplina</option>
          <?php 
            while ($linha = mysqli_fetch_assoc($sqlExecuta)) {
          ?>
          <option value="<?php echo $linha['coddisc'];?>"><?php echo $linha['nome']; ?></option>
          <?php 
          }
          ?>
        </select>
       </td>
    </tr>
    <tr>
       <td>Código da Disciplina 2:
        <select name="txtCoddisc2">
          <option>Selecione uma disciplina</option>
          <?php
            mysqli_data_seek($sqlExecuta, 0);
            while ($linha = mysqli_fetch_assoc($sqlExecuta)) {
          ?>
          <option value="<?php echo $linha['coddisc'];?>"><?php echo $linha['nome']; ?></option>
          <?php 
          }
          ?>
        </select>
       </td>
    </tr>
    <tr>
       <td>Código da Disciplina 3:
        <select name="txtCoddisc3">
          <option>Selecione uma disciplina</option>
          <?php
            mysqli_data_seek($sqlExecuta, 0);
            while ($linha = mysqli_fetch_assoc($sqlExecuta)) {
          ?>
          <option value="<?php echo $linha['coddisc'];?>"><?php echo $linha['nome']; ?></option>
          <?php 
          }
          ?>
        </select>
       </td>
    </tr>
    <tr>
       <td><input type="submit" value="Enviar"></td>
    </tr>
</form></td>
</tr>
</table></p>
</BODY>
</HTML>