<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=0.2">
<script src="myscripts.js"></script>
<title>desenvolvedores</title>
<style>

*{
 margin: 0px;
 padding: 0px;
 font-family: comic sans MS;
 }	


nav{
	width: 100%;
	height: 100px;
	background:rgba(0,0,0,0.3);
	position: relative;
	top:-400px;
   }



a{
text-decoration: none;
color: white;
font-size: 30px;
}


li{
  display: inline-block;
  position: relative;
  right: -50%;
  bottom: -4%;
  padding:  8px;
 }


h3{
  color: white;
  font-size: 60px;
  text-align: center;
  position: relative;
  top: -10%; 
 }

p{
	color: black;
	font-size: 30px;
	text-align: center;
	text-decoration: none;
	text-transform: uppercase;
}




.text{
	position: relative;
	left: 18%;
	top: -55px;
     width: 850px;
	
	overflow: hidden;
}

.logo{
	 position: relative;
	 left: 3%;
	 font-size: 50px;
	 bottom: -10%;
    }


h1{
  text-align: center;
  position: relative;
  top: 100;
  font-size: 50px;
 }


.img{
	width: 100%;
	height: 400px;
	position: relative;
	border-bottom-right-radius: 100px;
	bottom:  -0px;
	background-image: url("000.jpg");
	background-repeat: no-repeat;
	background-size: 100%;
	background-position: center;
   }


.img1{
     width: 700px;
     height: 500px;
     position: relative;
     left: 22%;
     bottom: -10px;
     top: 10px;
     border-radius: 10px;
    	box-shadow:0 15px 25px rgba(0,0,0,.5);


}




.fim{
	width: 110px;
	height: 200px;
}






@keyframes my-animation {        
  from {
       opacity: 0;
      left: -500px;
      }
  to {
     opacity : 1;
     left : 0;
     }      
      }
 
.run-animation {
  position: relative;
  animation: my-animation 2s ease;
  
  }
 
#logo {
      text-align: center;
      font-family : Palatino Linotype, Book Antiqua, Palatino, serif;
      font-size:60px;
      color: white;
      position: relative;
      top: 30%;
  	  font-family: comic sans MS;
      }
 
</style>
<script type="text/javascript">
	
	
"use strict";
 

var element = document.getElementById("logo");
 

element.addEventListener("click", function(e){
  e.preventDefault;
  
  
  element.classList.remove("run-animation");
  
  
  void element.offsetWidth;
  
  
  element.classList.add("run-animation");
}, false);
 
</script>
</head>
<body>
	
<div class="img">
	<h1 id="logo" class="run-animation">
     Sobre o projeto..
   </h1>
</div>

<nav>
	<a href="index.php" class="logo">SERMR</a>
 <li><a href="home.php">Inicio</a></li>
 <li><a href="mapa.php">Mapa</a></li>
 <li><a href="desenvolvedores.php">Desenvolvedores</a></li>
</nav>

  
<div class="text">
<p>
O portal da organização SMRC, é responsavel por explanar dados á respeito da educação, com o intuito de demostrar as escolas que mais possuem déficit financeiro, educacional e estrutural, assim como informa aos pais, professores e estudantes, as melhores instiuiçoes de ensino da região. tendo como base notas em provas nascionais e regionais, qualificação dos profissionais de ensino, localização e infraestrutura. 	

</p>

</div>

<img class="img1" src="002.jpg"></img>

<div class="fim"></div>
</body>
</html>
