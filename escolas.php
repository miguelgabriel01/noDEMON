<?php 
 session_start();
  $con = new PDO("mysql:host=localhost;dbname=id10860157_snrc", "id10860157_root", "123456");
			$escola = $con->prepare("SELECT * FROM escolas");
			$escola->execute();
			$exec = $escola->fetchAll(); 
	
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>escolas</title>
<link rel="stylesheet" type="text/css" href="css/escola.css">
</head>
<body>
<header>

	<a href="">SNRC</a>
	<nav>
		<li><a href="index.php">Inicio</a></li>
		<li><a href="sobre.php">Sobre</a></li>
		<li><a href="mapa_escola.php">Mapa</a></li>
		<li><a href="escolas.php">Escolas</a></li>
		<li><a href="cadastro_usuario.php">Cadastro</a></li>

	</nav>
</header>
<section class="dados">
 <h1><?php  
	foreach($exec as $exe=> $ex){
    if($ex['id'] == 1){
		 echo $ex['nome'] . '<br>';
		
    }

	}  ?> </h1>
  <p>
  <?php  
	foreach($exec as $exe=> $ex){
    if($ex['id'] == 1){
		 echo $ex['endereco'] . '<br>' . $ex['cidade'] . '<br>' . $ex['cep'] . '<br>' . $ex['telefone'] . '<br>' ;
    }


	}  ?> 
  </p>
  <h3>  
</h3>
</section>

<h3><?php  
	foreach($exec as $exe=> $ex){
    if($ex['id'] == 2){
		 echo $ex['nome'] . '<br>';
    }
	}  ?> </h3>
  <p><?php  
	foreach($exec as $exe=> $ex){
    if($ex['id'] == 2){
		 echo $ex['endereco'] . '<br>' . $ex['cidade'] . '<br>' . $ex['cep'] . '<br>' . $ex['telefone'] . '<br>' ;
    }
	}  ?> 
  <hr>
  <h4> <?php  
	foreach($exec as $exe=> $ex){
    if($ex['id'] == 3){
		 echo $ex['nome'] . '<br>';
    }

	}  ?>

  </h4>
  <p> <?php  
	foreach($exec as $exe=> $ex){
    if($ex['id'] == 3){
		 echo $ex['endereco'] . '<br>' . $ex['cidade'] . '<br>' . $ex['cep'] . '<br>' . $ex['telefone'] . '<br>' ;
    }

	}  ?> 
</section>

</body>
</html>
