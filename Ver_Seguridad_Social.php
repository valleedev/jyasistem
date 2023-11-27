<?php
require_once("conexion.php");

$sql="select * from seguridad_social ORDER BY id_seguridad_social desc";

$resul = mysqli_query($con, $sql);
	
?> 

<!doctype html>
<html>
<head>
	<title>Ver Seguridad Social</title>
	<link rel="stylesheet" href="css/estilos1.css">

	<script language="JavaScript">
		function pregunta() 
			{
 				if (!(confirm('¿Estas seguro que desea eliminarlo?'))){ 
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

<p>SEGURIDAD SOCIAL</p>

<form action="./Buscar_seguridad_social_fecha_limite.php" method="post">
	
		<div class="form first">
			<div class="details personal">
				<span class="title"></span>

	<div class="fields">

	  <div class="input-field">
		<label for="fecha_limite">  </label>
		<input class="input" type="date" id="fecha_limite" placeholder="fecha_limite" name="fecha_limite" >
	 </div>

      <input  class="btn" type="submit" value="BUSCAR">
     
 </div>
</div>
</div>
</div>
  
</form>
</div>

<div class="container-tabla">
<table id="customers"> 

<tr style="text-transform:uppercase;"> 
  <th> <strong>Pago</strong></th> 
  <th> <strong>Fecha Limite</strong> </th> 
  <th> <strong>Nro Trabajadores</strong> </th>      
  <th>  <strong></strong>   </th>       
  <th>  <strong></strong>   </th>

<div>
<?php
if ($resul){
while ($row = mysqli_fetch_array($resul)) 
{ /*almacenamos el nombre de la ruta en la variable $ruta_img*/ 
    $Pago = $row["pago"]; 
	$Fecha_limite = $row["fecha_limite"];
	$Nro_trabajadores = $row["nro_trabajadores"];
 ?>
   <tr>
 
     <td> <?php echo $Pago; ?> </td>
     <td>  <?php echo  $Fecha_limite; ?> </td>
     <td>  <?php echo  $Nro_trabajadores; ?> </td>

   <td> 
            <form  action="Eliminar_seguridad_social.php" method="post" onsubmit="return pregunta();"><input type = "hidden" value="<?php echo $row["id_seguridad_social"]; ?> " name="id_seguridad_social">
               <input type = "submit"  value= ' ' title="Eliminar_seguridad_social" class = 'delete'>  
             </form>          
     </td>  
    
     <td>         
            <form  action="Formulario_actualizar_seguridad_social.php" method="post">                
   		  	    <input type = "hidden" value="<?php echo $row["id_seguridad_social"]; ?> " name="id_seguridad_social">
   		        <input type = "submit"  value= ' ' title="Actualizar seguridad_social" class = 'update'>
            </form>
     </td>	


</div>
 

<?php
}} else {
  echo "Error en la consulta SQL: " . mysqli_error($con);
}
?>
</table>
</div>
</body>
</html>


