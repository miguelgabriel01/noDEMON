<?php
include "../config/conexao.php";

class Notas{
    public function Insercao($nota_15, $nota_16, $nota_17, $nota_18){
        $con = Connection::getConn();
        $consulta = $con->prepare("INSERT INTO notas(nota_15, nota_16, nota_17, nota_18) VALUES (:nota_15, :nota_16, :nota_17, :nota_18)");
        $consulta->bindValue(":nota_15", $nota_15);
        $consulta->bindValue(":nota_16", $nota_16);
        $consulta->bindValue(":nota_17", $nota_17);
        $consulta->bindValue(":nota_18", $nota_18);


        $consulta->execute();
        return $consulta->fetchAll();
    }
   
    public function Selec($id){
            $con = Connection::getConn();
            $consulta = $con->prepare("SELECT * FROM notas WHERE id = :id;");
            $consulta->bindValue(':id', $id);
            $consulta->execute();
            return $consulta->fetchAll();
        }

 }

?>

