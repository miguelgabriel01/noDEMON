<?php

try{
    $conn = new PDO("mysql:host=localhost;dbname=SNRC", "root", ""); 
}
catch(PDOException $e){
    echo "Erro do Banco de dados: " . $e->getMessage();
}
catch(Exception $e){
    echo "Erro de aplicacao: " . $e->getMessage();
}
?>