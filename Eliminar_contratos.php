<?php
session_start();
require_once("conexion.php");

$sql="delete from contratos 
where
	id_contrato ='".$_POST["id_contrato"]."'";

 $res=mysqli_query($con,$sql);
 
  if ($res == 1) {
		echo "<script type='text/javascript'>
		   alert('El contrato ".$_POST["nombre"]."se elimin\u00F3 correctamente');
		   window.location= 'ver_contratos.php';
	      </script>";
	}else
    {  
			echo "<script type='text/javascript'>
		   alert('Hubo un error al eliminar el contrato');
		   window.location='ver_contratos.php';
	      </script>";
	}
?>