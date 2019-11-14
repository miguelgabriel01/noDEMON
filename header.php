<?php 
	session_start();
	
?>
<header>
	<a href="">SNRC</a>
	<nav>
		<li><a href="../index.php">Inicio</a></li>
		<li><a href="../view/cadastro_escola.php" >Cadastrar Escolas</a></li>
	<?php if(!isset($_SESSION["logado"])) : ?>
		<li><a href="../view/cadastro_usuario.php">Cadastrar-se</a></li>
		<li><a href="../view/login.php">Login</a></li>
	<?php endif ?>
	<?php if(isset($_SESSION["logado"])) : ?>
		<li><a href="#"><?=$_SESSION["logado"]["nome"]?></a></li>
		<li><a href="../sair.php">Sair</a></li></li>
	<?php endif ?>
	</nav>
</header>
