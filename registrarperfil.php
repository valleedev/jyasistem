<?php
session_start();
require_once("conexion.php");


$directorioDestino = 'images/';
$archivoTemp = $_FILES['foto']['tmp_name'];
$nombreArchivo = $_FILES['foto']['name'];
move_uploaded_file($archivoTemp, $directorioDestino.$nombreArchivo);


$sql="insert into usuarios ( cedula, foto, nombre_completo, contrasena, correo_electronico, telefono, cargo) 
values
('".$_POST["cedula"]."','$nombreArchivo', '".$_POST["nombre_completo"]."','".$_POST["contrasena"]."','".$_POST["correo_electronico"]."','".$_POST["telefono"]."','".$_POST["cargo"]."')";

$res=mysqli_query($con,$sql);

if ($res == 1) 

{
		echo "<script type='text/javascript'>
		alert('".$_POST["nombre_completo"]." fue ingresado correctamente, debes iniciar sesión');
		window.location='Principal.html';
	</script>";
}else
{

	
	echo "<script type='text/javascript'>
		alert('".$_POST["nombre_completo"]." tu Usuario no fue ingresado correctamente, intenta nuevamente');
		window.location='Formulario_insert_usuarios.html';
	</script>";
}
?>