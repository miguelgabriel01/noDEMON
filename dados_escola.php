<?php
  session_start();
    $id = $_GET['xpto'];
    require_once "config/conexao.php";
    require_once "model/Escolas.php";
    require_once "model/Comments.php";
    require_once "model/Notas.php";

    $comment = new Comments();
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
  <?php
  include "header.php";
  ?>

  <section class="dados">
    <div class="tabe">

      <?php foreach($escola->get($id) as $data) : ?>
       <h1 class="titulo"> <?= $data["nome"] ?> </h1>


<table class="tabela" >

 <tr>
 <th>Cidade</th>
 <th>Bairro</th>
 <th>Endereço</th>
 <th>Cep</th>
 <th>Telefone</th>


 </tr>


      <tr name="id" value="<?= $data["id"] ?>">

        <td><?= $data["cidade"] ?> </td>

        <td><?= $data["mapa"]?></td>

        <td><?= $data["endereco"] ?> </td>

        <td><?= $data["cep"] ?> </td>

        <td><?= $data["telefone"] ?> </td>
      </tr>
    </table>
</div>

        <?php endforeach ?>
        </section>



</section>
<section class="MaeDeBruno">

  <div id="map"></div>
  <script>
  var lati = <?=$data["lat"]?>;
  var long = <?=$data["lot"] ?>;
  console.log(lati);
  function initMap() {
    var uluru = {lat: lati, lng: long};
    var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 15, center: uluru});
    var marker = new google.maps.Marker({
      position: uluru, map: map});
  }
  </script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDy_BoYMtuOPg56qqmooJ3fq1bX1TXKucw&callback=initMap">
    </script>
    </section>
    <section class="notas">

<button id="buttom"> <a href='view/notas_enem.php?id=<?=$_GET["xpto"]?>'>CADASTRAR NOTAS</a></button>

<section class="mapa">
  <div style="width:800px; height: 400px; margin-top: 50px;background-color:transparent;" >
	         <canvas class="line-chart"></canvas>
	         <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
            <?php
              $not = json_encode($notas->Selec($id));
            ?>
           <?php foreach($notas->Selec($id) as $nota) : ?>


          <?php endforeach ?>
          <script>

            var notas = <?= $not ?>;
            const notasEnem = notas.map(item => item.nota_enem);
            const ano = notas.map(item => item.ano);
            console.log(ano);
            var ctx = document.getElementsByClassName("line-chart");

	            var chartGraph = new Chart(ctx, {
	                  type: 'line',
	                  data: {
	                     labels: ano.sort(),
	                     datasets: [{
	                        label:'Média no Enem nos ultimos anos!',
	                        data: notasEnem,
	                        borderColor: 'green',
	                        borderWidth: '4'
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
         </select>

         </section>

         <section class="mapa2">
         <div style="width: 500px; height: 500px; background-color:transparent;">
         <canvas class="radar-chart" width="2" height="2"></canvas>
         <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
         <script>
	         	var cor = ['green'];
	         	var cor2 = cor[Math.floor(Math.random()*cor.length)];
            var materia_notas = <?= json_encode($notas->Selec($id)); ?>;
            console.log(materia_notas);
            const notas22 = materia_notas.map(item => {
              return {
                label: `Ano ${item.ano}`,
                data: [item.nota_ce, item.nota_ch, item.nota_mat, item.nota_port, item.nota_red],
                borderColor: cor2
              }
            })
            var ctx = document.getElementsByClassName("radar-chart");
            var chartGraph = new Chart(ctx, {
               type: 'radar',
               data: {
                     labels:["Português","Matemática","Redação","Humanas","Exatas"],
                     datasets: notas22
                     },
                     options: {
                         scale: {
                          FontSize: 40,
                             ticks: {
                                 suggestedMin: 0,
                                 suggestedMax: 1000
                             }
                         }
                     }
                  });
            </script>
         </div>

         </div>
        <div class="meio">
        <button id="buttom"><a href="comparar_escola.php">Comparar Notas</a></button>

  </section>

  <section class="duvidas">
    <div class="principal">
      <h2>Comentários</h2>
      <form method="POST" action="../controller/cadastrar_comentario.php">
        <div class="meio">
          <input type="hidden" name="id" crequired="" value="<?= $_SESSION["logado"]["id"] ?>">
          <input type="hidden" name="nome" required="" value="<?= $_SESSION["logado"]["nome"] ?>">
          <input type="hidden" name="id_escola" required="" value="<?= $id ?>">
<!-- 
          <?php
        if(!isset($_SESSION['logado'])) :?>


          <h1>Você precisa está logado para comentar.</h1>


          <?php endif ?>        </div>


        <textarea placeholder="Comentários" name="comment" required=""></textarea>
        <input type="submit" id="enviarEmail" name="" value="Enviar">
      </form>
    </div>
    <?php foreach($comment->Link($id) as $dados) : ?>
      <ul id="tt">
        <li>
          <h1><?= $dados["nome"] ?></h1><br>
          <p>
            <?= $dados["comment"] ?>
          </p>
        </li>

      </ul>
    <?php endforeach ?> -->
    </section>
</body>

</html>
