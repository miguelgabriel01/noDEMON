<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulario</title>
	<link rel="stylesheet" type="text/css" href="css/cadastroUsuario.css">
</head>


<body>
<header>

	<a href="">SNRC</a>
	<nav>
		<li><a href="index.php">Inicio</a></li>
		<li><a href="sobre.php">Sobre</a></li>
		<li><a href="#">Mapa</a></li>
		<li><a href="escolas.php">Escolas</a></li>
		<li><a href="cadastroUsuario.php">Cadastro</a></li>

	</nav>
</header>

<div class="formulário">
	
	<h2>Usuário</h2>
    
    <form action="php/addusuario.php" method="POST">

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
       
       <div class="meio">
       <input type="password" name="senhaconfirmada" required="">
       <label>Confirma senha</label>
       </div>    
    
        <input type="submit" name="" value="entrar">
     </form>
       
</div>

	
</body>
</html>
