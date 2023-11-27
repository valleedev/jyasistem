<?php
session_start();
require_once("conexion.php");

$sql="delete from usuarios 
where
	cedula ='".$_POST["cedula"]."'";

 $res=mysqli_query($con,$sql);
 
  if ($res == 1) {
		echo "<script type='text/javascript'>
		   alert('El usuario ".$_POST["nombre_completo"]."se elimin\u00F3 correctamente');
		   window.location= 'ver_caja_usuarios.php';
	      </script>";
	}else
    {  
			echo "<script type='text/javascript'>
		   alert('Hubo un error al eliminar el usuario');
		   window.location='ver_caja_usuarios.php';
	      </script>";
	}
?>
