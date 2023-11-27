<?php
session_start();
require_once("conexion.php");

$sql="Update proveedores 
       Set   id_proveedor         	= '".$_POST["id_proveedor"]."',
             tipo    = '".$_POST["tipo"]."',
	         nombre       = '".$_POST["nombre"]."',
	         telefono    = '".$_POST["telefono"]."',
             direccion     = '".$_POST["direccion"]."',
             correo       = '".$_POST["correo"]."',
			 inventario       = '".$_POST["inventario"]."'

			
       where id_proveedor ='".$_POST["id_proveedor"]."'";
	   
	   $res = mysqli_query($con, $sql);

	   if (($res) == 1)
{
		echo "<script type='text/javascript'>
		alert('El proveedor ".$_POST["id_proveedor"]." fue actualizado');
		window.location='Ver_proveedores.php';
	</script>";

}else
{	
	echo "<script type='text/javascript'>
		alert('El proveedor ".$_POST["id_proveedor"]." no fue actualizado. Intente Nuevamente');
		window.location='Ver_proveedores.php';
	</script>";
}
?>