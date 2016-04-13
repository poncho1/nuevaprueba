<?php
	session_start();
	include "./conexion.php";
	if(isset($_SESSION['Usuario'])){
	}else{
		header("Location: ./index.php?Error=Acceso denegado");
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Modificar y/o eliminar productos</title>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript"  src="./modificar.js"></script>
</head>
<body>
<center> <h1>Modificar y/o eliminar productos</h1></center>
<table width="100%">
<th>
    <tr>
        <td>Id</td>
        <td>Codigo</td>
        <td>Clave</td>
        <td>Nombre</td>
        <td>Marca</td>
        <td>Medida</td>
        <td>Precio proveedor</td>
        <td>Precio publico</td>
        <td>Descripcion</td>
        <td>Modificar</td>
        <td>Eliminar</td>
    </tr>
</td>
    <?php
     $resultado=mysql_query("select * from productos");
     while($row=mysql_fetch_array($resultado)){
         echo '
           <tr>
             <td>
                <input type="hidden" value"'.$row[0].'">'.$row[0].'
                <input type="hidden" class="imagen" value="'.$row[10].'">
             </td>
             <td><input type="text" class="codigo" value="'.$row[1].'"></td>
             <td><input type="text" class="clave" value="'.$row[2].'"></td>
             <td><input type="text" class="nombre" value="'.$row[3].'"></td>
             <td><input type="text" class="marca" value="'.$row[4].'"></td>
             <td><input type="text" class="medida" value="'.$row[5].'"></td>
             <td><input type="text" class="pproveedor" value="'.$row[6].'"></td>
             <td><input type="text" class="ppublico" value="'.$row[7].'"></td>
             <td><input type="text" class="descripcion" value="'.$row[9].'"></td> 
             <td><button class="modificar" data-id="'.$row[0].'">Modificar</button></td> 
             <td><button class="eliminar" data-id="'.$row[0].'">Eliminar</button></td>   
            </tr>
          ';
     }
    ?>
    
</table>

</body>
</html>
