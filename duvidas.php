<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulario</title>
</head>
<style>
	
body{
	margin:0;
	padding:0;
	font-family:sans-serif;
	background: url(img1.jpg);
	background-size: cover;
	background-color:darkcyan;
}

.principal{
	position: absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	width:400px;
	padding:40px;
	background: rgba(0,0,0,.8);
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
color:#03a9f4;
font-size:12px;
}


.principal input[type="submit"]{
	background: transparent;
	border: none;
	outline: none;
	color:#fff;
	background:#03a9f4;
	padding:10px 20px;
	cursor: pointer;
	border-radius:10px;

}

textarea{
border:1px solid black;
width:300px;
height:60px;
font-size:20px;
color:black;
}
</style>

<body>

<div class="principal">
	
	<h2>Dúvidas</h2>
    
    <form>

    	  <div class="meio">
           <input type="text" name="" required="">
            <label>nome</label>
        
        </div>
        
        <div class="meio">
        <input type="email" name="" required="">
        <label>email</label>
        
        </div>

            	<div class="meio">
             <textarea></textarea>
              <label></label>
        
        </div> 
    
        <input type="submit" name="" value="enviar">
       </form>
       
       </div>

	
</body>
</html>