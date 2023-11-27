<?php
session_start();
require_once("conexion.php");

$sql="delete from ingresos 
where
	no_recibo ='".$_POST["no_recibo"]."'";

 $res=mysqli_query($con,$sql);
 
  if ($res == 1) {
		echo "<script type='text/javascript'>
		   alert('El ingreso ".$_POST["no_recibo"]."se elimin\u00F3 correctamente');
		   window.location= 'ver_ingresos.php';
	      </script>";
	}else
    {  
			echo "<script type='text/javascript'>
		   alert('Hubo un error al eliminar el ingreso');
		   window.location='ver_ingresos.php';
	      </script>";
	}
?>