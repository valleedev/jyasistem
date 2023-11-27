<?php
require_once("conexion.php");

$sql="select * from productos";

$resul = mysqli_query($con, $sql);

?>

<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="css/estilos10.css">
</head>

<body>
	
	<p align="center"><strong> Informacion basica de los productos </strong></p>
	
if (mysqli-num-rows($resul) == 0)
{
	echo "<script type='text/javascript'> alert('No hay resultados de la busqueda'); window.location='contenidos.php';</script>";

}
	else
	
</body>
</html>