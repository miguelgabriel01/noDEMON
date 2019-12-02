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
<?php 
  include "header.php";
?>


<section class="imgP">


	<h1>Bem vindo ao SNRC</h1>

	<?php if(isset($_GET['msg'])) :?>
		<h1><?= $_GET['msg'] ?> </h1>

	<?php endif ?>



	<form method="get" action="dados_escola.php">
	<select name="xpto">

						<?php foreach($escola->link() as $data) : ?>

						       <option  name="id" value="<?= $data["id"] ?>"><?= $data["nome"] ?></option>
						  <?php endforeach ?>


	</select>
	<b>	<input type="submit" class="butao" value="Pesquisar"></b>
	</form>


</section>


</body>
</html>