<?php

$conn = new PDO("mysql:host=localhost;dbname=SNRC", "root", "");
				
	$nome = $_POST["nome"];
	$endereco = $_POST["endereco"];
	$bairro = $_POST["bairro"];
	$estado = $_POST["estado"];
	$cep = $_POST["cep"];
	$email = $_POST["email"];
	$tefelone = $_POST["telefone"];
	$diretor = $_POST["diretor"];
	$mapa = $_POST["mapa"];
	$senha = $_POST["senha"];


 	
 
	$consulta = $conn->prepare("INSERT INTO escolas (nome, endereco, bairro, estado, cep, email, telefone, diretor,mapa,senha) VALUES (:nome, :endereco, :bairro, :estado, :cep, :email, :telefone, :diretor, :mapa, :senha)");
	$consulta->bindValue(":nome", $nome);
	$consulta->bindValue(":endereco", $endereco);
	$consulta->bindValue(":bairro", $bairro);
	$consulta->bindValue(":estado", $estado);
	$consulta->bindValue(":cep", $cep);
	$consulta->bindValue(":email", $email);
	$consulta->bindValue(":tefelone", $telefone);
	$consulta->bindValue(":diretor", $diretor);
	$consulta->bindValue(":mapa", $senha);
	$consulta->execute();

	print_r($_POST);

	?>
