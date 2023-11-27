<?php
session_start();
require_once("conexion.php");

$sql="Update clientes 
       Set   id_cliente = '".$_POST["id_cliente"]."',
             cedula = '".$_POST["cedula"]."',
	         nombre_completo = '".$_POST["nombre_completo"]."',
             telefono = '".$_POST["telefono"]."',
             correo = '".$_POST["correo"]."',
			 sexo = '".$_POST["sexo"]."',
	         pago = '".$_POST["pago"]."'

			
       where id_cliente ='".$_POST["id_cliente"]."'";
	   
	   $res = mysqli_query($con, $sql);

	   if (($res) == 1)
{
		echo "<script type='text/javascript'>
		alert('El cliente ".$_POST["nombre_completo"]." fue actualizado');
		window.location='ver_clientes.php';
	</script>";

}else
{	
	echo "<script type='text/javascript'>
		alert('El cliente ".$_POST["nombre_completo"]." no fue actualizado. Intente Nuevamente');
		window.location='ver_clientes.php';
	</script>";
}
?>