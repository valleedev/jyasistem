<?php
session_start();
require_once("conexion.php");

$sql="delete from proveedores 
where
	id_proveedor ='".$_POST["id_proveedor"]."'";

 $res=mysqli_query($con,$sql);
 
  if ($res == 1) {
		echo "<script type='text/javascript'>
		   alert('El proveedor ".$_POST["nombre"]."se elimin\u00F3 correctamente');
		   window.location= 'ver_proveedores.php';
	      </script>";
	}else
    {  
			echo "<script type='text/javascript'>
		   alert('Hubo un error al eliminar el proveedor');
		   window.location='ver_proveedores.php';
	      </script>";
	}
?>
