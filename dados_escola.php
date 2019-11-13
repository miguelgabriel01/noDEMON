<?php
  session_start();
    $id = $_GET['xpto'];
    require_once "config/conexao.php";
    require_once "model/Escolas.php";
    require_once "model/Comments.php";
    require_once "model/Notas.php";

    $comment = new Comments();
    $id = $_GET["xpto"];
    print_r($_SESSION["logado"]["nome"]);
     $escola = new Escolas();
      $notas = new Notas();
      $id = $_GET["xpto"];
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
      <li><a href="view/login.php">Login</a></li>
      <li><a href="view/cadastro_usuario.php">Cadastro</a></li>
      <li><a href="view/sobre.php">Sobre</a></li>
      </li>
      <li><a href="sair.php">Sair</a></li>
      </li>
    </nav>
  </header>
  <section class="hero">
    <table class='table'>
      <?php foreach($escola->get($id) as $data) : ?>
      <th>Informações Escolares</th>
      <tr name="id" value="<?= $data["id"] ?>">
        <td>Escola: <?= $data["nome"] ?> </td>
      <tr>
        <td>Endereço: <?= $data["endereco"] ?> </td>
      </tr>
      <tr>
        <td>Cidade: <?= $data["cidade"] ?> </td>
      <tr>
        <td>Cep: <?= $data["cep"] ?> </td>
      <tr>
        <td>Telefone: <?= $data["telefone"] ?> </td>
      <tr>
        <td>Mapa: <iframe src="<?= $data["mapa"] ?>" width="" height="" frameborder="0" style="border:1px solid black;width:900px;height:500px"
            allowfullscreen=""> </iframe></td>

        <?php endforeach ?>

    </table><button> <a href='view/notas_enem.php'>Gráfico</a></button>
  <div style="width: 400px; height: 400px;">   	
	         <canvas class="line-chart" style="height: -300px; width: -100px;"></canvas>
	         <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
           <?php foreach($notas->Selec($id) as $nota) : ?>
	         <script value="<?= $nota["id"] ?>">


	         	var notas = ['<?= $nota["nota_15"] ?>','<?= $nota["nota_16"] ?>','<?= $nota["nota_17"] ?>','<?= $nota["nota_18"] ?>'];	            
	         	var ctx = document.getElementsByClassName("line-chart");
             <?php endforeach ?>

	            var chartGraph = new Chart(ctx, {
	                  type: 'line',
	                  data: {
	                     labels:["2015","2016","2017","2018"],
	                     datasets: [{
	                        label:'Média no Enem nos ultimos anos!',
	                        data: notas,
	                        borderColor: 'green',
	                        borderWidth: '2'
	                     }]
	                  },
	            	options: {
	            		scales: {
	            			yAxes: [
	            				{ 
	            					ticks: {
	            						beginAtZero: true
	            					}
	            				}
	            			]
	            		}
	            	}
	            });
         </script> 
         </div>          
  </section>
  
  <section class="duvidas">
    <div class="principal">
      <h2 id="duvidas">Comentarios</h2>
      <form method="POST" action="../controller/cadastrar_comentario.php">
        <div class="meio">
          <input type="hidden" name="id" required="" value="<?= $_SESSION["logado"]["id"] ?>">
          <input type="hidden" name="nome" required="" value="<?= $_SESSION["logado"]["nome"] ?>">
          <input type="hidden" name="id_escola" required="" value="<?= $id ?>">
        </div>
        <div class="meio">


          <?php
        if(!isset($_SESSION['logado'])) :?>


          <h1>Você precisa está logado para comentar.</h1>


          <?php endif ?>





        </div>
        <textarea placeholder="Comentários" name="comment" required=""></textarea>
        <input type="submit" id="enviarEmail" name="" value="enviar">
      </form>
    </div>
  </section>
  <section class="galeria">
    <?php foreach($comment->Link($id) as $dados) : ?>
      <ul>
        <li>
          <h1><?= $dados["nome"] ?></h1>
          <p>
            <?= $dados["comment"] ?>
          </p>
        </li>

      </ul>
    <?php endforeach ?>
  </section>
</body>

</html>
