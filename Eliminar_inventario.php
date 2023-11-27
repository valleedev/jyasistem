<?php
session_start();
require_once("conexion.php");

$sql="delete from inventario 
where
	id_inventario ='".$_POST["id_inventario"]."'";

 $res=mysqli_query($con,$sql);
 
  if ($res == 1) {
		echo "<script type='text/javascript'>
		   alert('El elemento ".$_POST["elemento"]."se elimin\u00F3 correctamente');
		   window.location= 'ver_caja_inventario.php';
	      </script>";
	}else
    {  
			echo "<script type='text/javascript'>
		   alert('Hubo un error al eliminar el elemento');
		   window.location='ver_caja_inventario.php';
	      </script>";
	}
?>