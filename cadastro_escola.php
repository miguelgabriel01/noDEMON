<?php
session_start();
$logado = $_SESSION['logado'] ?? false;
if ($logado !== true) {
    header('location: index.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>login</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>	
<header>
	<a href="">SNRC</a>
	<nav>
		<li><a href="index.php">Inicio</a></li>
		<li><a href="sobre.php">Sobre</a></li>
		<li><a href="mapa_escola.php">Mapa</a></li>
		<li><a href="escolas.php">Escolas</a></li>
		<li><a href="cadastro_usuario.php">Cadastro</a></li>
		<li><a href="sair.php">Sair</a>
</li>
	</nav>
</header>

<section class="imgP">
	
	<div class="principal">
	<h2>Cadastrar Escolas</h2>
	
	<form action="add_escola.php" method="POST">
	
	<div class="meio">
	<input type="text" name="nome" required=" " >
	<label>Nome</label>
	</div> 
	
	<div class="meio">
	<input type="text" name="endereco" required=" " >
	<label>Rua</label>
	</div> 
	
	<div class="meio">
	<input type="text" name="bairro" required=" " >
	<label>Bairro</label>
	</div> 
	
	<div class="meio">
	<input type="text" name="cidade" required=" " >
	<label>Cidade</label>
	</div> 
	
	<div class="meio">
	<input type="text" name="estado" required=" " >
	<label>Estado</label>
	</div> 
	
	<div class="meio">
	<input type="text" name="cep" required=" " >
	<label>Cep</label>
	</div> 
	
	<div class="meio">
	<input type="text" name="email" required=" " >
	<label>Email</label>
	</div> 
	
	<div class="meio">
	<input type="text" name="telefone" required=" " >
	<label>Telefone</label>
	</div> 
	
	<div class="meio">
	<input type="text" name="diretor" required=" " >
	<label>diretor</label>
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

