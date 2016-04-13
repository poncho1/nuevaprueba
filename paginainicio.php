<?php
session_start();
 include "conexion.php";
 if (isset($_SESSION['Usuario'])){
     
 }  else {
     header("Location:./index.php?Error=Acceso denegado");   
}
?>
<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8"/>
 <head>
<title>Ferreteria VICASA</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  src="./js/scripts.js"></script>

<style>
html, body, p, ol, ul, li, pre, code, address, variable, form, fieldset, blockquote {
 padding: 0;
 margin: 0;
 font-size: 100%;
 font-weight: normal;
}
table { border-collapse: collapse; border-spacing: 0; }
td, th, caption { font-weight: normal; text-align: left; }
img, fieldset { border: 0; }
ol { padding-left: 1.4em; list-style: decimal; }
ul { padding-left: 1.4em; list-style:square; }
q:before, q:after { content:''; }
body{
   font-size:62.5%;
}
h1{
text-align:center;
  font:normal 3.4em Verdana, Geneva sans-serif;
  margin: 15px auto;
}
h2{
  text-align:center;
  font:bold 1.7em Verdana, Geneva sans-serif;
}
div{
  text-align:center;
font-size:20px;
style="color:#000000;"
}

section{
width:91%;
border-top:1px dashed #999;
margin:15px auto;
}

figure{
   float:left;
}
 
figure img{

  padding:3px;
backgroud:#c83535;
  border-radius:20px;
-webkit-transition:-webkit-transform 0.3s ease-in-out 0.1s;
box-shadow:#999 5px 5px 10px;
}

figure img:hover{
  -webkit-transform:scale(1.2);
}
figcaption{
  font-family:Arial, Helvatica, sans-serif;
  font-size:2.3em;
  text-align:center;
  margin-top:20px;
}

footer{
clear:both;
padding-top:350px;
}

footer p{
  text-align:center;
font:1.6em Georgia, "Times New Roman", times, serif;
color:#666;
margin:10px, 8px;
}
</style>

  </head>
 <body>

<header>
<hgrup>
  <h1 align:center> Bienvenidos Ferreteria VICASA</h1>
  <h2> Menu principal </h2>
<div>
<script type="text/javascript">
var d=new Date();
var dia=new Array(7);
var mm=new Date();
var m2 = mm.getMonth() + 1;
var mesok = (m2 < 10) ? '0' + m2 : m2;
var mesok=new Array(12);
dia[0]="Domingo";
dia[1]="Lunes";
dia[2]="Martes";
dia[3]="Miercoles";
dia[4]="Jueves";
dia[5]="Viernes";
dia[6]="Sabado";
mesok[0]="Enero";
mesok[1]="Febrero";
mesok[2]="Marzo";
mesok[3]="Abril";
mesok[4]="Mayo";
mesok[5]="Junio";
mesok[6]="Julio";
mesok[7]="Agosto";
mesok[8]="Septiembre";
mesok[9]="Octubre";
mesok[10]="Noviembre";
mesok[11]="Diciembre";
document.write("<BR>Hoy es: " + dia[d.getDay()],', '+d.getDate(),' de '+ mesok[mm.getMonth()],' del '+d.getFullYear());
</script>
</div>

  </hgrup>
</header>
<section>
  <figure>
  <a href="clientes.php"><img src="clientes.png" width="150" height="150"></a>
<figcaption>
  Clientes
</figcaption>
  </figure>
<figure>
<a href="proveedores.php"><img src="proveedores.jpg" width="150" height="150"></a>
<figcaption>
Proveedores
</figcaption>
</figure>
<figure>
<a href="reportes.php"><img src="reportes.png" width="150" height="150"></a>
<figcaption>
Reportes
</figcaption>
</figure>
<figure>
<a href="productos.php"><img src="herramientas.jpg" width="150" height="150"></a>
<figcaption>
Productos
</figcaption>
</figure>
<figure>
<a href="ventas.php"><img src="ventas.jpg" width="150" height="150"></a>
<figcaption>
Ventas
</figcaption>
</figure>
<figure>
<a href="cerrar.php"><img src="salir.jpg" width="150" height="150"></a>
<figcaption>
Salir
</figcaption>
</figure>
</section>
<footer>
<p>Derechos reservados &copy 2016 Ferreteria VICASA </p>
</footer>

 </body>
</html>