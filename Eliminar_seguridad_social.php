<?php
session_start();
require_once("conexion.php");

$sql="delete from seguridad_social 
where
	id_seguridad_social ='".$_POST["id_seguridad_social"]."'";

 $res=mysqli_query($con,$sql);
 
  if ($res == 1) {
		echo "<script type='text/javascript'>
		   alert('El registro se elimin\u00F3 correctamente');
		   window.location= 'ver_seguridad_social.php';
	      </script>";
	}else
    {  
			echo "<script type='text/javascript'>
		   alert('Hubo un error al eliminarlo');
		   window.location='ver_seguridad_social.php';
	      </script>";
	}
?>