<?php
	 include "../config/conexao.php";

	class Comments{
	public function Link($id) {
		$con = Connection::getConn();
		$comentario = $con->prepare("SELECT * FROM comments WHERE id_escolas = :id;");
    $comentario->bindValue(':id', $id);
    $comentario->execute();
    return $comentario->fetchAll();
	}

	public function Comentar($comment, $id_usuario, $id_escolas, $nome){
	 	$con = Connection::getConn();
	 	$consulta = $con->prepare("INSERT INTO comments (comment, id_usuario, id_escolas, nome)
			VALUES (:comment, :id_usuario, :id_escolas, :nome)");
	 	$consulta->bindValue(":comment", $comment);
	 	$consulta->bindValue(":id_usuario", $id_usuario);
	 	$consulta->bindValue(":id_escolas", $id_escolas);
	 	$consulta->bindValue(":nome", $nome);
	 	$consulta->execute();
	}

	}


?>
