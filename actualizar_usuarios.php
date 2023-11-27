<?php
session_start();
require_once("conexion.php");

$sql="Update usuarios 
       Set  id_usuario         	= '".$_POST["id_usuario"]."',
	         cedula         	= '".$_POST["cedula"]."',
			 foto         	= '".$_POST["foto"]."',
             nombre_completo    = '".$_POST["nombre_completo"]."',
	         contrasena       = '".$_POST["contrasena"]."',
	         correo_electronico    = '".$_POST["correo_electronico"]."',
             telefono     = '".$_POST["telefono"]."',
             cargo       = '".$_POST["cargo"]."'

			
       where id_usuario ='".$_POST["id_usuario"]."'";
	   
	   $res = mysqli_query($con, $sql);

	   if (($res) == 1)
{
		echo "<script type='text/javascript'>
		alert('El usuario ".$_POST["nombre_completo"]." fue actualizado');
		window.location='ver_caja_usuarios.php';
	</script>";

}else
{	
	echo "<script type='text/javascript'>
		alert('El usuario ".$_POST["nombre_completo"]." no fue actualizado. Intente Nuevamente');
		window.location='ver_caja_usuarios.php';
	</script>";
}
?>