<?php
require_once "../model/Escolas.php";

    $id = $_POST["id"];

$escolas = new Escolas();

if(!empty($id)){
    $escolas->deletar($id);

    header("location: ../dados_escolas.php");
}

?>