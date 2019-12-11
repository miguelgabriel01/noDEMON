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
<link rel="stylesheet" type="text/css" href="../css/cadastro_escola.css">
<link href="https://fonts.googleapis.com/css?family=GFS+Didot&display=swap" rel="stylesheet">


  <script src="../view/jquery-3.4.1.min.js" type="text/javascript"></script>
  <script src="../view/jquery.mask.min.js" type="text/javascript"></script>
  <script type="text/javascript">

    $(document).ready(function(){
      $("#cep").mask("00000-000");
      $("#telefone").mask("(00) 00000-0000");
    })
  </script>
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
	<input type="text" name="mapa" required=" " >
	<label>Bairro</label>
	</div>

	<div class="meio">
	<input type="text" name="cep" id="cep" required=" " >
	<label>Cep</label>
	</div>


	<div class="meio">
	<input type="text" name="telefone" id="telefone" required="" >
	<label>Telefone</label>
	</div>

	<div class="meio">
	<input type="text" name="lat" id="coord" required="" >
	<label>Latitude</label>
	</div>

	<div class="meio">
	<input type="text" name="lot" id="coord" required="" >
	<label>Longitude</label>
	<input type="submit" name="" value="Cadastrar">
	</div>


	</form>

	</div>
  <h3 class="spone">Radar Escolar</h3>
  <h4 class="tone">No Brasil, 8 de cada 10 alunos concluintes do ensino<br> fundamental não aprenderam o adequado em Matemática.<br></h4>



</section>

</body>
</html>

