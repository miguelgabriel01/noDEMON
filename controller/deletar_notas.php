<?php
require_once "../model/Notas.php";

    $id = $_POST["id"];

$notas = new Notas();

if(empty($nota_15) && empty($nota_16) && empty($nota_17) && empty($nota_18)){
    $notas->Insercao($nota_15, $nota_16, $nota_17, $nota_18);
}

?>