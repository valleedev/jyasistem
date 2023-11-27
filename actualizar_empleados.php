<?php
session_start();
require_once("conexion.php");

$sql="Update empleados 
       Set   cedula = '".$_POST["cedula"]."',
	         foto = '".$_POST["foto"]."',
             nombre = '".$_POST["nombre"]."',
			 apellido = '".$_POST["apellido"]."',
	         edad = '".$_POST["edad"]."',
             telefono = '".$_POST["telefono"]."',
             sexo = '".$_POST["sexo"]."',
			 correo = '".$_POST["correo"]."',
	         direccion = '".$_POST["direccion"]."',
	         contacto_emergencia = '".$_POST["contacto_emergencia"]."',
             rh = '".$_POST["rh"]."',
             tipo_contrato = '".$_POST["tipo_contrato"]."'


			
       where id_empleado ='".$_POST["id_empleado"]."'";
	   
	   $res = mysqli_query($con, $sql);

	   if (($res) == 1)
{
		echo "<script type='text/javascript'>
		alert('El empleado ".$_POST["nombre"]." fue actualizado');
		window.location='ver_caja_empleados.php';
	</script>";

}else
{	
	echo "<script type='text/javascript'>
		alert('El empleado ".$_POST["nombre"]." no fue actualizado. Intente Nuevamente');
		window.location='ver_caja_empleados.php';
	</script>";
}
?>