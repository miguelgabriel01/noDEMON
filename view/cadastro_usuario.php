<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulario</title>
	<link rel="stylesheet" type="text/css" href="../css/cadastro_usuario.css">
</head>
<body>
<?php 
  include "../header.php";
  ?>


<div class="formulário">
	<h1>Ainda não possui uma conta?</h1>
	<h2>Cadastre-se!</h2>
    
    <form action="../controller/cadastrar.php" method="POST">

        <div class="meio">
          <input type="text" name="nome" required="">
          <label>Nome</label>
        </div>

       <div class="meio">
          <input type="email" name="email" required="">
          <label>Email</label>
       </div>    
       
       <div class="meio">
       <input type="text" name="endereco" required="">
       <label>Endereço</label>
       </div>    
       
       <div class="meio">
       <input type="text" name="cidade" required="">
       <label>Cidade</label>
       </div>    
       
       <div class="meio">
       <input type="text" name="estado" required="">
       <label>Estado</label>
       </div>    
       
       <div class="meio">
       <input type="password" name="senha" required="">
       <label>Senha</label>
       </div>    
       
       
    
        <input type="submit" name="" value="Enviar">
     </form>
       
</div>
  <h3 class="spone">SNRC</h3>
  <h4 class="tone">Sistema de busca de Escolas da região</h4>

    
	
</body>
</html>
