<?php
session_start();
include "../conexion.php";
		$arreglo=$_SESSION['carrito'];
		 for($i=0;$i<count($arreglo);$i++){
						//Consulto la cantidad en stcck dependiendo del Id que baya el ciclo For
						$re=mysql_query("select existencia from productos where id=".$arreglo[$i]['Id'])or die(mysql_error());
						while ($f=mysql_fetch_array($re)) {
							//hago el calculo de cuantos van a quedar en Stock
							$x=$f['existencia']-$arreglo[$i]['Cantidad'];
							//Actualizo el registro stock de la BD
							mysql_query("update productos set existencia=".$x." where id=".$arreglo[$i]['Id'])or die(mysql_error());
                                                     if($f['existencia']<2 || $f['existencia']==0){
                                                        echo"<center>Ya no tienes ".$arreglo[$i]['Nombre']." realiza pedido<center>";
                                                     echo '<center><a href="./carritodecompras.php"></a></center>;';
                                                  }  else {
                                                      $numeroventa=0;

		$re=mysql_query("select * from compras order by numeroventa DESC limit 1") or die(mysql_error());	
		while (	$f=mysql_fetch_array($re)) {
					$numeroventa=$f['numeroventa'];	
		}
		if($numeroventa==0){
			$numeroventa=1;
		}else{
			$numeroventa=$numeroventa+1;
		}
		for($i=0; $i<count($arreglo);$i++){
			mysql_query("insert into compras (numeroventa, imagen,nombre,ppublico,cantidad,subtotal) values(
				".$numeroventa.",
				'".$arreglo[$i]['Imagen']."',
				'".$arreglo[$i]['Nombre']."',	
				'".$arreglo[$i]['Precio']."',
				'".$arreglo[$i]['Cantidad']."',
				'".($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])."'
				)")or die(mysql_error());
		}

                                                  }
						}

    
						
					}                                      
unset($_SESSION['carrito']);
 
 ?>