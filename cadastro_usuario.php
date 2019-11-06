<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulario</title>
	<link rel="stylesheet" type="text/css" href="css/cadastro_usuario.css">
</head>
<body>
<header>

	<a href="">SNRC</a>
	<nav>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="login.php" >Login</a></li>
    <li><a href="cadastro_usuario.php">Cadastro</a></li>
    <li><a href="sobre.php">Sobre</a></li></li>
	</nav>
</header>

<div class="formulário">
	
	<h2>Usuário</h2>
    
    <form action="add_usuario.php" method="POST">

        <div class="meio">
          <input type="text" name="nome" required="">
          <label>Nome</label>
        </div>

       <div class="meio">
          <input type="email" name="email" required="">
          <label>Email</label>
       </div>    
       
       <div class="meio">
       <input type="text" name="endereco" required="">
       <label>Endereço</label>
       </div>    
       
       <div class="meio">
       <input type="text" name="cidade" required="">
       <label>Cidade</label>
       </div>    
       
       <div class="meio">
       <input type="text" name="estado" required="">
       <label>Estado</label>
       </div>    
       
       <div class="meio">
       <input type="password" name="senha" required="">
       <label>Senha</label>
       </div>    
       
       
    
        <input type="submit" name="" value="entrar">
     </form>
       
</div>

	
</body>
</html>
