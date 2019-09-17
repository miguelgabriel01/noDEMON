<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=0.2">
	<title>home</title>
</head>
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
top: -60px;
font-size: 40px;
color: black;
}
.img{
	width: 100%;
	height: 400px;
	position: relative;
	border-bottom-right-radius: 100px;
	top:  -px;
	background-image: url("008.jpg");
	background-repeat: no-repeat;
	background-size: 100%;
	background-position: center;
	opacity: ;
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



.text{
  position: relative;
  left: 18%;
  bottom: -60px;
     width: 850px;
       font-size: 25px;
  
  overflow: hidden;
}


.fim{
	width: 110px;
	height: 200px;
}













	@keyframes my-animation {        
  from {
    opacity : 0;
    left : -500px;
  }
  to {
    opacity : 1;
    left : 0;
  }      
}
 
.run-animation {
  position: relative;
  animation: my-animation 2s ease;
  animation-interation-count:3;
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

<body>
	


<div class="img">
	<h1 id="logo" class="run-animation">
  Bem vindo..
</h1>

</div>


<nav>
	<a href="index.php" class="logo">SERMR</a>
<li><a href="mapa.php">Mapa</a></li>
<li><a href="escolas.php">Escolas</a></li>
<li><a href="desenvolvedores.php">Colaboradores</a></li>

</nav>
<div class="fim"></div>
</body>
</html>
