<?php 
	$puxar = $_POST['nome'] . "," . $_POST['mail'] . "," . $_POST['senha'].",".$_POST['senhac']."/n";
	$escrever = fopen("arquivo.csv","a");
	fwrite($escrever, $puxar);
	header("location:login.php");
 ?>
