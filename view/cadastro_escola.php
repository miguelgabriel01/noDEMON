<?php
session_start();
if(!isset($_SESSION["logado"]) ){
header("location:login.php?msg=Logue-se para cadastrar uma escola!");
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
<?php 
  include "../header.php";
  ?>
	<?php if(!isset($_GET["msg"])) :?>


				<h2> <?= $_GET["msg"] ?> </h2>


	<?php endif ?>


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

