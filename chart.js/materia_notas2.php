<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible"  content="ie-edge">
      <meta name="viewport" content="width= device-width, initial-scale=1.0">

      <title>Gráficos de Escolas</title>
   </head>
   <body>
      <div style="width: 300px; height: 300px;">
         <canvas class="radar-chart" width="2" height="2"></canvas>
         <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
         <script>
            var materia_notas = ['650','630','750','410','510'];
            var ctx = document.getElementsByClassName("radar-chart");
            var chartGraph = new Chart(ctx, {
               type: 'radar',
               data: {
                     labels:["Português","Redação","Humanas","Matemática","Exatas"],
                     datasets: [{
                        label:'Notas das matérias da escola no ultimo ENEM',
                        data: materia_notas,
                        borderColor:"green",
                        }]
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
      </body>
</html>
