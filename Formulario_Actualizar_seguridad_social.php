<?php
require_once("conexion.php");

$sql="select * from seguridad_social Where id_seguridad_social='".$_POST["id_seguridad_social"]."' ";

 
$resul = mysqli_query($con, $sql);
?> 
 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Actualizar seguridad social</title>
<link rel="stylesheet" href="css/estilosform.css">
</head>
<body>

   
<?php
while ($reg=mysqli_fetch_array($resul)) 
{	
?> 


<div class="container">

<div class="volver">
    <a href="Ver_Seguridad_Social.php">
		 <img src="images/arrow-back-regular-24.png" alt="imagen no encontrada">
		</a>
</div>

<P align="center"> MODIFICAR SEGURIDAD SOCIAL </P>
   

  <form action="actualizar_seguridad_social.php" method="post">
   <p>

   <div class="form first">
			<div class="details personal">

	<div class="fields">


     <div class="input-field">
      <label for="pago"><strong>Pago </strong></label>  
      <input type="text" value= "<?php echo $reg["pago"]; ?> " name="pago" class="form-input">
     </div>
  
     <div class="input-field">
      <label for="fecha_limite"><strong>Fecha límite </strong></label>  
      <input type="text" value= "<?php echo $reg["fecha_limite"]; ?> " name="fecha_limite" class="form-input">
     </div>
    
     <div class="input-field">
      <label for="nro_trabajadores"><strong>Nro de Trabajadores</strong></label>  
      <input type="text" value= "<?php echo $reg["nro_trabajadores"]; ?> " name="nro_trabajadores" class="form-input">
     </div>
   
      <input type="hidden" value= "<?php echo $reg["id_seguridad_social"]; ?> " name="id_seguridad_social" class="form-input">
 
   
	   
      <center> 
      <p>
      <input class="buttom" name="submit" type="submit" value="MODIFICAR SEGURIDAD SOCIAL" />
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
