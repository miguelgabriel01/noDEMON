<?php
  session_start();
    $id = $_GET['xpto'];
    require_once "config/conexao.php";
    require_once "model/Escolas.php";
    require_once "model/Comments.php";
    require_once "model/Notas.php";

    $comment = new Comments();
    print_r($_SESSION["logado"]["nome"]);
    $escola = new Escolas();
    $notas = new Notas();
    $id = $_GET["xpto"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Comparar Escolas</title>
</head>

<body>
  <?php
  include "header.php";
  ?>
	<form method="get" action="comparar_escola.php">
	<select name="xpto">

	<?php foreach($escola->link() as $data) : ?>
		<option  name="id" value="<?= $data["id"] ?>"><?= $data["nome"] ?></option>
	<?php endforeach ?>


	</select>
	<b>	<input type="submit" class="" value="Pesquisar"></b>
	</form>
	<form method="get" action="comparar_escola.php">
	<select name="xpto">

	<?php foreach($escola->link() as $data) : ?>
		<option  name="id" value="<?= $data["id"] ?>"><?= $data["nome"] ?></option>
	<?php endforeach ?>


	</select>
	<b>	<input type="submit" class="" value="Pesquisar"></b>
	</form>

</body>

</html>
<pre>
  <?php
    print_r(json_encode($notas->Selec($id)));
  ?>
</pre>