<?php
require_once("conexion.php");

$sql="select * from proveedores where nombre = '".$_POST["nombre"]."'";

$resul = mysqli_query($con, $sql);
	
?> 

<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="css/estilos1.css">

	<script language="JavaScript">
		function pregunta() 
			{
 				if (!(confirm('¿Estas seguro que desea eliminar el proveedor?'))){ 
       			return false;  } 
			} 
	</script>

</head>

<body>


<header>
    <nav>
        <h1 class="jyasistem"><b>JyA</b>sistem</h1>
        <ul class="menu-horizontal" >
            <li><a href="plantilla.html">INICIO</a></li>

            <li>
                <a href="#">INSERTAR</a>
                <ul class="menu-vertical1">
                    <li class="lista"><a href="Formulario_Insert_ingresos.html">INGRESOS</a></li>
                    <li class="lista"><a href="Formulario_Insert_gastos.html">GASTOS</a></li>
                    <li class="lista"><a href="Formulario_Insert_Clientes.html">CLIENTES</a></li>
                    <li class="lista"><a href="Formulario_insert_contratos.html">CONTRATOS</a></li>
                    <li class="lista"><a href="Formulario_Insert_empleados.html">EMPLEADOS</a></li>
                    <li class="lista"><a href="Formulario_Insert_inventario.html">INVENTARIO</a></li>
                    <li class="lista"><a href="Formulario_Insert_proveedores.html">PROVEEDORES</a></li>
                    <li class="lista"><a href="Formulario_Insert_usuarios.html">USUARIOS</a></li>
                </ul>
            </li> 

            <li>
                <a href="#">REPORTES</a>
                <ul class="menu-vertical2">
                    <li class="lista"><a href="Ver_ingresos.php">INGRESOS</a></li>
                    <li class="lista"><a href="Ver_gastos.php">GASTOS</a></li>
                    <li class="lista"><a href="Ver_clientes.php">CLIENTES</a></li>
                    <li class="lista"><a href="Ver_contratos.php">CONTRATOS</a></li>
                    <li class="lista"><a href="ver_caja_empleados.php">EMPLEADOS</a></li>
                    <li class="lista"><a href="ver_caja_inventario.php">INVENTARIO</a></li>
                    <li class="lista"><a href="Ver_proveedores.php">PROVEEDORES</a></li>
                    <li class="lista"><a href="ver_caja_usuarios.php">USUARIOS</a></li>
                </ul>
            </li>

            <li><a class="exit" href="salir.php">SALIR</a></li>
        </ul>
    </nav>
</header>

<div class="container-buscar">


<p>PROVEEDORES</p>


<a href="ver_proveedores.php">
		 <img src="images/arrow-back-regular-24.png" class="img" alt="imagen no encontrada">
		</a>


<table id="customers"> 

<tr style="text-transform:uppercase;"> 
  <th> <strong>Id</strong></th> 
  <th> <strong>Tipo</strong> </th> 
  <th> <strong>Nombre</strong> </th> 
  <th> <strong>Teléfono </strong>   </th> 
  <th> <strong>Dirección</strong>   </th>      
  <th>  <strong>Correo</strong>   </th> 
  <th>  <strong>Inventario</strong>   </th>
  <th>  <strong></strong>   </th>
  <th>  <strong></strong>   </th>
  <th>  <strong></strong>   </th>
 

<div>
<?php
while ($row=mysqli_fetch_array($resul)) 
{ /*almacenamos el nombre de la ruta en la variable $ruta_img*/ 
    $id = $row["id_proveedor"]; 
	$tipo = $row["tipo"];
	$nombre = $row["nombre"];
	$telefono = $row["telefono"];
	$direccion = $row["direccion"];
  $correo = $row["correo"];
  $productos = $row["inventario"];
 ?>
   <tr>
 
     <td> <?php echo $id; ?> </td>
     <td>  <?php echo  $tipo; ?> </td>
     <td>  <?php echo  $nombre; ?> </td>
	 <td> <?php echo  $telefono; ?> </td>
   <td> <?php echo  $direccion; ?> </td>
   <td> <?php echo  $correo; ?> </td>
   <td> <?php echo  $productos; ?> </td>

   <td> 
            <form  action="Eliminar_proveedores.php" method="post" onsubmit="return pregunta();"><input type = "hidden" value="<?php echo $row["id_proveedor"]; ?> " name="id_proveedor">
               <input type = "submit"  value= ' ' title="Eliminar Proveedores" class = 'delete'>  
             </form>          
     </td>  
    
     <td>         
            <form  action="Formulario_Actualizar_proveedores.php" method="post">                
   		  	    <input type = "hidden" value="<?php echo $row["id_proveedor"]; ?> " name="id_proveedor">
   		        <input type = "submit"  value= ' ' title="Actualizar Proveedores" class = 'update'>
            </form>
     </td>	

	  <td>
			 <form  action="https://wa.me/+57<?php echo $Telefono; ?>?text=Â¡Estoy+interesado!"> <input type="submit" value=' ' title="whatsapp" class = 'whats'>
            </form>
	 </td>


</div>
 

<?php
}
?>
</table>
</div>
</body>
</html>


