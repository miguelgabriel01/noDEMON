<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formulario</title>
  <link rel="stylesheet">
</head>
  
<body>
 
<?php
    $usuarios = file('cadastro.csv');
    for($i = 0; $i < sizeof($usuarios); $i++) {
        $usuarios[$i] = explode(",", $usuarios[$i]);
    }
?>
  <table>
  <tr>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Cidade</th>
    <th>Bairro</th>
    <th>Tel</th>
    <th>Senha</th>
    <th>Senha</th>
  </tr>
    
   <?php foreach($cadastros as  $cadastro):?>
    <tr>
   <?php foreach($cadastro as $cadastro2):?>
      <td><?= $cadastro2?></td>
   <?php endforeach?>
     </tr>
   <?php endforeach?>
  </table>
  
  <form action="functions.php" method="POST">
     
     <legend>Cadastre-se</legend>
    
    <input type="text"  name="nome" placeholder="Nome">
    <input type="checkbox" name="Sexo[]" value="Masculino"><br>
    <input type="checkbox" name="Sexo[]" value="Feminino"><br>
    <input type="email" name="mail" id="email" placeholder="Ex: creyton@email.com">
    <input type="number" name="cidade" placeholder="Cidade">  
    <input type="text" name="bairro"  placeholder="Bairro">
    <input type="text" name="tel"  placeholder="Ex: (81) 9990-9990">
    <input type="password" name="senha"  placeholder="Senha">
    <input type="password" name="senha"  placeholder="Confirmar">  
    <input type="submit" value="Cadastrar">
    
  </form>
  
</body>
</html>
