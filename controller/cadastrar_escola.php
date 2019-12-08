<?php
require_once "../model/Escolas.php";


$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$cidade = $_POST["cidade"];
$cep = $_POST["cep"];
$telefone = $_POST["telefone"];
$mapa = $_POST["mapa"];
$lat = $_POST["lat"];
$lot = $_POST["lot"];

$escola = new Escolas();



if(!empty($nome) && !empty($endereco) && !empty($cidade) && !empty($cep) && !empty($telefone) && !empty($mapa) && !empty($lat) && !empty($lot)) {

	$escola->cadastrarEscolas($nome, $endereco, $cidade, $cep, $telefone, $mapa, $lat, $lot);

		header("location: /index.php?msg=Escola cadastrada com sucesso!");
}




?>