<?php
session_start();
require_once("conexion.php");

$sql="delete from gastos 
where
	id_gasto ='".$_POST["id_gasto"]."'";

 $res=mysqli_query($con,$sql);
 
  if ($res == 1) {
		echo "<script type='text/javascript'>
		   alert('El gasto ".$_POST["id_gasto"]."se elimin\u00F3 correctamente');
		   window.location= 'ver_gastos.php';
	      </script>";
	}else
    {  
			echo "<script type='text/javascript'>
		   alert('Hubo un error al eliminar el gasto');
		   window.location='ver_gastos.php';
	      </script>";
	}
?>