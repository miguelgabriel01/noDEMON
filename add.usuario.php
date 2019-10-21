<?php
 $dado = $_POST['nome'] . ',' . $_POST['email'] . ',' . $_POST['endereco'] . ',' . $_POST['cidade'] . ',' . $_POST['cidade'] . ',' .  $_POST['senha'] . "\n";
    $handle = fopen('Usuarios.csv', 'a');
    fwrite($handle, $dado); 
    header("location:index.php");
?>