<?php 
	// Inicia a sessão
    session_start();
    // Destrói a sessão limpando todos os valores salvos
    session_destroy(); 
    // Redireciona o visitante
    header("Location: ../index.php");
exit; 
 ?>