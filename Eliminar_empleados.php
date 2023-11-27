<?php
session_start();
require_once("conexion.php");

$sql="delete from empleados 
where
	id_empleado ='".$_POST["id_empleado"]."'";

 $res=mysqli_query($con,$sql);
 
  if ($res == 1) {
		echo "<script type='text/javascript'>
		   alert('El empleado ".$_POST["nombre"]."se elimin\u00F3 correctamente');
		   window.location= 'ver_caja_empleados.php';
	      </script>";
	}else
    {  
			echo "<script type='text/javascript'>
		   alert('Hubo un error al eliminar el empleado');
		   window.location='ver_caja_empleados.php';
	      </script>";
	}
?>