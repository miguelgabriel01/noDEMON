<?php
session_start();
$conn = new PDO("mysql:host=localhost;dbname=SNRC", "root", "ifpe");
				

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>index</title>
<link rel="stylesheet" type="text/css" href="css/index.css">
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
	<h1>Bem vindo ao SNRC</h1>
	<h3>Encontre o melhor centro de ensino na sua região..</h3>
	
	<form method="get" action="dados_escola.php">
	<select name="xpto">
							<?php
						   $query = $conn->prepare("SELECT * FROM escolas");
						   $query->execute();
			
							?>    
						<?php foreach($query->fetchAll() as $data) : ?>

						       <option  name="id" value="<?= $data["id"] ?>"><?= $data["nome"] ?></option>    
						  <?php endforeach ?>
	
				
	</select>
	<input type="submit" value="Pesquisar" id="enviar" >
	</form>
	
	
</section>


</body>
</html>