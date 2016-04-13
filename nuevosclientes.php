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
<head>
	<meta charset="utf-8"/>
	<title>Nuevos clientes</title>
	
</head>
<style>
div{
clear:both;
padding:0px;
text-align:center;
}
table{
margin: 20px auto;
 border-radius:10px;
box-shadow:#999 10px 10px 20px;
}
</style>
<body>
<div>
<center> <h1>Agregar un Nuevo Cliente</h1></center>
<form action="altacliente.php" method="post">
<table width="50%"  border="1"><center>
        RFC<br>
        <input type="text" name="rfc">
        <br><br>
        Cliente<br>
        <input type="text" name="nombre">
        <br><br>
        Direccion<br>
        <input type="text" name="direccion">
        <br><br>
        Localidad<br>
        <input type="text" name="localidad">
         <br><br>
        Codigo postal<br>
        <input type="text" name="codigo">
         <br><br>
        Telefono<br>
        <input type="text" name="telefono">
         <br><br>
        Correo Electronico<br>
        <input type="text" name="correo">
 </center>   
</table>
    <input type="submit" name="accion" value="Agregar" class="aceptar">
</form>
</div>
</body>
</html>