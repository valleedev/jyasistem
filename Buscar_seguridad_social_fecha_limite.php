<?php 
require_once("conexion.php");

$sql="select * from seguridad_social where fecha_limite LIKE '%".$_POST["fecha_limite"]."%'";

$resul = mysqli_query($con, $sql);
	
?> 

<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="css/estilos1.css">

	<script language="JavaScript">
		function pregunta() 
			{
 				if (!(confirm('¿Estas seguro que desea eliminar el registro?'))){ 
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

    <a href="Ver_Seguridad_Social.php">
		  <img src="images/arrow-back-regular-24.png" alt="volver">
		</a>


<table id="customers"> 

<tr style="text-transform:uppercase;"> 
  <th> <strong>Pago</strong></th> 
  <th> <strong>Fecha_limite</strong> </th> 
  <th> <strong>Nro_trabajadores</strong> </th> 
  <th>  <strong></strong>   </th>       
  <th>  <strong></strong>   </th>





<?php
while ($row=mysqli_fetch_array($resul)) 
{ /*almacenamos el nombre de la ruta en la variable $ruta_img*/ 
    $Pago = $row["pago"]; 
	$Fecha_limite = $row["fecha_limite"];
	$Nro_trabajadores = $row["nro_trabajadores"];
 ?>
   </tr>
 
     <td> <?php echo $Pago; ?> </td>
     <td>  <?php echo  $Fecha_limite; ?> </td>
	 <td> <?php echo  $Nro_trabajadores; ?> </td>


   <td> 
            <form  action="Eliminar_seguridad_social.php" method="post" onsubmit="return pregunta();"><input type = "hidden" value="<?php echo $row["id_seguridad_social"]; ?> " name="id_seguridad_social">
               <input type = "submit"  value= ' ' title="Eliminar Seguridad Social" class = 'delete'>  
             </form>          
     </td>  
    
     <td>         
            <form  action="Formulario_actualizar_seguridad_social.php" method="post">                
   		  	    <input type = "hidden" value="<?php echo $row["id_seguridad_social"]; ?> " name="id_seguridad_social">
   		        <input type = "submit"  value= ' ' title="Actualizar Seguridad Social" class = 'update'>
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


