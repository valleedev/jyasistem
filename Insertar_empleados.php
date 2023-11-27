<?php
session_start();
require_once("conexion.php");


$directorioDestino = 'images/';
$archivoTemp = $_FILES['foto']['tmp_name'];
$nombreArchivo = $_FILES['foto']['name'];
move_uploaded_file($archivoTemp, $directorioDestino.$nombreArchivo);


$sql="insert into empleados ( cedula, foto, nombre, apellido, edad, telefono, sexo, correo, direccion, contacto_emergencia, rh, tipo_contrato) 
values
('".$_POST["cedula"]."','$nombreArchivo', '".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["edad"]."','".$_POST["telefono"]."','".$_POST["sexo"]."','".$_POST["correo"]."','".$_POST["direccion"]."','".$_POST["contacto_emergencia"]."','".$_POST["rh"]."','".$_POST["tipo_contrato"]."')";

$res=mysqli_query($con,$sql);

if ($res == 1)
{
		echo "<script type='text/javascript'>
		alert('".$_POST["nombre"]." fue ingresado correctamente');
		window.location='Formulario_Insert_empleados.html';
	</script>";
}else
{

	
	echo "<script type='text/javascript'>
		alert('El usuario ".$_POST["nombre"]." no fue ingresado, intente nuevamente');
		window.location='Formulario_Insert_empleados.html';
	</script>";
}
?>