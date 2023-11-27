<?php
require_once("conexion.php");

$sql="select * from ingresos Where no_recibo='".$_POST["no_recibo"]."' ";

 
$resul = mysqli_query($con, $sql);
?> 
 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Actualizar ingresos</title>
<link rel="stylesheet" href="css/estilosform.css">
</head>
<body>

    
<?php
while ($reg=mysqli_fetch_array($resul)) 
{	
?> 



<div class="container">

<div class="volver">
    <a href="ver_ingresos.php">
		 <img src="images/arrow-back-regular-24.png" alt="imagen no encontrada">
		</a>
</div>

<P align="center"> MODIFICAR INGRESO </P>




  <form action="actualizar_ingresos.php" method="post">
   <p>

   <div class="form first">
			<div class="details personal">

	<div class="fields">


  <div class="input-field">
			<label for="tipo_ingreso"><strong>Tipo ingreso</strong></label>
			<select name="tipo_ingreso">
			  <option value= "<?php echo $reg["fecha"]; ?> ">Tipo Ingreso</option>
			  <option>Efectivo</option>
			  <option>Online</option>
			  <option>Transferencia</option>
			</select>
	   </div>

     <div class="input-field">
      <label for="fecha"><strong>Fecha </strong></label>  
      <input type="text" value= "<?php echo $reg["fecha"]; ?> " name="fecha" class="form-input">
     </div>
    
     <div class="input-field">
      <label for="valor"><strong>Valor</strong></label>  
      <input type="text" value= "<?php echo $reg["valor"]; ?> " name="valor" class="form-input">
     </div>
      
     <div class="input-field">
      <label for="concepto"><strong>Concepto </strong></label>  
      <input type="text" value= "<?php echo $reg["concepto"]; ?> " name="concepto" class="form-input">     
     </div>

     <div class="input-field">
      <label for="remitente"><strong>Remitente </strong></label>  
      <input type="text" value= "<?php echo $reg["remitente"]; ?> " name="remitente" class="form-input">   
     </div>   

      <input type="hidden" value= "<?php echo $reg["no_recibo"]; ?> " name="no_recibo" class="form-input">   
 
   
	   
      <center> 
      <p>
      <input class="buttom" name="submit" type="submit" value="MODIFICAR INGRESO" />
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