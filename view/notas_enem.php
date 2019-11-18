

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


<section class="imgP">

	<div class="principal">
	<h2>Cadastrar Escolas</h2>

	<form action="../controller/cadastrar_notas.php" method="POST">


	<div class="meio">
	<input type="text" name="nota_enem" maxlength="3" min="0" max="1000" required=" " >
	<label>Nota</label>
	</div>

	<div class="meio">
	<input type="text" name="ano" required=" " >
	<label>Ano</label>
	<input type="submit" name="" value="Entrar">
	</div>

	<div class="meio">
	<input type="hidden" name="id_escolas" value="<?=$_GET["id"]?>" required="">
	</div>

	</form>

	</div>


</section>


</body>
</html>
