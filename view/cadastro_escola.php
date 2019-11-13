<?php
session_start();
if(!isset($_SESSION["logado"]) ){
header("location:login.php");
}
?>

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
		<script>
		     var as = document.querySelectorAll('a');
        as[6].addEventListener('click', function(evt) {
            alert('Tem certeza que deseja sair??');
            if (confirm('Tem certeza, a mais de bala?')) {
                alert('Dale teu grau, corno.');
            } else {
                alert('O bicho é gado mesmo!');
                evt.preventDefault();
            }
        })
	</script>
</header>

<section class="imgP">
	
	<div class="principal">
	<h2>Cadastrar Escolas</h2>
	
	<form action="../controller/cadastrar_escola.php" method="POST">
	
	<div class="meio">
	<input type="text" name="nome" required=" " >
	<label>Nome</label>
	</div> 
	
	<div class="meio">
	<input type="text" name="endereco" required=" " >
	<label>Rua</label>
	</div> 
		
	<div class="meio">
	<input type="text" name="cidade" required="" >
	<label>Cidade</label>
	</div> 
		
	<div class="meio">
	<input type="number" name="cep" required="" maxlength="8">
	<label>Cep</label>
	</div> 
	
	
	<div class="meio">
	<input type="number" name="telefone" required="" maxlength="11" >
	<label>Telefone</label>
	</div> 
	
	
	<div class="meio">
	<input type="text" name="mapa" required="" >
	<label>Link do google maps</label>
	</div> 
	<input type="submit" name="" value="Entrar">
	
	</form>
	
	</div>
	

</section>

</body>
</html>

