<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=0.2">
<title>login</title>
</head>
<style>

*{
	margin: 0px;
	padding: 0px;
	        font-family: comic sans MS;
	            


}	

body{
	background-image: url("008.jpg");
	background-repeat:no-repeat;
	background-size: 100%;
	background-position: center;
}
nav{
	width: 100%;
	height: 100px;
	background: rgba(0,0,0,0.3);
	position: relative;
	bottom: 200%;
}
a{
text-decoration: none;
color: white;
font-size: 30px;
}

.login{
text-decoration: none;
color: white;
font-size: 35px;
border-radius: 10px;
border-bottom-right-radius: 20px;
border: ;
height: 20px;
width: 30px;
text-align: center;
	
}
li{
	display: inline-block;
	position: relative;
	right: -60%;
	bottom: -4%;
	padding:  8px;
}
h3{
	color: white;
	font-size: 60px;
}
.logo{
	position: relative;
	left: 3%;
	font-size: 50px;
	bottom: -12px;
}
.p{
	width: px;
	height: px;
	bottom: px;
	right: ;
text-align: center;
position: relative;
font-size: 30px;
overflow: hidden;
color: black;
}

/*
.img{
	width: 100%;
	height: 800px;
	position: relative;
	border-bottom-right-radius: 19%;
	margin: 0;
	background-image: url("000.jpg");
	background-repeat: no-repeat;
	background-size: 100%;
	background-position: center;
}
*/





.principal{
	position: absolute;
	top:350%;
	left:83%;
	transform:translate(-50%,-50%);
	width:400px;
	padding:40px;
	background: rgba(0,0,0,0.6);
	box-sizing: border-box;
	box-shadow:0 15px 25px rgba(0,0,0,.5);
	border-radius:10px;
}

.principal h2{
	margin:0 0 30px;
	padding:0;
	color:#fff;
	text-align: center;
}

.principal .meio{
	position: relative;

}

.principal .meio input{
	width:100%;
	padding:10px 0;
	font-size:16px;
	color:#fff;
	letter-spacing:1px;
	margin-bottom:30px;
	border:none;
	border-bottom:1px solid;
    outline:none;
    background: transparent;
}

.principal .meio label{
	position: absolute;
	top:0;
	left:0;
	padding:10px 0;
	font-size:16px;
	color:#fff;
    pointer-events: none;
    transition: .5s;
}
.principal .meio input:focus~label,
.principal .meio input:valid~label
{
top:-18px;
left:0;
color:green;
font-size:16px;
}


.principal input[type="submit"]{
	background: transparent;
	border: none;
	outline: none;
	color:#fff;
	background:green;
	padding:10px 20px;
	cursor: pointer;
	border-radius:10px;

}









	@keyframes my-animation {        
  from {
    opacity : 0;
    left : -500px;
  }
  to {
    opacity : 1;
    left : 0px;
  }      
}
 
.run-animation {
  position: relative;
  animation: my-animation 5s ease;
  animation-interation-count:3;
  }
 
#logo {
  text-align: center;
  font-family : Palatino Linotype, Book Antiqua, Palatino, serif;
  font-size:60px;
  color: white;
  float: none;
  position: relative;
  bottom:-100px;

  	        font-family: comic sans MS;

}
 
</style>
<script type="text/javascript">
	
	// This changes everything
"use strict";
 
// retrieve the element
var element = document.getElementById("logo");
 
// reset the transition by...
element.addEventListener("click", function(e){
  e.preventDefault;
  
  // -> removing the class
  element.classList.remove("run-animation");
  
  // -> triggering reflow /* The actual magic */
  // without this it wouldn't work. Try uncommenting the line and the transition won't be retriggered.
  // This was, from the original tutorial, will no work in strict mode. Thanks Felis Phasma! The next uncommented line is the fix.
  // element.offsetWidth = element.offsetWidth;
  
  void element.offsetWidth;
  
  // -> and re-adding the class
  element.classList.add("run-animation");
}, false);
 
</script>




</style>

<body>


<nav>
	<a href="#" class="logo">SERMR</a>
<li><a href="index.php" class="login">Login</a></li>
<li><a href="sobre.php">Sobre</a></li>
<li><a href="#">Suporte</a></li>


    <div class="img">
	<h1 id="logo" class="run-animation">
  
</h1>

<div class="p">
 



</div>


<div class="principal">
	<h2> Cadastro de usuário</h2>
  <form action="adicionar.php" method="POST">

   <div class="meio">
      <input type="text" name="nome" required="">
      <label>Nome</label>
   </div>

    <div class="meio">
       <input type="email" name="mail" id="email" required="">
       <label>E-mail</label>
    </div> 

    <div class="meio">
       <input type="password" name="senha" required="" >
       <label>Senha</label>
    </div> 

    <div class="meio">
       <input type="password" name="senhac" required="">
       <label>Confirma senha</label>
    </div> 

    <input type="submit" name="" value="Salvar">
     
 </form>
       
</div>

  
 </body>
</html>
