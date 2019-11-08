<?php
session_start();
if(!isset($_SESSION["logado"]) ){
header("location:index.php?msg=Você precisa está logado.");
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>login</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>	
<header>
	<a href="">SNRC</a>
	<nav>
	

		<li><a href="index.php">Inicio</a></li>
		<li><a href="login.php" >Cadastrar Escolas</a></li>
		<li><a href="cadastro_usuario.php">Cadastro</a></li>
		<li><a href="mapa_escola.php">Mapa</a></li>
		<li><a href="sobre.php">Sobre</a></li></li>
		<li><a href="sair.php">Sair</a></li></li>
	</nav>
</header>

<section class="imgP">
	
	<div class="principal">
	<h2>Cadastrar Escolas</h2>
	
	<form action="controller/cadastrar_escola.php" method="POST">
	
	<div class="meio">
	<input type="text" name="nome" required=" " >
	<label>Nome</label>
	</div> 
	
	<div class="meio">
	<input type="text" name="endereco" required=" " >
	<label>Rua</label>
	</div> 
		
	<div class="meio">
	<input type="text" name="cidade" required=" " >
	<label>Cidade</label>
	</div> 
		
	<div class="meio">
	<input type="text" name="cep" required=" " >
	<label>Cep</label>
	</div> 
	
	
	<div class="meio">
	<input type="text" name="telefone" required=" " >
	<label>Telefone</label>
	</div> 
	
	
	<div class="meio">
	<input type="text" name="mapa" required=" " >
	<label>link do google maps</label>
	</div> 
	<input type="submit" name="" value="Entrar">
	
	</form>
	
	</div>
	

</section>


</body>
</html>

