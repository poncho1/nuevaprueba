<?php
session_start();
include "../conexion.php";
$re=mysql_query("select * from usuarios where Usuario='".$_POST['Usuario']."' AND 
 					Password='".$_POST['Password']."'")	or die(mysql_error());
	while ($f=mysql_fetch_array($re)) {
		$arreglo[]=array('Nombre'=>$f['Nombre'],
			'Apellido'=>$f['Apellido']);
	}
	if(isset($arreglo)){
		$_SESSION['Usuario']=$arreglo;
		header("Location: ../paginainicio.php");
	}else{
		header("Location: ../login.php?error=Datos no validos");
             
	}
?>