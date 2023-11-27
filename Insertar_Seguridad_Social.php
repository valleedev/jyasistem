<?php
session_start();
require_once("conexion.php");



$sql="insert into seguridad_social ( pago, fecha_limite, nro_trabajadores) 
values
('".$_POST["pago"]."','".$_POST["fecha_limite"]."','".$_POST["nro_trabajadores"]."')";

$res=mysqli_query($con,$sql);

if ($res == 1)
{
		echo "<script type='text/javascript'>
		alert('Ingresado correctamente');
		window.location='Formulario_insert_Seguridad_Social.html';
	</script>";
}else
{

	
	echo "<script type='text/javascript'>
		alert('No fue ingresado, intente nuevamente');
		window.location='Formulario_Insert_Seguridad_Social.html';
	</script>";
}
?>