<?php
  include "../model/Comments.php";

 	$id = $_POST["id"];
 	$comment = $_POST["comment"];
 	$id_escola = $_POST["id_escola"];
 	$nome = $_POST["nome"];

 	$comentario = new Comments();

   print_r($_POST);
 if(!empty($id) && !empty($comment) && !empty($id_escola) && !empty($nome)){

 	$comentario->Comentar($comment, $id, $id_escola, $nome);

 	header('location: ../dados_escola.php?xpto='.$id_escola);
	}
?>
