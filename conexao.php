<?php

try{
    $conn = new PDO("mysql:host=localhost;dbname=id10860157_SNRC", "root", ""); 
}
catch(PDOException $e){
    echo "Erro do Banco de dados: " . $e->getMessage();
}
catch(Exception $e){
    echo "Erro de aplicacao: " . $e->getMessage();
}
?>
