<?php
session_start();
require_once("conexion.php");

$sql="Update contratos 
       Set   fecha_inicio         	= '".$_POST["fecha_inicio"]."',
             fecha_finalizacion    = '".$_POST["fecha_finalizacion"]."',
	         nombre       = '".$_POST["nombre"]."',
	         descripcion    = '".$_POST["descripcion"]."',
             tipo_contrato     = '".$_POST["tipo_contrato"]."',
             pago       = '".$_POST["pago"]."',
             valor     = '".$_POST["valor"]."',
             id_contrato     = '".$_POST["id_contrato"]."'

			
       where id_contrato ='".$_POST["id_contrato"]."'";
	   
	   $res = mysqli_query($con, $sql);

	   if (($res) == 1)
{
		echo "<script type='text/javascript'>
		alert('El contrato ".$_POST["nombre"]." fue actualizado');
		window.location='Ver_contratos.php';
	</script>";

}else
{	
	echo "<script type='text/javascript'>
		alert('El contrato ".$_POST["nombre"]." no fue actualizado. Intente Nuevamente');
		window.location='Ver_contratos.php';
	</script>";
}
?>