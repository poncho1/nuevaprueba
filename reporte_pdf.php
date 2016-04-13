<?php
session_start();
 include "conexion.php";
 if (isset($_SESSION['Usuario'])){
     
 }  else {
     header("Location:./index.php?Error=Acceso denegado");   
}
?>

<?php

		require_once("dompdf/dompdf_config.inc.php");
                include 'conexion.php';


$codigoHTML='
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reporte de ventas Ferrateria VICASA</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td><CENTER><strong>REPORTE DE VENTAS</strong></CENTER></td>
  </tr>
  <tr>
    
    <td><strong>N de Venta</strong></td>
    <td><strong>Imagen</strong></td>
    <td><strong>Nombre</strong></td>
    <td><strong>Precio</strong></td>
    <td><strong>Cantidad</strong></td>
    <td><strong>Subtotal</strong></td>
  </tr>';

$sql=mysql_query("select * from compras");
$numeroventa=0;
while($res=mysql_fetch_array($sql)){
$codigoHTML.='
	  <tr>
                <td>'.$res['numeroventa'].'</td>
		<td><img src="./productos/'.$res['imagen'].'" width="100px" height="100px" /></td>
		<td>'.$res['nombre'].'</td>
		<td>'.$res['ppublico'].'</td>
		<td>'.$res['cantidad'].'</td>
		<td>'.$res['subtotal'].'</td>										
	</tr>';
}

$codigoHTML.='
</table>
</body>
</html>';
$codigoHTML=utf8_encode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("Reporte_tabla_ventas.pdf");
?>