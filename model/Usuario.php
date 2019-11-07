<?php 
include "../config/conexao.php";


class Usuario{

	public function CadastrarUsuario($nome, $email, $endereco, $cidade, $estado, $senha) {

		$con = Connection::getConn();
		$consulta = $con->prepare("INSERT INTO usuario (nome, email, endereco, cidade, estado, senha) VALUES (:nome, :email, :endereco, :cidade, :estado, :senha)");
			$consulta->bindValue(":nome", $nome);
			$consulta->bindValue(":email", $email);
			$consulta->bindValue(":endereco", $endereco);
			$consulta->bindValue(":cidade", $cidade);
			$consulta->bindValue(":estado", $estado);
			$consulta->bindValue(":senha", $senha);
			$consulta->execute();
			}
 	
 	public function login($email, $senha) {
 		$con = Connection::getConn();
 		$consulta = $con->prepare("SELECT * FROM usuario WHERE email = ? and senha = ?");
		$consulta->bindValue(1, $email);
		$consulta->bindValue(2, $senha);
		$consulta->execute();


		if ($consulta->rowCount() > 0 ) {
			session_start();
			$_SESSION["logado"] = $consulta->fetch();
	 	return true;
	 	}
	 	return false;




}


?>