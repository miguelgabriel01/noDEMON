<?php 
 session_start();
  $con = new PDO("mysql:host=localhost;dbname=SNRC", "root", "");
			$escola = $con->prepare("SELECT * FROM escolas");
			$escola->execute();
			$exec = $escola->fetchAll(); 
	
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
		<li><a href="sobre.php">Sobre</a></li>
		<li><a href="mapa_escola.php">Mapa</a></li>
		<li><a href="escolas.php">Escolas</a></li>
		<li><a href="cadastro_usuario.php">Cadastro</a></li>
		<li><a href="cadastro_escola.php">Cad_escola</a></li>
	</nav>
</header>
<section class="hero">
  
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
  <h3>  <h3><a href="mapa_escola.php">encontrar no mapa</a></h3>
</h3>
</section>
<section class="sobre">
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
    

  <hr>

  
    <ul class="img">
  <li class="pequena" style="background-image: url('')"><a href=""><p class="obs">Código INEP 26105519
Localização da Escola Urbana
Dependência Estadual
Endereço  RUA JOAQUIM NABUCO
Bairro: CENTRO
CEP: 53610070
Telefone  (81) 3181-4772
Fax</p></a></li>    
  <li class="grande" style="background-image: url('')"><a href=""><p class="obs">RUA JOAQUIN NABUCO 
    <br>BAIRRO centro<br>CEP:533610070</p></a></li>   
  <li class="grande" style="background-image: url('')"><a href=""><p class="obs">Melhor localizão da região..</p></a></li>    
  <li class="pequena" style="background-image: url('')"><a href=""><p class="obs">biblioteca,<br> sala de informatica<br> e de ciencias</p></a></li>    
    </ul>
    </ul>
</section>
<section class="duvidas" >
  <div class="principal">
  	<h2>Dúvidas</h2>    
    <form>
     <div class="meio">
        <input type="email" name="" required="" placeholder="email do usuario">
      </div>
      <div class="meio">
        <textarea placeholder="duvidas.." required=""></textarea>
      </div> 
      <input type="submit" id="enviarEmail" name="" value="enviar">
    </form>
   </div>
</section>
<section class="galeria">
<h2 id="subtituloGaleria">Entre e confira a galeria oficial da escola</h2>
<a href="#" id="entrarGaleria">Entrar</a>
</section>
</body>
</html>
