

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>login</title>
<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>	
<header>
	<a href="">SNRC</a>
	<nav>
	

		<li><a href="../index.php">Inicio</a></li>
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
	
	<form action="../controller/cadastrar_notas.php" method="POST">
	
	<div class="meio">
	<input type="text" name="nota_15" required=" " >
	<label>Nota do ENEM no ano de 2015</label>
	</div> 
	
	<div class="meio">
	<input type="text" name="nota_16" required=" " >
	<label>Nota do ENEM no ano de 2016</label>
	</div> 
		
	<div class="meio">
	<input type="text" name="nota_17" required=" " >
	<label>Nota do ENEM no ano de 2017</label>
	</div> 
		
	<div class="meio">
	<input type="text" name="nota_18" required=" " >
	<label>Nota do ENEM no ano de 2018</label>
	<input type="submit" name="" value="Entrar">
	</div> 
	
	</form>
	
	</div>
	

</section>


</body>
</html>
