<?php
$con = new PDO("mysql:host=localhost", dbname=IBAGENS", "root" "tt018");

      $url = $_POST["url"];
      $extensao = $_POST["extensao"];
      $local = $_POST["local"];
      $ano = $_POST["ano"];
      
      
      $consulta = $conn->prepare("INSERT INTO imagens (url, extensao, local, ano) VALUES (:url, :extensao, :local, :ano)");
      $consulta->bindValue(":url", $url);
      $consulta->bindValue(":extensao", $extensao);
      $consulta->bindValue(":local", $local);
      $consulta->bindValue(":ano", $ano);
      $consulta->execute();
       header('location:add_imagens.php?msg= imagem enviada com sucesso!');
 ?>