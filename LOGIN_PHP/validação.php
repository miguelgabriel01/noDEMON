<?php
// Tenta se conectar ao servidor MySQL
$conection = mysqli_connect('localhost', 'root', '', 'labautenticacao') or trigger_error(mysql_error());
// Verifica se o POST vem do form de login
if($_POST['fonte'] == "login"){
  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
    header("Location: ../index.php"); exit;
  }
  $usuario = mysqli_real_escape_string($conection, $_POST['usuario']);
  $senha = mysqli_real_escape_string($conection, $_POST['senha']);
  // Validação do usuário/senha digitados
  $sql = "SELECT `id`, `nome`, `nivel` FROM `usuarios` WHERE (`usuario` = '".$usuario ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";
  $query = mysqli_query($conection, $sql);
  
  if (mysqli_num_rows($query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
    echo "Login inválido!";
  } else {
    // Salva os dados encontados na variável $resultado
    $resultado = mysqli_fetch_assoc($query);
    // Se a sessão não existir, inicia uma
    if (!isset($_SESSION)) session_start();
    // Salva os dados encontrados na sessão
    $_SESSION['UsuarioID'] = $resultado['id'];
    $_SESSION['UsuarioNome'] = $resultado['nome'];
    $_SESSION['UsuarioNivel'] = $resultado['nivel'];
    if($resultado['nivel'] == 2){
      // Redireciona o visitante para página restrita
      header("Location: restrito.php"); exit;
    }elseif ($resultado['nivel'] == 1) {
      // Redireciona o visitante para página normal
      header("Location: normal.php"); exit;
    }else{
      // Redireciona o visitante para página de logout
      header("Location: logout.php"); exit;
    }
  }
// Verifica se o POST vem do form de cadastro
}elseif ($_POST['fonte'] == "cadastro") {
  // Verifica se houve POST e se os dados são vazios
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']) OR empty($_POST['email']) OR empty($_POST['nome']))) {
    header("Location: ../index.php"); exit;
  }
  $nome = mysqli_real_escape_string($conection, $_POST['nome']);
  $usuario = mysqli_real_escape_string($conection, $_POST['usuario']);
  $senha = mysqli_real_escape_string($conection, $_POST['senha']);
  $email = mysqli_real_escape_string($conection, $_POST['email']);
  // Validação se o usuário já existe
  $sql = "SELECT `id`, `usuario` FROM `usuarios` WHERE (`usuario` = '".$usuario ."') LIMIT 1";
  $query = mysqli_query($conection, $sql);
  
  if (mysqli_num_rows($query) == 1) {
    // Mensagem de erro quando o usuário já existe
    echo "Usuário já existe!";
    header("Refresh:3; url=cadastro.php"); exit;
  } else{
    // Cadastrar usuário no banco
    $sql = "INSERT INTO `usuarios` VALUES (NULL, '".$nome."', '".$usuario."', SHA1('".$senha."'), '".$email."', 1, 1, NOW()) ";
    $query = mysqli_query($conection, $sql);
    
    if($query){
      echo "".$nome." cadastrado com sucesso!";
      header("Refresh:3; url=../index.php"); exit;
    }else{
      echo "Erro ao cadastrar!";
      header("Refresh:3; url=cadastro.php"); exit;
    }
  }
}
?>