<?php
session_start();
require_once("conexion.php");


$directorioDestino = 'images/';
$archivoTemp = $_FILES['imagen']['tmp_name'];
$nombreArchivo = $_FILES['imagen']['name'];
move_uploaded_file($archivoTemp, $directorioDestino.$nombreArchivo);

$sql="insert into inventario ( imagen, ficha_tecnica, tipo, cantidad, elemento, costo, precio_total) 
values
('$nombreArchivo','".$_POST["ficha_tecnica"]."','".$_POST["tipo"]."','".$_POST["cantidad"]."','".$_POST["elemento"]."','".$_POST["costo"]."','".$_POST["precio_total"]."')";

$res=mysqli_query($con,$sql);

if ($res == 1)
{
		echo "<script type='text/javascript'>
		alert('Fue Ingresado Correctamente');
		window.location='Formulario_Insert_inventario.html';
	</script>";
}else
{

	
	echo "<script type='text/javascript'>
		alert('No Fue Ingresado, Intente Nuevamente');
		window.location='Formulario_Insert_inventario.html';
	</script>";
}
?>