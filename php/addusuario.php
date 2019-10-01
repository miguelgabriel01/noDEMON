<?php

 $dado = $_POST['nome'] . ',' . $_POST['email'] . ',' . $_POST['endereco'] . ',' . $_POST['cidade'] . ',' . $_POST['estado'] .  ',' . $_POST['senha'] .  ',' . $_POST['senhaconfirmada'] . "\n";

    $handle = fopen('usuarios.csv', 'a');
    fwrite($handle, $dado); 
    header("location:/index.php");
?>