
<?php
	session_start();
	include "conexao.php";

	$email = $_POST["email"];
	$senha = $_POST["senha"];

	$consulta = $conn->prepare("SELECT * FROM usuario WHERE email = ? and senha = ?");
	$consulta->bindValue(1, $email);
	$consulta->bindValue(2, $senha);
	$consulta->execute();


	if ($consulta->rowCount() > 0 ) {
		session_start();
		$_SESSION["logado"] = $consulta->fetch();
		//print_r($consulta->fetch());
		
		header("Location: /index.php?msg=Usuário logado com sucesso!");
		
	}else{
		header('location: /login.php?msg=Login ou Senha inválidos.');
	}
?>
