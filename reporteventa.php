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
	<title>Reportes</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>


</head>
<body>
 
	<center><h1>Últimas ventas</h1></center>
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
document.write("<BR>Hoy: " + dia[d.getDay()],', '+d.getDate(),' de '+ mesok[mm.getMonth()],' del '+d.getFullYear());
</script>
</div>
        <table border="1px" width="100%">
            <tr>
                <td>Articulo</td>
                <td>Nombre</td>
                <td>Precio</td>
                <td>Cantidad</td>
                <td>Subtotal</td>
            </tr>
            
            <?php
$total=0;
               $re=  mysql_query("select * from compras");
               $numeroventa=0;
               while ($f=mysql_fetch_array($re)){
                   if($numeroventa !=$f['numeroventa']){
                       echo '<tr><td>Nª Compra: '.$f['numeroventa'].'</tr></td>';   
                   }
                   $numeroventa=$f['numeroventa'];
                   echo '<tr>
                   <td><img src="./productos/'.$f['imagen'].'" width="100px" height="100px" /></td>
                   <td>'.$f['nombre'].'</td>
                   <td>'.$f['ppublico'].'</td>
                   <td>'.$f['cantidad'].'</td>
                   <td>'.$f['subtotal'].'</td>
</tr>';
                   $total=$f['subtotal']+$total;
 
                } 
                echo"El total en ventas es: $".$total;  
            ?>
        </table>

</body>
</html>