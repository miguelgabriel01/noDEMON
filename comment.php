<?php
$conn = new PDO("mysql:host=localhost;dbname=SNRC", "root", "ifpe");
	
	$id = $_POST["id"];
	$comment = $_POST["comment"];
	$id_escola = $_POST["id_escola"];
	$nome = $_POST["nome"];

	 
	$consulta = $conn->prepare("INSERT INTO comments (comment, id_usuario, id_escolas, nome) VALUES (:comment, :id_usuario, :id_escolas, :nome)");
	$consulta->bindValue(":comment", $comment);
	$consulta->bindValue(":id_usuario", $id);
	$consulta->bindValue(":id_escolas", $id_escola);
	$consulta->bindValue(":nome", $nome);
	$consulta->execute();

    header('location:dados_escola.php?xpto='.$id_escola);


    ?>
