<?php
session_start();

require_once("conexion.php");
//***************************************************************************
//Preguntamos si el usuario existe en la base de datos

$sql="select cedula from usuarios
				  where
                  cedula='".$_POST["cedula"]."'"; 

//Con este comando ejecutamos la consulta 

$resultado = mysqli_query($con, $sql);

//Preguntamos si devolvi� alg�n registro

if (mysqli_num_rows($resultado) == 0)
{
	echo "<script type='text/javascript'>
		alert('".$_POST["cedula"].", no est\u00E1s en la aplicaci\u00F3n, \u00A1debes registrarte!');
		window.location='Principal.html';
	</script>";
}else

{
//******************************************************************************
//Ahora preguntamos en el login y el password coinciden en la base de datos

$consulta="select * from  usuarios
				    where
                   		 cedula='".$_POST["cedula"]."'
                    and
						contrasena='".$_POST["pass"]."' ";

$result = mysqli_query($con, $consulta);

if (mysqli_num_rows($result) == 0)
{
	echo "<script type='text/javascript'>
		alert('La cedula y la contrase\u00F1a no coinciden, intenta nuevamente');
		window.location='Principal.html';
	</script>";
}else
{
//******************************************************************************
//Ahora le damos acceso a nuestros contenidos restringidos
	$_SESSION["usuarios"]=$_POST["cedula"];
	header("Location: plantilla.html");
//******************************************************************************
}
//******************************************************************************
}

?>



