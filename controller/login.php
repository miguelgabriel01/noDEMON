<?php

require_once "../model/Usuario.php";

$email = $_POST["email"];
$senha = $_POST["senha"];


$usuario = new Usuario();

if(!empty($email) && !empty($senha)){
	if ($usuario->login($email, $senha)){
	header("Location: ../index.php?msg=Usuário logado com sucesso!");
	} else{
	header('location: ../view/login.php?msg=Login ou Senha inválidos.');
	}
}
?>