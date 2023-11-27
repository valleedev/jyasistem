<?php
session_start();
require_once("conexion.php");

$sql="Update ingresos 
       Set   no_recibo         	= '".$_POST["no_recibo"]."',
             tipo_ingreso    = '".$_POST["tipo_ingreso"]."',
	         fecha       = '".$_POST["fecha"]."',
	         valor    = '".$_POST["valor"]."',
             concepto     = '".$_POST["concepto"]."',
             remitente       = '".$_POST["remitente"]."'

			
       where no_recibo ='".$_POST["no_recibo"]."'";
	   
	   $res = mysqli_query($con, $sql);

	   if (($res) == 1)
{
		echo "<script type='text/javascript'>
		alert('El ingreso ".$_POST["no_recibo"]." fue actualizado');
		window.location='Ver_ingresos.php';
	</script>";

}else
{	
	echo "<script type='text/javascript'>
		alert('El ingreso ".$_POST["no_recibo"]." no fue actualizado. Intente Nuevamente');
		window.location='Ver_ingresos.php';
	</script>";
}
?>