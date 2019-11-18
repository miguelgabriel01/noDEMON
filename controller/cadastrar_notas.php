<?php
include "../model/Notas.php";

	$nota_enem = $_POST['nota_enem'];

	$ano = $_POST['ano'];


    $id_escolas = $_POST["id_escolas"];

$notas = new Notas();
// var_dump($id_escolas);
if(!empty($nota_enem) && !empty($ano) && !empty($id_escolas)){
$notas->Insercao($nota_enem, $ano, $id_escolas);
header("location: ../dados_escola.php?xpto=".$id_escolas);

    }


?>


