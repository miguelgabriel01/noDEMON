<?php
  include "../config/conexao.php";

  class Escolas{


  public function cadastrarEscolas($nome, $endereco, $cidade, $cep, $telefone, $mapa, $lat, $lot) {
		$con = Connection::getConn();
		$consulta = $con->prepare("INSERT INTO escolas (nome, endereco, cidade, cep, telefone, mapa, lat, lot) VALUES (:nome, :endereco, :cidade, :cep, :telefone, :mapa, :lat, :lot)");
		$consulta->bindValue(":nome", $nome);
		$consulta->bindValue(":endereco", $endereco);
		$consulta->bindValue(":cidade", $cidade);
		$consulta->bindValue(":cep", $cep);
		$consulta->bindValue(":telefone", $telefone);
		$consulta->bindValue(":mapa", $mapa);
		$consulta->bindValue(":lat", $lat);
		$consulta->bindValue(":lot", $lot);
		$consulta->execute();
	}

   public function link(){
   	$con = Connection::getConn();
   	$consulta = $con->prepare("SELECT * FROM escolas ORDER BY nome");
	$consulta->execute();
	return $consulta->fetchAll();
   }

   public function get($id){
   	$con = Connection::getConn();
   	$consulta = $con->prepare("SELECT * FROM escolas WHERE id = :id;");
   	$consulta->bindValue(":id", $id);
   	$consulta->execute();
   	return $consulta->fetchAll();
	 }
		public function deletar($id){
			$con = Connection::getConn();
			$consulta = $con->prepare("DELETE escolas WHERE id = :id;");
			$consulta->bindValue(":id, $id");
			$consulta->execute();
		}

  }
?>
