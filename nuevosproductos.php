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
	<title>Nuevos productos</title>
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
<center> <h1>Agregar un Nuevo Producto</h1></center>
<form action="altaproducto.php" method="post" enctype="multipart/form-data">
<table width="50%"  border="1"><center>
        Codigo<br>
        <input type="text" name="codigo">
        <br><br>
        Clave<br>
        <input type="text" name="clave">
        <br><br>
        Nombre<br>
        <input type="text" name="nombre">
        <br><br>
        Marca<br>
        <input type="text" name="marca">
        <br><br>
        Medida<br>
        <input type="text" name="medida">
        <br><br>
        Precio de proveedor<br>
        <input type="text" name="pproveedor">
        <br><br>
        Precio publico<br>
        <input type="text" name="ppublico">
        <br><br>
        Cantidad en almacen<br>
        <input type="text" name="existencia">
        <br><br>
        Descripcion<br>
        <input type="text" name="descripcion">
        <br><br>
        Imagen<br>
        <input type="file" name="file">
    </center>
</table>
    <input type="submit" name="accion" value="Enviar" class="aceptar">
</form>
</div>
</body>
</html>