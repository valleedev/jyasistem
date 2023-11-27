<?php
require_once("conexion.php");

$sql="select * from usuarios Where id_usuario='".$_POST["id_usuario"]."' ";

 
$resul = mysqli_query($con, $sql);
?> 
 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Actualizar usuarios</title>
<link rel="stylesheet" href="css/estilosform.css">
</head>
<body>

   
<?php
while ($reg=mysqli_fetch_array($resul)) 
{	
?> 




<div class="container">
<div class="volver">
    <a href="ver_caja_usuarios.php">
		 <img src="images/arrow-back-regular-24.png" alt="imagen no encontrada">
		</a>
</div>

<P align="center"> MODIFICAR USUARIOS </P>


  <form action="actualizar_usuarios.php" method="post">
   <p>

   <div class="form first">
			<div class="details personal">

	<div class="fields">

 <div class="input-field">
      <label for="cedula"><strong>Cedula </strong></label>  
      <input type="text" value= "<?php echo $reg["cedula"]; ?> " name="cedula" class="form-input">
     </div>

     <div class="input-field">
      <label for="nombre_completo"><strong>Nombre_Completo </strong></label>  
      <input type="text" value= "<?php echo $reg["nombre_completo"]; ?> " name="nombre_completo" class="form-input">
     </div>

     <div class="input-field">
      <label for="foto"><strong>Foto </strong></label>  
      <input type="file" value= "<?php echo $reg["foto"]; ?> " name="foto" class="form-input">
     </div>

     <div class="input-field">
      <label for="contrasena"><strong>Contraseña</strong></label>  
      <input type="text" value= "<?php echo $reg["contrasena"]; ?> " name="contrasena" class="form-input">
     </div>

     <div class="input-field">
      <label for="correo_electronico"><strong>Correo_Electronico </strong></label>  
      <input type="text" value= "<?php echo $reg["correo_electronico"]; ?> " name="correo_electronico" class="form-input">     
     </div>

     <div class="input-field">
      <label for="Telefono"><strong>TELEFONO </strong></label>  
      <input type="text" value= "<?php echo $reg["telefono"]; ?> " name="telefono" class="form-input">      
     </div>

     <div class="input-field">
      <label for="cargo"><strong>Cargo </strong></label>  
      <input type="text" value= "<?php echo $reg["cargo"]; ?> " name="cargo" class="form-input">        
     </div>

      <input type="hidden" value= "<?php echo $reg["id_usuario"]; ?> " name="id_usuario" class="form-input">
   
	   
      <center> 
      <p>
      <input class="buttom" name="submit" type="submit" value="MODIFICAR USUARIO" />
      </p>
      </center> 
  </form>
  
</div>
  </div>
</div>
</div>
<?php
}
?>
</body>
</html>
