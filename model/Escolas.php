<?php 
   include "../config/conexao.php";

   class Escolas{
   	public function cadastrarEscolas($nome, $endereco, $cidade, $cep, $telefone, $mapa)
   	$con = Connection::getConn();
	$consulta = $con->prepare("INSERT INTO escolas (nome, endereco, cidade, cep, telefone, mapa) VALUES (:nome, :endereco, :cidade, :cep, :telefone, :mapa)");
	$consulta->bindValue(":nome", $nome);
	$consulta->bindValue(":endereco", $endereco);
	$consulta->bindValue(":cidade", $cidade);
	$consulta->bindValue(":cep", $cep);
	$consulta->bindValue(":telefone", $telefone);
	$consulta->bindValue(":mapa", $mapa);
	$consulta->execute();

   	}
   
  }

?>