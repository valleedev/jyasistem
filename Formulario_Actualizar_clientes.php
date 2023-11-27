<?php
require_once("conexion.php");

$sql="select * from clientes Where id_cliente ='".$_POST["id_cliente"]."' ";

 
$resul = mysqli_query($con, $sql);
?> 
 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Actualizar clientes</title>
<link rel="stylesheet" href="css/estilosform.css">
</head>
<body>

   
<?php
while ($reg=mysqli_fetch_array($resul)) 
{	
?> 


<div class="container">
<div class="volver">
    <a href="ver_clientes.php">
		 <img src="images/arrow-back-regular-24.png" alt="imagen no encontrada">
		</a>
</div>

<P align="center"> MODIFICAR CLIENTES </P>

  <form action="actualizar_clientes.php" method="post">
   <p>

   <div class="form first">
			<div class="details personal">

	<div class="fields">


     <div class="input-field">
      <label for="cedula"><strong>Cedula </strong></label>  
      <input type="text" value= "<?php echo $reg["cedula"]; ?> " name="cedula" class="form-input">
     </div>

      <div class="input-field">
      <label for="nombre_completo"><strong>Nombre_completo </strong></label>  
      <input type="text" value= "<?php echo $reg["nombre_completo"]; ?> " name="nombre_completo" class="form-input"> 
     </div>

      <div class="input-field">
      <label for="telefono"><strong>Telefono </strong></label>  
      <input type="text" value= "<?php echo $reg["telefono"]; ?> " name="telefono" class="form-input">     
      </div>

      <div class="input-field">
      <label for="correo"><strong>Correo </strong></label>  
      <input type="text" value= "<?php echo $reg["correo"]; ?> " name="correo" class="form-input">
     </div>

      <div class="input-field">
      <label for="sexo"><strong>Sexo </strong></label>  
      <input type="text" value= "<?php echo $reg["sexo"]; ?> " name="sexo" class="form-input">  
      </div>

     <div class="input-field">
      <label for="pago"><strong>Pago </strong></label>  
      <input type="text" value= "<?php echo $reg["pago"]; ?> " name="pago" class="form-input">  
      </div>

      <input type = "hidden" value="<?php echo $reg["id_cliente"]; ?> " name="id_cliente">

      <center> 
      <p>
      <input class="buttom" name="submit" type="submit" value="MODIFICAR CLIENTE" />
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