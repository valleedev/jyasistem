<?php
require_once("conexion.php");

$sql="select * from empleados Where id_empleado='".$_POST["id_empleado"]."' ";

 
$resul = mysqli_query($con, $sql);
?> 
 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Actualizar empleados</title>
<link rel="stylesheet" href="css/estilosform.css">
</head>
<body>

  
   
<?php
while ($reg=mysqli_fetch_array($resul)) 
{	
?> 

  <div class="container">

  <div class="volver">
    <a href="ver_caja_empleados.php">
		 <img src="images/arrow-back-regular-24.png" alt="imagen no encontrada">
		</a>
</div>

 <P align="center"> MODIFICAR EMPLEADOS </P>


  <form action="actualizar_empleados.php" method="post">
   <p>

   <div class="form first">
			<div class="details personal">

	<div class="fields">
   
   <div class="input-field">
      <label for="cedula"><strong>Cedula </strong></label>  
      <input type="text" value= "<?php echo $reg["cedula"]; ?> " name="cedula" class="form-input">
      </div>
      
      <div class="input-field">
      <label for="foto"><strong>Foto </strong></label>  
      <input type="file" value= "<?php echo $reg["foto"]; ?> " name="foto" class="form-input">
      </div>  


      <div class="input-field">
      <label for="nombre"><strong>Nombre </strong></label>  
      <input type="text" value= "<?php echo $reg["nombre"]; ?> " name="nombre" class="form-input">
      </div> 
      
       <div class="input-field">
      <label for="apellido"><strong>Apellido</strong></label>  
      <input type="text" value= "<?php echo $reg["apellido"]; ?> " name="apellido" class="form-input">
      </div>  

     <div class="input-field">
      <label for="edad"><strong>Edad </strong></label>  
      <input type="text" value= "<?php echo $reg["edad"]; ?> " name="edad" class="form-input">     
      </div>  

      <div class="input-field">
      <label for="telefono"><strong>Telefono </strong></label>  
      <input type="text" value= "<?php echo $reg["telefono"]; ?> " name="telefono" class="form-input">      
      </div>  

      <div class="input-field">
      <label for="sexo"><strong>Sexo </strong></label>  
      <input type="text" value= "<?php echo $reg["sexo"]; ?> " name="sexo" class="form-input">        
      </div>  

      <div class="input-field">
      <label for="correo"><strong>Correo </strong></label>  
      <input type="text" value= "<?php echo $reg["correo"]; ?> " name="correo" class="form-input">
      </div>  

      <div class="input-field">
      <label for="direccion"><strong>Direccion</strong></label>  
      <input type="text" value= "<?php echo $reg["direccion"]; ?> " name="direccion" class="form-input">
      </div>  

     <div class="input-field">
      <label for="contacto_emergencia"><strong>Contacto_emergencia </strong></label>  
      <input type="text" value= "<?php echo $reg["contacto_emergencia"]; ?> " name="contacto_emergencia" class="form-input">     
      </div>  

      <div class="input-field">
      <label for="rh"><strong>RH </strong></label>  
      <input type="text" value= "<?php echo $reg["rh"]; ?> " name="rh" class="form-input">      
      </div>  

      <div class="input-field">
      <label for="tipo_contrato"><strong>Tipo_contrato </strong></label>  
      <input type="text" value= "<?php echo $reg["tipo_contrato"]; ?> " name="tipo_contrato" class="form-input">   
      </div>  

      <input type = "hidden" value="<?php echo $reg["id_empleado"]; ?> " name="id_empleado">

      <center> 
      <p>
      <input class="buttom" name="submit" type="submit" value="MODIFICAR EMPLEADO" />
      </p>
      </center> 
  </form>
  
  </div>  
  </div>  
  </div>  


<?php
}
?>
</body>
</html>