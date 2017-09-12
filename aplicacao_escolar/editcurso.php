<HTML>
<HEAD>
<meta charset="utf-8">
 <TITLE>Alteração de Informações de Cursos</TITLE>
</HEAD>
<BODY>
<p align="center"><table border="1" width="740">
<tr>
  <td><img src="sislogo.jpg" width="740" height="180" border="0"></td>
</tr>
<tr>
  <td bgcolor=#606060><p align="center"><font color="#FFFFFF">Alteração de Informações de Cursos</font></p></td>
</tr>
 <tr>
  <td><form action="func_editcurso.php" method="POST">
  <?php
    session_start(); 
    include "config.php";

    $_SESSION["curso"] = $_GET["curso"];
    $sqlCurso = "SELECT * FROM cursos WHERE codcurso = ".$_SESSION["curso"];
    $sqlExecCurso = mysqli_query($conexao,$sqlCurso);
    $curso = mysqli_fetch_assoc($sqlExecCurso);
  ?>
    <tr>
       <td>Código Curso:  <?php echo $curso["codcurso"]; ?></td>
    </tr>
    <tr>
       <td>Nome:  <input type="text" size="50" name="txtNome" value="<?php echo $curso["nome"]; ?>"></td>
    </tr>
    <?php
    mysqli_set_charset($conexao,"utf8");
      $sql = "SELECT * FROM disciplinas ORDER BY coddisc";
      $sqlExecuta = mysqli_query($conexao,$sql);
    ?>
    <tr>
       <td>Disciplina 1:  
        <select name="txtCoddisc1">
          <option>Selecione uma displina</option>
          <?php 
            while ($linha = mysqli_fetch_assoc($sqlExecuta)) {
          ?>
          <option value="<?php echo $linha['coddisc'];?>"
          <?php 
            if ($linha["coddisc"] == $curso["coddisc1"]) {
              echo 'selected="selected"';
            } 
          ?>
          ><?php echo $linha['nome']; ?></option>
          <?php 
          }
          ?>
        </select>
       </td>
    </tr>
    <tr>
       <td>Disciplina 2:  
        <select name="txtCoddisc2">
          <option>Selecione uma displina</option>
          <?php
            mysqli_data_seek($sqlExecuta,0);
            while ($linha = mysqli_fetch_assoc($sqlExecuta)) {
          ?>
          <option value="<?php echo $linha['coddisc'];?>"
          <?php 
            if ($linha["coddisc"] == $curso["coddisc2"]) {
              echo 'selected="selected"';
            } 
          ?>
          ><?php echo $linha['nome']; ?></option>
          <?php 
          }
          ?>
        </select>
       </td>
    </tr>
    <tr>
       <td>Disciplina 3:  
        <select name="txtCoddisc3">
          <option>Selecione uma displina</option>
          <?php 
            mysqli_data_seek($sqlExecuta,0);
            while ($linha = mysqli_fetch_assoc($sqlExecuta)) {
          ?>
          <option value="<?php echo $linha['coddisc'];?>"
          <?php 
            if ($linha["coddisc"] == $curso["coddisc3"]) {
              echo 'selected="selected"';
            } 
          ?>
          ><?php echo $linha['nome']; ?></option>
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