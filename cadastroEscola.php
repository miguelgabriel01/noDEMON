<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulario</title>
	<link rel="stylesheet" type="text/css" href="css/cadastroescola.css">
</head>


<body>
<header>

	<a href="">SNRC</a>
	<nav>
		<li><a href="index.php">Inicio</a></li>
		<li><a href="sobre.php">Sobre</a></li>
		<li><a href="#">Mapa</a></li>
		<li><a href="escolas.php">Escolas</a></li>
		<li><a href="cadastro.php">cadastro</a></li>

	</nav>
</header>

<div class="formulário">
	
	<h2>escola</h2>
    
    <form  action="php/addescola.php" method="POST" >

        <div class="meio">
          <input type="text" name="escola" required="">
          <label>Nome</label>
        </div>

       <div class="meio">
          <input type="email" name="email" required="">
          <label>email</label>
       </div>    
       
       <div class="meio">
       <input type="text" name="endereco" required="">
       <label>endereço</label>
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
       <input type="text" name="diretor" required="">
       <label>diretor</label>
       </div>   
       
       <div class="meio">
       <input type="number" name="Naluos" required="">
       <label>Quantidade de alunos</label>
       </div>   
       
       <div class="meio">
       <input type="number" name="Nprofessores" required="">
       <label>quantidade de professores</label>
       </div>   
       
       <div class="meio">
       <input type="number" name="Nsalas" required="">
       <label>quantidade de salas</label>
       </div>   
       
       <div class="meio">
       <input type="password" name="senha" required="">
       <label>senha</label>
       </div>    
       
       <div class="meio">
       <input type="password" name="senhaconfirmada" required="">
       <label>confirma senha</label>
       </div>    
    
        <input type="submit" name="" value="entrar">
     </form>
       
</div>

	
</body>
</html>