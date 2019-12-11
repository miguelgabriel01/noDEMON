<?php
  session_start();
    $id = $_GET['xpto'];
    $id2 = $_GET['xpto2'];
    require_once "config/conexao.php";
    require_once "model/Escolas.php";
    require_once "model/Comments.php";
    require_once "model/Notas.php";
    $comment = new Comments();
 //   print_r($_SESSION["logado"]["nome"]);
    $escola = new Escolas();
    $notas = new Notas();
    $id = $_GET["xpto"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Comparar Escolas</title>
  <link rel="stylesheet" type="text/css" href="css/comparar_escolas.css">

</head>

<body>
  <?php
  include "header.php";
  ?>

  <h1 id="titulo">Comparar escolas</h1>
  <form method="get" action="comparar_escola.php">
<section class="select">
  <select name="xpto">
    <?php foreach($escola->link() as $data) : ?>
      <option  name="id" value="<?= $data["id"] ?>"><?= $data["nome"] ?></option>
    <?php endforeach ?>
    
  </select>
  
  <select name="xpto2">
    <?php foreach($escola->link() as $data) : ?>
      <option  name="id" value="<?= $data["id"] ?>"><?= $data["nome"] ?></option>
    <?php endforeach ?>
  </select>

  <b> <input type="submit" class="" value="Comparar"></b>
  </form>
    </section>

<section class="mapa">
  <div style="width: 600px; height: 600px; margin-top: 70px;">
           <canvas class="line-chart2" style="height: -300px; width: -100px;"></canvas>
           <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
            <?php
              $not = json_encode($notas->Selec($id));
            ?>
           <?php foreach($notas->Selec($id) as $nota) : ?>


          <?php endforeach ?>
          <?php
              $not2 = json_encode($notas->Selec($id2));
            ?>
           <?php foreach($notas->Selec($id) as $nota) : ?>


          <?php endforeach ?>

          <script>
<<<<<<< HEAD
=======

>>>>>>> a74eea2dd4542373f26647263b53a7f1b2a275c9
            var notas = <?= $not ?>;
            var notas2 = <?= $not2 ?>;
            const notasEnem2 = notas.map(item => item.nota_enem);
            const notasEnem = notas2.map(item => item.nota_enem);
            const ano2 = notas.map(item => item.ano);
            const ano = notas.map(item => item.ano);
<<<<<<< HEAD
            var ctx = document.getElementsByClassName("line-chart2");
              var chartGraph = new Chart(ctx, {
                    type: 'line',
                    data: {
                       labels: ano2.sort(),
                       datasets: [{
                          label:'Média da Primeira Escola',
                          data: notasEnem2,
                          borderColor: 'blue',
                          borderWidth: '2'
                       },
=======

            var ctx = document.getElementsByClassName("line-chart2");

	            var chartGraph = new Chart(ctx, {
	                  type: 'line',
	                  data: {
	                     labels: ano2.sort(),
	                     datasets: [{
	                        label:'Média da Primeira Escola',
	                        data: notasEnem2,
	                        borderColor: 'blue',
	                        borderWidth: '2'
	                     },
>>>>>>> a74eea2dd4542373f26647263b53a7f1b2a275c9
                       {
                        label:'Média da Segunda Escola',
                        data: notasEnem,
                        borderColor:'green',
                        borderWidth:'2'
                       }]
<<<<<<< HEAD
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
=======
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


>>>>>>> a74eea2dd4542373f26647263b53a7f1b2a275c9
         </select>


         </select>

            </section>

<section class="mapa2">
  <div style="width: 500px; height: 500px;">
      <canvas class="radar-chart" width="2" height="2"></canvas>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
      <script>
        const escola = <?= json_encode($notas->Selec($id)) ?>;
        const escola2 = <?= json_encode($notas->Selec($id2)) ?>;
        console.log(escola);
        console.log(escola2);
        var materia_notas = <?= json_encode($notas->Selec($id)); ?>;
        const notas22 = materia_notas.map(item => {
          return {
            label: `Ano ${item.ano}`,
            data: [item.nota_ce, item.nota_ch, item.nota_mat, item.nota_port, item.nota_red],
            borderColor: "blue"
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

  <div style="width: 500px; height: 500px;">
      <canvas class="radar-chartr" width="2" height="2"></canvas>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
      <script>
        //const escola = <?= json_encode($notas->Selec($id)) ?>;
        //const escola2 = <?= json_encode($notas->Selec($id2)) ?>;
        var materia_notas = <?= json_encode($notas->Selec($id2)); ?>;
        const notas222 = materia_notas.map(item => {
          return {
            label: `Ano ${item.ano}`,
            data: [item.nota_ce, item.nota_ch, item.nota_mat, item.nota_port, item.nota_red],
            borderColor: "green"
          }
        })
        var ctx = document.getElementsByClassName("radar-chartr");
        var chartGraph = new Chart(ctx, {
          type: 'radar',
          data: {
            labels:["Português","Matemática","Redação","Humanas","Exatas"],
            datasets: notas222
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

  <section class="foot"></section>
</body>
</html>