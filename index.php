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
 <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->
<link href="https://fonts.googleapis.com/css?family=GFS+Didot&display=swap" rel="stylesheet">
</head>
<body>



<?php
  include "header.php";
?>


<section class="imgP">
<div class="vd">
	<video class="vd_c" autoplay muted loop>
		<source src="img/video.mp4" type="video/mp4">
	</video>

</div>


	<h1>Bem vindo ao Radar Escolar</h1>

	<?php if(isset($_GET['msg'])) :?>
		<h1><?= $_GET['msg'] ?> </h1>

	<?php endif ?>



	<form method="get" action="dados_escola.php">
	<select name="xpto">
	<div class="hsuHs"><span class="UOU"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg></span></div>
<!-- 	<svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"></svg>
 -->
						<?php foreach($escola->link() as $data) : ?>

						       <option  name="id" value="<?= $data["id"] ?>"><?= $data["nome"] ?></option>
						  <?php endforeach ?>


	</select>
	<b>	<input type="submit" class="butao" value="Pesquisar"></b>
	</form>


</section>
<section class="foot">
<h1 id='desenvolvedores'>Desenvolvedores</h1>


</section>

</body>
</html>