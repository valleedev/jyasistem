<?php
require_once("conexion.php");

$sql="select * from contratos where fecha_inicio = '".$_POST["fecha_inicio"]."'";

$resul = mysqli_query($con, $sql);
	
?> 

<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="css/estilos1.css">

	<script language="JavaScript">
		function pregunta() 
			{
 				if (!(confirm('¿Estas seguro que desea eliminar el contrato?'))){ 
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

<p>CONTRATOS</p>

<a href="ver_contratos.php">
		 <img src="images/arrow-back-regular-24.png" alt="imagen no encontrada">
		</a>

<table id="customers"> 

<tr style="text-transform:uppercase;"> 
  <th> <strong>Fecha Inicio</strong></th> 
  <th> <strong>Fecha Fin</strong> </th> 
  <th> <strong>Nombre</strong> </th> 
  <th> <strong>Descripción </strong>   </th> 
  <th> <strong>Tipo contrato</strong>   </th>     
  <th> <strong>Tipo pago</strong>   </th> 
  <th> <strong>Valor</strong>   </th> 
  <th>  <strong>ID</strong>   </th> 
  <th>  <strong></strong>   </th>
  <th>  <strong></strong>   </th>



<div>
<?php
while ($row=mysqli_fetch_array($resul)) 
{ 
    $Fecha_inicio = $row["fecha_inicio"]; 
	$Fecha_fin = $row["fecha_finalizacion"];
	$Nombre = $row["nombre"];
	$Descripción = $row["descripcion"];
	$Tipo_contrato = $row["tipo_contrato"];
  $Tipo_pago = $row["pago"];
  $Valor = $row["valor"];
  $ID_contrato = $row["id_contrato"];
 ?>
   <tr>
 
     <td> <?php echo $Fecha_inicio; ?> </td>
     <td>  <?php echo  $Fecha_fin; ?> </td>
     <td>  <?php echo  $Nombre; ?> </td>
	 <td> <?php echo  $Descripción; ?> </td>
   <td> <?php echo  $Tipo_contrato; ?> </td>
   <td> <?php echo  $Tipo_pago; ?> </td>
   <td> <?php echo  $Valor; ?> </td>
   <td> <?php echo  $ID_contrato; ?> </td>

   <td> 
            <form  action="Eliminar_contratos.php" method="post" onsubmit="return pregunta();"><input type = "hidden" value="<?php echo $row["id_contrato"]; ?> " name="id_contrato">
               <input type = "submit"  value= ' ' title="Eliminar Contratos" class = 'delete'>  
             </form>          
     </td>  
    
     <td>         
            <form  action="Formulario_Actualizar_contratos.php" method="post">                
   		  	    <input type = "hidden" value="<?php echo $row["id_contrato"]; ?> " name="id_contrato">
   		        <input type = "submit"  value= ' ' title="Actualizar Contratos" class = 'update'>
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


