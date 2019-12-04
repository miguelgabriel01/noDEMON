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

        <section class="notas">

  <button id="buttom"> <a href='view/notas_enem.php?id=<?=$_GET["xpto"]?>' >Exibir dados</a></button>    
    
    <form method="get" action="dados_escola.php">

   
</section>



<section class="mapa">
  <div style="width:800px; height: 400px; margin-top: 50px;">
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
	                        borderWidth: '5'
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
         <div style="width: 500px; height: 500px;">
         <canvas class="radar-chart" width="2" height="2"></canvas>
         <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
         <script>

            var materia_notas = <?= json_encode($notas->Selec($id)); ?>;
            console.log(materia_notas);
            const notas22 = materia_notas.map(item => {
              return {
                label: `Ano ${item.ano}`,
                data: [item.nota_ce, item.nota_ch, item.nota_mat, item.nota_port, item.nota_red],
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
      <h2>Comentários</h2>
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
</body>

</html>
