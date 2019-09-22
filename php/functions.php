<?php
 		$humano = "\n" . $_POST['nome'] . ',' . $_POST['email'] . ',' . $_POST['cidade'] $_POST['bairro'] . ',' . $_POST['tel'] . ',' . $_POST['senha'] $_POST['senha'];
    $user = fopen('cadastro.csv', 'a');
    fwrite($user, $humano);
    header("location:cadastro.php"); 
?>
