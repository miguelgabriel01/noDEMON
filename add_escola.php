<?php

$con = new PDO("mysql:host=localhost;dbname=SNRC", "root", "");
				
	$nome = $_POST["nome"];
	$endereco = $_POST["endereco"];
	$bairro = $_POST["bairro"];
	$cidade = $_POST["cidade"];
	$estado = $_POST["estado"];
	$cep = $_POST["cep"];
	$email = $_POST["email"];
	$tefelone = $_POST["telefone"];
	$diretor = $_POST["diretor"];
	$mapa = $_POST["mapa"];


 	
 
	$consulta = $con->prepare("INSERT INTO escolas (nome, endereco, bairro, cidade, estado, cep, email, telefone, diretor,mapa) VALUES (:nome, :endereco, :bairro, :cidade, :estado, :cep, :email, :telefone, :diretor, :mapa)");
	$consulta->bindValue(":nome", $nome);
	$consulta->bindValue(":endereco", $endereco);
	$consulta->bindValue(":bairro", $bairro);
	$consulta->bindValue(":cidade", $cidade);
	$consulta->bindValue(":estado", $estado);
	$consulta->bindValue(":cep", $cep);
	$consulta->bindValue(":email", $email);
	$consulta->bindValue(":tefelone", $telefone);
	$consulta->bindValue(":diretor", $diretor);
	$consulta->bindValue(":mapa", $mapa);
	$consulta->execute();

	print_r($_POST);
	?>
