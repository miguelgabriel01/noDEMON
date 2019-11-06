<?php 
  session_start();



    $id = $_GET['xpto'];
    include "conexao.php";
    $escola = $conn->prepare("SELECT * FROM escolas WHERE id = :id ");
      $escola->bindValue(":id", $id);
      $escola->execute(); 



      $comentario = $conn->prepare("SELECT * FROM comments WHERE id_escolas = :id;");
      $comentario->bindValue(':id', $id);
      $comentario->execute(); 

      $c = $comentario->fetchAll();
      // var_dump($id);
      // var_dump($c);
      // exit();



?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DadosEscola</title>
	<link rel="stylesheet" type="text/css" href="css/dados_escola.css">
</head>
<body>
<header>
	<a href="">SNRC</a>
	<nav>

    <li><a href="index.php">Inicio</a></li>
    <li><a href="login.php" >Login</a></li>
    <li><a href="cadastro_usuario.php">Cadastro</a></li>
    <li><a href="sobre.php">Sobre</a></li></li>
    <li><a href="sair.php">Sair</a></li></li>
    	</nav>
</header>
<section class="hero"> 
 <table class='table'>
   <?php foreach($escola->fetchAll() as $data) : ?>
                              <th>Informações Escolares</th>
                   <tr  name="id" value="<?= $data["id"] ?>"><td>Escola:  <?= $data["nome"] ?> </td>
                        <tr> <td>Endereço:      <?= $data["endereco"] ?> </td></tr>
                        <tr> <td>Cidade:      <?= $data["cidade"] ?> </td>
                        <tr> <td>Cep:      <?= $data["cep"] ?> </td>
                        <tr> <td>Telefone:       <?= $data["telefone"] ?> </td>
                       <tr> <td>Mapa: <iframe src="<?= $data["mapa"] ?>" width="" height="" frameborder="0" style="border:0;" allowfullscreen="">      </iframe></td> 

              <?php endforeach ?>

 </table>
</section>
<section class="duvidas" >
  <div class="principal">
  	<h2>Dúvidas</h2>    
    <form method="POST" action="comment.php">
     <div class="meio">
        <input type="hidden" name="email" required="" value="<?= $_SESSION["logado"]["email"] ?>">
        <input type="hidden" name="id" required="" value="<?= $_SESSION["logado"]["id"] ?>">
        <input type="hidden" name="nome" required="" value="<?= $_SESSION["logado"]["nome"] ?>">
        <input type="hidden" name="id_escola" required="" value="<?= $id ?>">
      </div>
      <div class="meio">


      <?php 
        if(!isset($_SESSION['logado'])) :?>


        <h1>Você precisa está logado para comentar.</h1>


        <?php endif ?>
      


        

        <textarea placeholder="duvidas.." name="comment" required=""></textarea>
      </div> 
      <input type="submit" id="enviarEmail" name="" value="enviar">
    </form>
   </div>
</section>
<section class="galeria">
  <ul>
  <?php foreach($c as $comm) : ?>
    <h1 class="nome"> <?= $comm["nome"] ?></h1>
             <li name="id" value="<?= $comm["id"] ?>"> <?= $comm["comment"] ?>  </li>   
           <?php endforeach ?>
        

      </li>
  </ul>
</section>
</body>
</html>
