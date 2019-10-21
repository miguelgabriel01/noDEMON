<?php
session_start();
$autorizado = $_SESSION['autorizado'] ?? false;
if ($autorizado !== true) {
    header('location: index.php');
    exit();
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
		<li><a href="sobre.php">Sobre</a></li>
		<li><a href="mapaEscolaSCED.php">Mapa</a></li>
		<li><a href="escolas.php">Escolas</a></li>
		<li><a href="cadastroUsuario.php">Cadastro</a></li>

	</nav>
</header>

<section class="imgP">
	
	<div class="principal">
	<h2>Login</h2>
	
	<form action="#" method="post">
	
	<div class="meio">
	<input type="text" name="nome" required=" " >
	<label>Nome da escola</label>
	</div> 
	
	<div class="meio">
	<input type="text" name="endereco" required=" " >
	<label>Endereço</label>
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
	
	<div class="meio">
	<input type="password" name="senha"  required=" " >
	<label>Senha</label>
	</div>    
	
	
	
	
	<input type="submit" name="" value="Entrar">
	
	</form>
	
	</div>
	
<a href="sair.php">sair</a>

</section>


</body>
</html>