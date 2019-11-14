

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
	<input type="hidden" name="id" required="">
	</div> 

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

	<div class="meio">
	<input type="hidden" name="id_escolas" value="<?=$_GET["id"]?>" required="">
	</div> 
	
	</form>
	
	</div>
	

</section>


</body>
</html>
