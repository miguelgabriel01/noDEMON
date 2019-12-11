<?php
session_start();
require_once "../config/conexao.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>login</title>
<link rel="stylesheet" type="text/css" href="../css/login.css">
<link href="https://fonts.googleapis.com/css?family=GFS+Didot&display=swap" rel="stylesheet">

</head>
<body>
<?php
  include "../header.php";
  ?>


<section class="imgP">

	<div class="principal">

<?php if(isset($_GET["msg"])) :?>


	<h2> <?= $_GET["msg"] ?> </h2>


<?php endif ?>


	<h2>Login</h2>

	<form action="../controller/login.php" method="post">

	<div class="meio">
	<input type="text" name="email" required=" " >
	<label>Email</label>
	</div>


	<div class="meio">
	<input type="password" name="senha"  required=" " >
	<label>Senha</label>
	</div>
	<input type="submit" name="" value="Entrar">
	</form>
</section>

<h3 class="spone">Radar Escola</h3>
  <h4 class="tone">Visibilidade,transparência e comparação entre escolas.</h4>



</body>
</html>
