<?php
include "../model/Notas.php";
    $nota_15 = $_POST["nota_15"];
    $nota_16 = $_POST["nota_16"];
    $nota_17 = $_POST["nota_17"];
    $nota_18 = $_POST["nota_18"];

$notas = new Notas();

if(!empty($nota_15) && !empty($nota_16) && !empty($nota_17) && !empty($nota_18)){
$notas->Insercao($nota_15, $nota_16, $nota_17, $nota_18);

header("location: ../dados_escola.php?xpto=1");
}
?>


