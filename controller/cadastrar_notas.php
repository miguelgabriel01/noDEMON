<?php
include "../model/Notas.php";
    $id = $_POST["id"];
    $nota_15 = $_POST["nota_15"];
    $nota_16 = $_POST["nota_16"];
    $nota_17 = $_POST["nota_17"];
    $nota_18 = $_POST["nota_18"];
    $id_escolas = $_POST["id_escolas"];

$notas = new Notas();
// var_dump($id_escolas);
if(!empty($nota_15) && !empty($nota_16) && !empty($nota_17) && !empty($nota_18) && !empty($id_escolas)){
$notas->Insercao($nota_15, $nota_16, $nota_17, $nota_18, $id_escolas);
header("location: ../dados_escola.php?xpto=".$id_escolas);
   
    }


?>


