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
  <title>DadosEscola</title>
  <link rel="stylesheet" type="text/css" href="css/dados_escola.css">
</head>

<body>
  <?php
  include "header.php";
  ?>

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
        <td>Mapa: <iframe src="<?= $data["mapa"] ?>" width="" height="" frameborder="0" style="border:0;"
            allowfullscreen=""> </iframe></td>

        <?php endforeach ?>

    </table><button> <a href='view/notas_enem.php?id=<?=$_GET["xpto"]?>'>Gráfico</a></button>
  <div style="width: 400px; height: 400px;">
	         <canvas class="line-chart" style="height: -300px; width: -100px;"></canvas>
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
         </select>
         <div style="width: 300px; height: 300px;">
         <canvas class="radar-chart" width="2" height="2"></canvas>
         <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
         <script>

            var materia_notas = <?= json_encode($notas->Selec($id)); ?>;
            console.log(materia_notas);
            const notas22 = materia_notas.map(item => {
              return {
                label: `Ano ${item.ano}`,
                data: [item.nota_ce, item.nota_ch, item.nota_enem, item.nota_mat, item.nota_port, item.nota_red],
                borderColor: "green"
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
                             ticks: {
                                 suggestedMin: 0,
                                 suggestedMax: 1000
                             }
                         }
                     }
                  });
            </script>           
         </div>

  </section>

  <section class="duvidas">
    <div class="principal">
      <h2>Dúvidas</h2>
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
<pre>
  <?php
    print_r(json_encode($notas->Selec($id)));
  ?>
</pre>