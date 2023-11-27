<?php
require_once("conexion.php");

$sql="select * from inventario Where id_inventario='".$_POST["id_inventario"]."' ";

 
$resul = mysqli_query($con, $sql);
?> 
 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Actualizar inventario</title>
<link rel="stylesheet" href="css/estilosform.css">
</head>
<body>

   
<?php
while ($reg=mysqli_fetch_array($resul)) 
{	
?> 
    
   <div class="container">

   <div class="volver">
    <a href="ver_caja_inventario.php">
		 <img src="images/arrow-back-regular-24.png" alt="imagen no encontrada">
		</a>
</div>

    <P align="center"> MODIFICAR INVENTARIO </P>

  <form action="actualizar_inventario.php" method="post">
   <p>
   
   <div class="form first">
			<div class="details personal">

	<div class="fields">
   
  <div class="input-field">
      <label for="foto"><strong>Foto </strong></label>  
      <input type="file" value= "<?php echo $reg["foto"]; ?> " name="foto" class="form-input">
      </div>

      <div class="input-field">
      <label for="ficha_tecnica"><strong>Ficha_Tecnica </strong></label>  
      <input type="text" value= "<?php echo $reg["ficha_tecnica"]; ?> " name="ficha_tecnica" class="form-input">
      </div>
      
      <div class="input-field">
      <label for="tipo"><strong>Tipo </strong></label>  
      <input type="text" value= "<?php echo $reg["tipo"]; ?> " name="tipo" class="form-input">
      </div>

      <div class="input-field">
      <label for="cantidad"><strong>Cantidad </strong></label>  
      <input type="text" value= "<?php echo $reg["cantidad"]; ?> " name="cantidad" class="form-input"> 
      </div>

      <div class="input-field">
      <label for="elemento"><strong>Elemento </strong></label>  
      <input type="text" value= "<?php echo $reg["elemento"]; ?> " name="elemento" class="form-input">     
      </div>

      <div class="input-field">
      <label for="costo"><strong>Costo </strong></label>  
      <input type="text" value= "<?php echo $reg["costo"]; ?> " name="costo" class="form-input">
      </div>

      <div class="input-field">
      <label for="precio_total"><strong>Precio_Total </strong></label>  
      <input type="text" value= "<?php echo $reg["precio_total"]; ?> " name="precio_total" class="form-input">  
      </div>

       <input type = "hidden" value="<?php echo $reg["id_inventario"]; ?> " name="id_inventario">

      <center> 
      <p>
      <input class="buttom" name="submit" type="submit" value="MODIFICAR INVENTARIO" />
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