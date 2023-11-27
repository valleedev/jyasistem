<?php
session_start();
require_once("conexion.php");

$sql="insert into clientes ( cedula, nombre_completo, telefono, correo, sexo, pago) 
values
('".$_POST["cedula"]."','".$_POST["nombre_completo"]."','".$_POST["telefono"]."','".$_POST["correo"]."','".$_POST["sexo"]."','".$_POST["pago"]."')";

$res=mysqli_query($con,$sql);

if ($res == 1)
{
		echo "<script type='text/javascript'>
		alert('".$_POST["nombre_completo"]."  Ingresado Correctamente');
		window.location='Formulario_Insert_Clientes.html';
	</script>";
}else
{

	
	echo "<script type='text/javascript'>
		alert('El Usuario ".$_POST["nombre_completo"]." No Fue Ingresado, Intente Nuevamente');
		window.location='Formulario_Insert.html';
	</script>";
}
?>