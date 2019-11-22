<?php
include "../model/Notas.php";

    $nota_port = $_POST['nota_port'];
    $nota_mat = $_POST['nota_mat'];
    $nota_red = $_POST['nota_red'];
    $nota_ch = $_POST['nota_ch'];
    $nota_ce = $_POST['nota_ce'];
	$nota_enem = $_POST['nota_enem'];

	$ano = $_POST['ano'];


    $id_escolas = $_POST["id_escolas"];

$notas = new Notas();
// var_dump($id_escolas);
if(!empty($nota_port) && !empty($nota_mat) && !empty($nota_red) && !empty($nota_ch) && !empty($nota_ce) && !empty($nota_enem) && !empty($ano) && !empty($id_escolas)){
$notas->Insercao($nota_port, $nota_mat, $nota_red, $nota_ch, $nota_ce, $nota_enem, $ano, $id_escolas);
header("location: ../dados_escola.php?xpto=".$id_escolas);
    }
?>


