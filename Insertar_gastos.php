<?php
session_start();
require_once("conexion.php");

$fecha = date('Y-m-d');


$sql="insert into gastos ( fecha, valor, concepto, comprobante) 
values
('$fecha','".$_POST["valor"]."','".$_POST["concepto"]."','".$_POST["comprobante"]."')";

$res=mysqli_query($con,$sql);

if ($res == 1)
{
		echo "<script type='text/javascript'>
		alert('Gasto ingresado correctamente');
		window.location='Formulario_Insert_gastos.html';
	</script>";
}else
{

	
	echo "<script type='text/javascript'>
		alert('El gasto no fue ingresado, intente nuevamente');
		window.location='Formulario_Insert_gastos.html';
	</script>";
}
?>