<?php
session_start();
// session_destroy();
unset($_SESSION['logado']);
header('location: index.php');
?>