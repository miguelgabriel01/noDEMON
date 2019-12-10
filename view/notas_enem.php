

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
	<input type="number" name="ano" required="" maxlength="4" >
	<label>Ano</label>
	</div>

	<div class="meio">
	<input type="number" name="nota_port" maxlength="4" min="0" max="1000" required=" " >
	<label>Nota Português e Suas Tecnologias</label>
	</div>

	<div class="meio">
	<input type="number" name="nota_mat" maxlength="4" min="0" max="1000" required=" " >
	<label>Nota Matemática e Suas Tecnologias</label>
	</div>

	<div class="meio">
	<input type="number" name="nota_red" maxlength="4" min="0" max="1000" required=" " >
	<label>Nota Redação</label>
	</div>

	<div class="meio">
	<input type="number" name="nota_ch" maxlength="4" min="0" max="1000" required=" " >
	<label>Nota Ciências Humanas e Suas Tecnologias</label>
	</div>

	<div class="meio">
	<input type="number" name="nota_ce" maxlength="4" min="0" max="1000" required=" " >
	<label>Nota Ciências Exatas e Suas Tecnologias</label>
	</div>

	<div class ="meio">
	<input type="number" name="nota_enem" maxlength="4" min="0" max="1000" required=" " >
	<label>Média da nota da escola</label>	
	</div>

	<div class="meio">
	<input type="hidden" name="id_escolas" value="<?=$_GET["id"]?>" required="">
	<input type="submit" name="" value="Inserir">
	</div>

	</form>

	</div>


</section>


</body>
</html>
