<?php

$conn = new PDO("mysql:host=localhost;dbname=SNRC", "root", "");
				
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$endereco = $_POST["endereco"];
	$cidade = $_POST["cidade"];
	$estado = $_POST["estado"];
	$senha = $_POST["senha"];


 	
 
	$consulta = $conn->prepare("INSERT INTO usuario (nome, email, endereco, cidade, estado, senha) VALUES (:nome, :email, :endereco, :cidade, :estado, :senha)");
	$consulta->bindValue(":nome", $nome);
	$consulta->bindValue(":email", $email);
	$consulta->bindValue(":endereco", $endereco);
	$consulta->bindValue(":cidade", $cidade);
	$consulta->bindValue(":estado", $estado);
	$consulta->bindValue(":senha", $senha);
	$consulta->execute();
    print_r($_POST);

    header('location:index.php?msg=usuario cadastrado com sucesso!');
	?>