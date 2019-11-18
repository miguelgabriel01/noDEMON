<?php
include "../config/conexao.php";

class Notas{
    public function Insercao($nota_enem, $ano, $id_escolas){
        $con = Connection::getConn();
        $consulta = $con->prepare("INSERT INTO notas(nota_enem, ano, id_escolas) VALUES (:nota_enem, :ano, :id_escolas)");
        $consulta->bindValue(":id_escolas", $id_escolas);
        $consulta->bindValue(":nota_enem", $nota_enem);
        $consulta->bindValue(":ano", $ano);
        $consulta->execute();
    }

    public function Selec($id){
            $con = Connection::getConn();
            $consulta = $con->prepare("SELECT * FROM notas WHERE id_escolas = :id;");
            $consulta->bindValue(':id', $id);
            $consulta->execute();
            return $consulta->fetchAll();
        }

 }

?>

