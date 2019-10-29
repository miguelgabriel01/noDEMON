
<?php
	session_start();
	$conn = new PDO("mysql:host=localhost;dbname=id10860157_snrc", "id10860157_root", "123456");

	$email = $_POST["email"];
	$senha = $_POST["senha"];

	$consulta = $conn->prepare("SELECT * FROM usuario WHERE email = ? and senha = ?");
	$consulta->bindValue(1, $email);
	$consulta->bindValue(2, $senha);
	$consulta->execute();


	if ($consulta->rowCount() > 0 ) {
		session_start();
		$_SESSION["logado"] = $consulta->fetchAll()[0]["id"];
		header("Location: /cadastro_escola.php?msg=usuario logado com sucesso!");
		echo "Conectado";
		$_SESSION['logado'] = true;
	} 

?>
