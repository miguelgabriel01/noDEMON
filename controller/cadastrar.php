<?php
  session_start();
  include "../model/Usuario.php";
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $endereco = $_POST["endereco"];
  $cidade = $_POST["cidade"];
  $estado = $_POST["estado"];
  $senha = $_POST["senha"];
  
  $usuario = new Usuario();
  //if($cidade != $estado) {
    //header("Location: /views/cadastro.php?message=Senhas nao coincidem.");
  //  exit();
  //}
  if (!empty($endereco) && !empty($cidade) && !empty($nome) && !empty($email) && !empty($senha) && !empty($estado) ) {
    if($usuario->verificaUsuarioExiste($_POST["endereco"])) {
      $usuario->cadastrarUsuario($nome, $email, $endereco, $cidade, $senha);
      $usuario->login($email, $senha);
      header("Location: /index.php");
    } else {
      header("Location: /views/cadastro.php?message=Usuario já cadastrado.");
    }
  } else {
    header("Location: /views/cadastro.php?message=Preencha todos os campos.");
  }