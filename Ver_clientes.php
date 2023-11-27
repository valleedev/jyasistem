<?php 
require_once("conexion.php");

$sql="select * from clientes ORDER BY id_cliente desc";

$resul = mysqli_query($con, $sql);
	
?> 

<!doctype html>
<html>
<head>
	<title>Ver clientes</title>
	<link rel="stylesheet" href="css/estilos1.css">

	<script language="JavaScript">
		function pregunta() 
			{
 				if (!(confirm('¿Estas seguro que desea eliminar el cliente?'))){ 
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

<p>CLIENTES</p>

<form action="./Buscar_clientes_nombre_completo.php" method="post">
	
		<div class="form first">
			<div class="details personal">
				<span class="title"></span>

	<div class="fields">

	  <div class="input-field">
		<label for="nombre_completo">  </label>
		<input class="input" type="text" id="nombre_completo" placeholder="Nombre completo" name="nombre_completo" >
	 </div>

      <input  class="btn" type="submit" value="BUSCAR">
     
 </div>
</div>
</div>
</div>
  
</form>
</div>
  
</form>
 

<div class="container-tabla">
<table id="customers"> 

<tr style="text-transform:uppercase;"> 
  <th> <strong>Cédula</strong></th> 
  <th> <strong>Nombre Completo</strong> </th> 
  <th> <strong>Teléfono</strong> </th> 
  <th> <strong>correo Electrónico </strong>   </th> 
  <th> <strong>Sexo</strong>   </th>     
  <th> <strong>Tipo Pago</strong>   </th>
  <th>  <strong></strong>   </th>       
  <th>  <strong></strong>   </th>
  <th>  <strong></strong>   </th>





<?php
while ($row=mysqli_fetch_array($resul)) 
{ /*almacenamos el nombre de la ruta en la variable $ruta_img*/ 
    $Cedula = $row["cedula"]; 
	$Nombre_completo = $row["nombre_completo"];
	$Telefono = $row["telefono"];
  $Correo = $row["correo"];
	$Sexo = $row["sexo"];
  $Pago = $row["pago"];
 ?>
   </tr>
 
     <td> <?php echo $Cedula; ?> </td>
     <td>  <?php echo  $Nombre_completo; ?> </td>
	 <td> <?php echo  $Telefono; ?> </td>
   <td>  <?php echo  $Correo; ?> </td>
   <td> <?php echo  $Sexo; ?> </td>  
   <td> <?php echo  $Pago; ?> </td>   


   <td> 
            <form  action="Eliminar_clientes.php" method="post" onsubmit="return pregunta();">
			<input type = "hidden" value="<?php echo $row["cedula"]; ?> " name="cedula">
               <input type = "submit"  value= ' ' title="Eliminar Clientes" class = 'delete'>  
             </form>          
     </td>  
    
     <td>         
            <form  action="Formulario_Actualizar_clientes.php" method="post">                
   		  	    <input type = "hidden" value="<?php echo $row["id_cliente"]; ?> " name="id_cliente">
   		        <input type = "submit"  value= ' ' title="Actualizar Clientes" class = 'update'>
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


