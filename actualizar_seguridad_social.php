<?php
session_start();
require_once("conexion.php");

$sql="Update seguridad_social 
       Set   id_seguridad_social = '".$_POST["id_seguridad_social"]."',
             pago = '".$_POST["pago"]."',
	         fecha_limite = '".$_POST["fecha_limite"]."',
             nro_trabajadores = '".$_POST["nro_trabajadores"]."'
			
       where id_seguridad_social ='".$_POST["id_seguridad_social"]."'";
	   
	   $res = mysqli_query($con, $sql);

	   if (($res) == 1)
{
		echo "<script type='text/javascript'>
		alert('El registro fue actualizado');
		window.location='Ver_Seguridad_Social.php';
	</script>";

}else
{	
	echo "<script type='text/javascript'>
		alert('El registro no fue actualizado. Intente Nuevamente');
		window.location='Ver_Seguridad_Social.php';
	</script>";
}
?>