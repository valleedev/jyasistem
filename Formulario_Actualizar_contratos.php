<?php
require_once("conexion.php");

$sql="select * from contratos Where id_contrato='".$_POST["id_contrato"]."' ";

 
$resul = mysqli_query($con, $sql);
?> 
 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Actualizar contratos</title>
<link rel="stylesheet" href="css/estilosform.css">
</head>
<body>

   
<?php
while ($reg=mysqli_fetch_array($resul)) 
{	
?> 

      
     <div class="container">

     <div class="volver">
    <a href="ver_contratos.php">
		 <img src="images/arrow-back-regular-24.png" alt="imagen no encontrada">
		</a>
</div>

     <P align="center"> MODIFICAR CONTRATOS </P>

  <form action="actualizar_contratos.php" method="post">
   <p>

   
   <div class="form first">
			<div class="details personal">

	<div class="fields">


   <div class="input-field">
      <label for="fecha_inicio"><strong>Fecha_inicio </strong></label>  
      <input type="text" value= "<?php echo $reg["fecha_inicio"]; ?> " name="fecha_inicio" class="form-input">
  </div>
      <div class="input-field">
      <label for="fecha_finalizacion"><strong>Fecha_finalizacion </strong></label>  
      <input type="text" value= "<?php echo $reg["fecha_finalizacion"]; ?> " name="fecha_finalizacion" class="form-input">
      </div>

      <div class="input-field">
      <label for="nombre"><strong>Nombre</strong></label>  
      <input type="text" value= "<?php echo $reg["nombre"]; ?> " name="nombre" class="form-input">
      </div>

     <div class="input-field">
      <label for="descripcion"><strong>Descripcion </strong></label>  
      <input type="text" value= "<?php echo $reg["descripcion"]; ?> " name="descripcion" class="form-input">     
     </div>

      <div class="input-field">
      <label for="tipo_contrato"><strong>Tipo_contrato </strong></label>  
      <input type="text" value= "<?php echo $reg["tipo_contrato"]; ?> " name="tipo_contrato" class="form-input">      
      </div>

      <div class="input-field">
      <label for="pago"><strong>Pago </strong></label>  
      <input type="text" value= "<?php echo $reg["pago"]; ?> " name="pago" class="form-input">        
      </div>

     <div class="input-field">
      <label for="valor"><strong>Valor </strong></label>  
      <input type="text" value= "<?php echo $reg["valor"]; ?> " name="valor" class="form-input">
   </div>

      <input type="hidden" value= "<?php echo $reg["id_contrato"]; ?> " name="id_contrato" class="form-input">
	   
      <center> 
      <p>
      <input class="buttom" name="submit" type="submit" value="MODIFICAR CONTRATO" />
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