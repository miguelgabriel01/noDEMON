<?php 
 session_start();
 $id = $_GET['xpto'];
  $con = new PDO("mysql:host=localhost;dbname=SNRC", "root", "ifpe");
			$escola = $con->prepare("SELECT * FROM escolas WHERE id = :id ");
      $escola->bindValue(":id", $id);


			$escola->execute(); 

      $comentario = $con->prepare("SELECT * FROM comments WHERE comment = :comment ");
      $comentario->bindValue(":comment", $comment);


      $comentario->execute(); 

       
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DadosEscola</title>
	<link rel="stylesheet" type="text/css" href="css/dados_escolas.css">
</head>
<body>
<header>
	<a href="">SNRC</a>
	<nav>

    <li><a href="index.php">Inicio</a></li>
    <li><a href="login.php" >Cadastrar Escolas</a></li>
    <li><a href="cadastro_usuario.php">Cadastro</a></li>
    <li><a href="sobre.php">Sobre</a></li></li>
    	</nav>
</header>
<section class="hero"> 
 <h1>
   <?php foreach($escola->fetchAll() as $data) : ?>

                   <h1  name="id" value="<?= $data["id"] ?>"><?= $data["nome"] ?></h1>
                        <p>Endereço:      <?= $data["endereco"] ?> </p>
                        <p>Cidade:      <?= $data["cidade"] ?> </p>
                        <p>Cep:      <?= $data["cep"] ?> </p>
                        <p>Telefone:       <?= $data["telefone"] ?> </p>
                        <p>Mapa: <iframe src="<?= $data["mapa"] ?>" width="" height="" frameborder="0" style="border:0;" allowfullscreen="">      </iframe></p>

              <?php endforeach ?>

 </h1>
</section>
<section class="duvidas" >
  <div class="principal">
  	<h2>Dúvidas</h2>    
    <form method="POST" action="comment.php">
     <div class="meio">
        <input type="hidden" name="email" required="" value="<?= $_SESSION["logado"]["email"] ?>" placeholder="email do usuario">
        <input type="hidden" name="id" required="" value="<?= $_SESSION["logado"]["id"] ?>" placeholder="email do usuario">
      </div>
      <div class="meio">
        <textarea placeholder="duvidas.." name="comment" required=""></textarea>
      </div> 
      <input type="submit" id="enviarEmail" name="" value="enviar">
    </form>
   </div>
</section>
<section class="galeria">
  <ul>
    <li class="nome"> <?= $_SESSION["logado"]["nome"] ?></li>
    <?php foreach($comentario->fetchAll() as $comm):?>
    <li class="comentario"><?= $comm ?> </li>
    <?php endforeach ?>
  </ul>
</section>
</body>
</html>
