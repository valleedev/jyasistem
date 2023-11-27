<?php
require_once("conexion.php");

$sql="select * from gastos Where id_gasto='".$_POST["id_gasto"]."' ";

 
$resul = mysqli_query($con, $sql);
?> 
 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Actualizar gastos</title>
<link rel="stylesheet" href="css/estilosform.css">
</head>
<body>

   
<?php
while ($reg=mysqli_fetch_array($resul)) 
{	
?> 


<div class="container">

<div class="volver">
    <a href="ver_gastos.php">
		 <img src="images/arrow-back-regular-24.png" alt="imagen no encontrada">
		</a>
</div>

<P align="center"> MODIFICAR GASTO </P>
   

  <form action="actualizar_gastos.php" method="post">
   <p>

   <div class="form first">
			<div class="details personal">

	<div class="fields">


     <div class="input-field">
      <label for="fecha"><strong>Fecha </strong></label>  
      <input type="text" value= "<?php echo $reg["fecha"]; ?> " name="fecha" class="form-input">
     </div>
  
     <div class="input-field">
      <label for="valor"><strong>Valor </strong></label>  
      <input type="text" value= "<?php echo $reg["valor"]; ?> " name="valor" class="form-input">
     </div>
    
     <div class="input-field">
      <label for="concepto"><strong>Concepto</strong></label>  
      <input type="text" value= "<?php echo $reg["concepto"]; ?> " name="concepto" class="form-input">
     </div>
      
     <div class="input-field">
      <label for="comprobante"><strong>Comprobante </strong></label>  
      <input type="text" value= "<?php echo $reg["comprobante"]; ?> " name="comprobante" class="form-input">     
     </div>

      <input type="hidden" value= "<?php echo $reg["id_gasto"]; ?> " name="id_gasto" class="form-input">
 
   
	   
      <center> 
      <p>
      <input class="buttom" name="submit" type="submit" value="MODIFICAR GASTO" />
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