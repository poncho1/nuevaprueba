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
	<title>Nuevos proveedores</title>
	
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
<center> <h1>Agregar un nuevo proveedor</h1></center>
<form action="altaproveedor.php" method="post">
<table width="50%"  border="1"><center>
        Proveedor<br>
        <input type="text" name="proveedor">
        <br><br>
        Telefono<br>
        <input type="text" name="telefono">
        <br><br>
        Correo Electronico<br>
        <input type="text" name="correo">
        <br><br>
        Empresa<br>
        <input type="text" name="empresa">
        <br><br>
        Telefono de la empresa<br>
        <input type="text" name="telempresa">
        <br><br>
        Material<br>
        <select type="text"  name="material">
        <option>CONSTRUCCION</option>
        <option>ELECTRICO Y ACCESORIOS</option>
        <option>HERRERIA</option>
        <option>ELECTRONICA</option>
        <option>FERRETERIA</option>
        <option>LIMPIEZA</option>
        <option>PINTURA</option>
        <option>PLOMERIA</option>
        <option>TORNILLERIA</option>
        <option>HERRERIA</option>   
        </select><br><br>
  </center>   
</table>
    <input type="submit" name="accion" value="Agregar" class="aceptar">
</form>
</div>
</body>
</html>