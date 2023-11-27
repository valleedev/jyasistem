<?php
require_once("conexion.php");

$sql="select * from gastos ORDER BY id_gasto desc";



$resul = mysqli_query($con, $sql);
	
?> 

<!doctype html>
<html>
<head>
	<title>Ver gastos</title>
	<link rel="stylesheet" href="css/estilos1.css">

	<script language="JavaScript">
		function pregunta() 
			{
 				if (!(confirm('¿Estas seguro que desea eliminar el gasto?'))){ 
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
	<p>GASTOS</p>

	<form action="./Buscar_gastos_concepto.php" method="post">
	
		<div class="form first">
			<div class="details personal">

	<div class="fields">

		<div class="input-field">
		<input class="input" type="text" id="concepto" placeholder="concepto" name="concepto" required>
	 </div>

	  
	  
      <input  class="btn" type="submit" value="BUSCAR">
      
</div>
</div>
</div>

</form>
</div>

<div class="container-tabla">
<table id="customers"> 

<tr style="text-transform:uppercase;"> 
  <th> <strong>ID</strong></th> 
  <th> <strong>Fecha</strong> </th> 
  <th> <strong>Valor</strong> </th> 
  <th> <strong>Concepto </strong>   </th> 
  <th> <strong>Comprobante</strong>   </th>        
  <th>  <strong></strong>   </th>       
  <th>  <strong></strong>   </th> 


<div>
<?php
while ($row=mysqli_fetch_array($resul)) 
{ /*almacenamos el nombre de la ruta en la variable $ruta_img*/ 
    $ID = $row["id_gasto"]; 
	$Fecha = $row["fecha"];
	$Valor = $row["valor"];
	$Concepto = $row["concepto"];
	$Comprobante = $row["comprobante"];
 ?>
   <tr>
 
     <td> <?php echo $ID; ?> </td>
     <td>  <?php echo  $Fecha; ?> </td>
     <td>  <?php echo  $Valor; ?> </td>
	 <td> <?php echo  $Concepto; ?> </td>
   <td> <?php echo  $Comprobante; ?> </td>

   <td> 
            <form  action="Eliminar_gastos.php" method="post" onsubmit="return pregunta();"><input type = "hidden" value="<?php echo $row["id_gasto"]; ?> " name="id_gasto">
               <input type = "submit"  value= ' ' title="Eliminar Gastos" class = 'delete'>  
             </form>          
     </td>  
    
     <td>         
            <form  action="Formulario_Actualizar_gastos.php" method="post">                
   		  	    <input type = "hidden" value="<?php echo $row["id_gasto"]; ?> " name="id_gasto">
   		        <input type = "submit"  value= ' ' title="Actualizar Gastos" class = 'update'>
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


