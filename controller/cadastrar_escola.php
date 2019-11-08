<?php 
include "../model/Escolas.php";


$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$cidade = $_POST["cidade"];
$cep = $_POST["cep"];
$telefone = $_POST["telefone"];
$mapa = $_POST["mapa"];

$escola = new Escolas();



if(!empty($nome) && !empty($endereco) && !empty($cidade) && !empty($cep) && !empty($telefone) && !empty($mapa)) {

	$escola->cadastrarEscolas($nome, $endereco, $cidade, $cep, $telefone, $mapa);

		header("location: /index.php?msg=Escola cadastrada com sucesso!");
}




?>