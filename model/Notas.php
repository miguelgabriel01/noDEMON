<?php
include "../config/conexao.php";

class Notas{
    public function Insercao($nota_port, $nota_mat, $nota_red, $nota_ch, $nota_ce, $nota_enem, $ano, $id_escolas){
        $con = Connection::getConn();
        $consulta = $con->prepare("INSERT INTO notas(nota_port, nota_mat, nota_red, nota_ch, nota_ce, nota_enem, ano, id_escolas) VALUES (:nota_port, :nota_mat, :nota_red, :nota_ch, :nota_ce, :nota_enem, :ano, :id_escolas)");
        $consulta->bindValue(":nota_port", $nota_port);
        $consulta->bindValue(":nota_mat", $nota_mat);
        $consulta->bindValue(":nota_red",$nota_red);
        $consulta->bindValue(":nota_ch", $nota_ch);
        $consulta->bindValue(":nota_ce", $nota_ce);
        $consulta->bindValue(":id_escolas", $id_escolas);
        $consulta->bindValue(":nota_enem", $nota_enem);
        $consulta->bindValue(":ano", $ano);
        $consulta->execute();
    }

    public function Selec($id){
            $con = Connection::getConn();
            $consulta = $con->prepare("SELECT * FROM notas WHERE id_escolas = :id ORDER BY ano;");
            $consulta->bindValue(':id', $id);
            $consulta->execute();
            return $consulta->fetchAll();
    }

    public function notaEscola($id) {
        $con = Connection::getConn();
        $consulta = $con->prepare("SELECT * FROM notas WHERE id_escolas = :id");
        $consulta->bindValue(":id", $id);
        $consulta->execute();
        return $consulta->fetchAll();
    }

 }

?>

