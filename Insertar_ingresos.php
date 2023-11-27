<?php
session_start();
require_once("conexion.php");

$fecha = date('Y-m-d');


$sql="insert into ingresos ( tipo_ingreso, fecha, valor, concepto, remitente) 
values
('".$_POST["tipo_ingreso"]."','$fecha','".$_POST["valor"]."','".$_POST["concepto"]."','".$_POST["remitente"]."')";

$res=mysqli_query($con,$sql);

if ($res == 1)
{
		echo "<script type='text/javascript'>
		alert('Ingresado correctamente');
		window.location='Formulario_insert_ingresos.html';
	</script>";
}else
{

	
	echo "<script type='text/javascript'>
		alert('No fue ingresado, intente nuevamente');
		window.location='Formulario_Insert.html';
	</script>";
}
?>