<?php
session_start();
require_once("conexion.php");

$sql="Update inventario 
       Set    foto = '".$_POST["foto"]."',
	        ficha_tecnica = '".$_POST["ficha_tecnica"]."',
             tipo = '".$_POST["tipo"]."',
	         cantidad = '".$_POST["cantidad"]."',
             elemento = '".$_POST["elemento"]."',
             costo = '".$_POST["costo"]."',
			 precio_total = '".$_POST["precio_total"]."',
	         id_inventario = '".$_POST["id_inventario"]."'

			
       where id_inventario ='".$_POST["id_inventario"]."'";
	   
	   $res = mysqli_query($con, $sql);

	   if (($res) == 1)
{
		echo "<script type='text/javascript'>
		alert('El inventario ".$_POST["elemento"]." fue actualizado');
		window.location='ver_caja_inventario.php';
	</script>";

}else
{	
	echo "<script type='text/javascript'>
		alert('El inventario ".$_POST["elemento"]." no fue actualizado. Intente Nuevamente');
		window.location='ver_caja_inventario.php';
	</script>";
}
?>