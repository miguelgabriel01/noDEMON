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
		<li><a href="login.php" >Cadastrar Escolas</a></li>
		<li><a href="cadastro_usuario.php">Cadastro</a></li>
		<li><a href="sobre.php">Sobre</a></li></li>
	</nav>
</header>

<section class="imgP">
	
	<div class="principal">
	<h2>Login</h2>
	
	<form action="verificar.php" method="post">
	
	<div class="meio">
	<input type="text" name="email" required=" " >
	<label>Email</label>
	</div> 
	
	
	<div class="meio">
	<input type="password" name="senha"  required=" " >
	<label>Senha</label>
	</div>    
	<input type="submit" name="" value="Entrar">
	</form>
</section>



</body>
</html>
