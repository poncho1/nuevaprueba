﻿<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Login Ferreteria VICASA</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>

</head>
<style type=text/css>
      
 
form{
	width: 20%;
margin: 20px auto;
 border-radius:10px;
box-shadow:#666 10px 10px 20px;
} 
.aceptar{
	background-color: #5FB404;
	color:white;
	padding-left: 30px;
	padding-right: 20px;
	border-radius: 8px;
	font-size: 1.3rem;

}
	
body{
	background-color: C0E7F7;
	
}
html{
	padding: 0px;
	margin: 0px;
}
.usu{
	width: 80%;
	height: 30px;
	border:1px solid #fafafa;
	color:#1e1e1e;
}
footer{
clear:both;
padding-top:300px;
}

footer p{
  text-align:center;
font:1.2em Georgia, "Times New Roman", times, serif;
color:#666;
margin:10px, 8px;
}

 </style>
<body>
 <img src="ferreteria.jpg"  width="1180" height="200">

	<section><br>
	<form id="formulario" method="post" action="./login/verificar.php">
		<?php 
		if(isset($_GET['error'])){
			echo '<center><FONT FACE="small fonts" SIZE=4 COLOR="#000000">Datos No Validos</FONT></center>';
		}
		?>

		&nbsp;&nbsp;&nbsp;<label for="usuario">Usuario</label><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<IMG SRC="./usuario.jpg"><input type="text" id="usuario" name="Usuario" placeholder="Usuario" class="usu" ><br>
		&nbsp;&nbsp;&nbsp;<label for="password">Password</label><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<IMG SRC="./pass.jpg"><input type="password" id="password" name="Password" placeholder="Password" class="usu" ><br><br>
		&nbsp;&nbsp;&nbsp;<input type="submit" name="aceptar" value="Aceptar" class="aceptar">
                


	</form>

	</section>
<footer>
<p>Derechos reservados &copy 2016 Ferreteria VICASA </p>
</footer>
</body>
</html>