<?php
require_once("conexion.php");

$sql="select * from proveedores Where id_proveedor='".$_POST["id_proveedor"]."' ";

 
$resul = mysqli_query($con, $sql);
?> 
 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Actualizar proveedores</title>
<link rel="stylesheet" href="css/estilosform.css">
</head>
<body>

   
<?php
while ($reg=mysqli_fetch_array($resul)) 
{	
?> 


<div class="container">

<div class="volver">
    <a href="ver_proveedores.php">
		 <img src="images/arrow-back-regular-24.png" alt="imagen no encontrada">
		</a>
</div>

<P align="center"> MODIFICAR PROVEEDORES </P>


  <form action="actualizar_proveedores.php" method="post">
   <p>
    
   <div class="form first">
			<div class="details personal">

	<div class="fields">
   
   <div class="input-field">
      <label for="tipo"><strong>Tipo </strong></label>  
      <input type="text" value= "<?php echo $reg["tipo"]; ?> " name="tipo" class="form-input">
      </div>

      <div class="input-field">
      <label for="nombre"><strong>Nombre</strong></label>  
      <input type="text" value= "<?php echo $reg["nombre"]; ?> " name="nombre" class="form-input">
      </div>

     <div class="input-field">
      <label for="telefono"><strong>Telefono </strong></label>  
      <input type="text" value= "<?php echo $reg["telefono"]; ?> " name="telefono" class="form-input">     
      </div>

      <div class="input-field">
      <label for="direccion"><strong>Direccion </strong></label>  
      <input type="text" value= "<?php echo $reg["direccion"]; ?> " name="direccion" class="form-input">      
      </div>

      <div class="input-field">
      <label for="correo"><strong>Correo </strong></label>  
      <input type="text" value= "<?php echo $reg["correo"]; ?> " name="correo" class="form-input">     
      </div>

      <div class="input-field">
      <label for="inventario"><strong>Inventario </strong></label>  
      <input type="text" value= "<?php echo $reg["inventario"]; ?> " name="inventario" class="form-input">      
      </div>

      <input type="hidden" value= "<?php echo $reg["id_proveedor"]; ?> " name="id_proveedor" class="form-input">
   
	   
      <center> 
      <p>
      <input class="buttom" name="submit" type="submit" value="MODIFICAR PROVEEDORES" />
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