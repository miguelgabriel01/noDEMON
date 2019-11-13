<?php
session_start();
require_once "config/conexao.php";
include "model/Escolas.php";
	$escola = new Escolas();
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
		<li><a href="view/login.php" >Login</a></li>
		<li><a href="view/cadastro_usuario.php">Cadastro</a></li>
		<li><a href="view/sobre.php">Sobre</a></li></li>
		<li><a href="view/cadastro_escola.php">Cadastrar Escola</a></li>
		<li><a href="sair.php">Sair</a></li></li>

	</nav>
</header>

<section class="imgP">


	<h1>Bem vindo ao SNRC</h1>

	<?php if(isset($_GET['msg'])) :?>
		<h1><?= $_GET['msg'] ?> </h1>

	<?php endif ?>



	<form method="get" action="dados_escola.php">
	<select name="xpto" class="pesq">

						<?php foreach($escola->link() as $data) : ?>

						       <option  name="id" value="<?= $data["id"] ?>"><?= $data["nome"] ?></option>
						  <?php endforeach ?>


	</select>
	<input type="submit" value="Pesquisar" id="enviar" >
	</form>


</section>


</body>
</html>