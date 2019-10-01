<?php

 $dado = $_POST['escola'] . ',' . $_POST['email'] . ',' . $_POST['endereco'] . ',' . $_POST['cidade'] . ',' . $_POST['estado'] .  ',' . $_POST['diretor'] .  ',' . $_POST['Nalunos'] . ',' . $_POST['Nprofessores'] . ',' . $_POST['Nsalas'] . ',' . $_POST['senha'] . ',' . $_POST['senhaconfirmada'] . "\n";

    $handle = fopen('escolas.csv', 'a');
    fwrite($handle, $dado); 
    header("location:/index.php");
?>