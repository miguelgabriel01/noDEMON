<?php

$conn = new PDO("mysql:host=localhost;dbname=SNRC", "root", "");
				
	$nome = $_POST["nome"];
	$endereco = $_POST["endereco"];
	$cidade = $_POST["cidade"];
	$cep = $_POST["cep"];
	$telefone = $_POST["telefone"];
	$mapa = $_POST["mapa"];


 	
 
	$consulta = $conn->prepare("INSERT INTO escolas (nome, endereco, cidade, cep, telefone, mapa) VALUES (:nome, :endereco, :cidade, :cep, :telefone, :mapa)");
	$consulta->bindValue(":nome", $nome);
	$consulta->bindValue(":endereco", $endereco);
	$consulta->bindValue(":cidade", $cidade);
	$consulta->bindValue(":cep", $cep);
	$consulta->bindValue(":telefone", $telefone);
	$consulta->bindValue(":mapa", $mapa);
	$consulta->execute();

	print_r($_POST);
	header('location:dados_escola.php?msg=escola cadastrada com sucesso!');

	?>