<?php
  //session_start();
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

  if (!empty($nome) && !empty($email) && !empty($endereco) && !empty($cidade) && !empty($estado) && !empty($senha) ) {

    $usuario->cadastrarUsuario($nome, $email, $endereco, $cidade,$estado, $senha);
      $usuario->login($email, $senha);
      header("Location: /index.php?msg=Usuário cadastrado com sucesso!");
/*

     
    if($usuario->verificaUsuarioExiste($_POST["nome"])) {
      $usuario->cadastrarUsuario($nome, $email, $endereco, $cidade,$estado, $senha);
      $usuario->login($email, $senha);
      header("Location: /index.php");
    } else {
      header("Location: /views/cadastro.php?message=Usuario já cadastrado.");
    }
  */
  } else {
    header("Location: /cadastro_usuario.php?message=Preencha todos os campos.");
  }


?>