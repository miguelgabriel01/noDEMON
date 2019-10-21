<?php
session_start();
$senha = $_POST['senha'] ?? '' ;
$email = $_POST['email'] ?? '' ;

 
 $dados = file('Usuarios.csv');
 for($i = 0; $i < sizeof($dados); $i++) {
 $dados[$i] = explode(",",TRIM($dados[$i]));
	if ($senha ==  $dados[$i][5] && $email ==  $dados[$i][1]){
		    $_SESSION['autorizado'] = true;
		    
		   // salva na sessão o CPF do indivíduo
break;
	}
 }
 header('location: addescola.php');
 
 ?>