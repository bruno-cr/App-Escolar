<HTML>
<HEAD>
<meta charset="utf-8">
 <TITLE>Alteração de Informações de Alunos</TITLE>
</HEAD>
<BODY>
<p align="center"><table border="1" width="740">
<tr>
  <td><img src="sislogo.jpg" width="740" height="180" border="0"></td>
</tr>
<tr>
  <td bgcolor=#606060><p align="center"><font color="#FFFFFF">Alteração de Informações de Alunos</font></p></td>
</tr>
 <tr>
  <td><form action="func_editaluno.php" method="POST">
  <?php
    session_start(); 
    include "config.php";
    $_SESSION["matricula"] = $_GET["matricula"];
    $sqlAluno = "SELECT * FROM alunos WHERE matricula = ".$_SESSION["matricula"];
    $sqlExecAluno = mysqli_query($conexao,$sqlAluno);
    $aluno = mysqli_fetch_assoc($sqlExecAluno);
  ?>
    <tr>
       <td>Matrícula:  <?php echo $aluno["matricula"]; ?></td>
    </tr>
    <tr>
       <td>Nome:  <input type="text" size="50" name="txtNome" value="<?php echo $aluno["nome"]; ?>"></td>
    </tr>
    <tr>
       <td>Endereço: <input type="text" size="60" name="txtEndereco" value="<?php echo $aluno["endereco"]; ?>"></td>
    </tr>
    <tr>
       <td>Cidade:  <input type="text" size="35" name="txtCidade" value="<?php echo $aluno["cidade"]; ?>"></td>
    </tr>
    <?php
      include "config.php";
      $sql = "SELECT * FROM cursos ORDER BY codcurso";
      $sqlExecuta = mysqli_query($conexao,$sql);
    ?>
    <tr>
       <td>Código Curso:  
        <select name="txtCodcurso">
          <option>Selecione um curso</option>
          <?php 
            while ($linha = mysqli_fetch_assoc($sqlExecuta)) {
          ?>
          <option value="<?php echo $linha['codcurso'];?>"
          <?php 
            if ($linha["codcurso"] == $aluno["codcurso"]) {
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