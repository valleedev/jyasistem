<?php
require_once("conexion.php");



$sql="select * from productos  where descripcion_producto='".$_POST["descripcion_producto"]."'";

$resul = mysqli_query($con, $sql);
?> 

<!doctype html>
<html>
<head>
         <link rel="stylesheet" href="css/estilos10.css">

</head>

<body>

<p> <div      style="background:rgba(0,0,0,0.9); margin-left:auto;  width:930px; 
height:5px; border-image-width:auto; padding-top:8px; 
font-size: 25px; color:rgb(255,255,255);">
PRODUCTOS  </strong> </div><?php echo $_POST["descripcion_producto"] ?>   </p>

    
	
 
 <div>
<?php
while ($row=mysqli_fetch_array($resul)) 
{ /*almacenamos el nombre de la ruta en la variable $ruta_img*/ 
        $n_producto = $row["n_producto"]; 
	$cantidad = $row["cantidad"];
	$descripcion_producto = $row["descripcion_producto"];
	$v_unitario = $row["v_unitario"];
	$v_total = $row["v_total"];
	$foto = $row["foto"];
	$valor_compra = $row["valor_compra"];
	$valor_total = $row["v_total"];
 ?>
	   <img src="foto/<?php echo $foto; ?>" alt="Error al cargar la foto" height="160px" width="190px" />  <br> 
     <?php echo $descripcion_producto; ?>  <br> 
	<?php echo $cantidad; ?> Unidades <br>
	<strong> Vr.Compra</strong>	<?php echo $valor_compra; ?> <br>Vr.venta <?php echo $v_unitario; ?>   <br>total <?php echo $valor_total; ?>  <br> <br>
      
 
</div> 
   
              </td>    
           </tr>   
       

<?php
}	
?>

</body>
</html>


