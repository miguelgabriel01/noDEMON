<?php

$conn = new PDO("mysql:host=localhost;dbname=SNRC", "root", "ifpe");
	
	$id = $_POST["id"];
	$comment = $_POST["comment"];

	$consulta = $conn->prepare("INSERT INTO comments (comment, id_usuario) VALUES (:comment, :idUsuario)");
	$consulta->bindValue(":comment", $comment);
	$consulta->bindValue(":idUsuario", $id);
	$consulta->execute();

     header('location:dados_escola.php?msg=comentario cadastrado com sucesso!');
?>
