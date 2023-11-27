<?php
require_once("conexion.php");

$sql="select * from empleados ORDER BY id_empleado desc";



$resul = mysqli_query($con, $sql);

?> 

<!doctype html>
<html>
<head>
    <title>Ver empleados</title>
	<link rel="stylesheet" href="css/ximena.css">
 	<script language="JavaScript">
		function pregunta() 
			{
 				if (!(confirm('¿Estas seguro que desea eliminar el empleado?'))){ 
       			return false;  } 
			} 
	</script>
</head>

<body>
      <!--Header menu-->
     
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
<p >EMPLEADOS</p>


<form action="Buscar_empleados_nombre.php" method="post">
	  		
	<label for="nombre">  </label>
	  <input class="input" type="text" id="nombre" placeholder="Nombre Empleado" name="nombre" required>
  <input class="btn" type="submit" value="Buscar">

</form>
</div>



<?php


	
while ($row = mysqli_fetch_array($resul)){

 /*almacenamos el nombre de la ruta en la variable $ruta_img*/
   $ID = $row["id_empleado"]; 
   $Cedula = $row["cedula"]; 
    $Foto = $row["foto"];
	$Nombre = $row["nombre"];
	$Apellido = $row["apellido"];
    $Edad = $row["edad"];
	$Telefono = $row["telefono"];
    $Sexo = $row["sexo"];;
	$Correo = $row["correo"];
    $Direccion = $row["direccion"];
    $Contacto_emergencia = $row["contacto_emergencia"];
    $RH = $row["rh"];
    $Tipo_contrato = $row["tipo_contrato"];

 ?>

<div class="card"> <br>
    <img class="img" src="./images/<?php echo $Foto; ?>" alt="Error Al Cargar La Foto" height="100px" width="100px" /> <br> <br> 
   
	NOMBRES: <?php echo $Nombre; ?><br>
	APELLIDOS: <?php echo $Apellido; ?> <br>
   CÉDULA:  <?php echo $Cedula; ?>  <br>
   EDAD: <?php echo $Edad; ?><br>
  TELÉFONO: <?php echo $Telefono; ?><br>
   SEXO: <?php echo $Sexo; ?><br>
  CORREO: <?php echo $Correo; ?><br>
  DIRECCIÓN: <?php echo $Direccion; ?><br>
  CONT. EMERGENCIA: <?php echo $Contacto_emergencia; ?><br>
  RH: <?php echo $RH; ?><br>
 TIPO CONTRATO:<?php echo $Tipo_contrato; ?><br>


	<table>        
    	<tr>
          <td> 
            <form  action="Eliminar_empleados.php" method="post" onsubmit="return pregunta();">
               <input type = "hidden" value="<?php echo $row["id_empleado"]; ?> " name="id_empleado">
               <input type = "submit"  value= ' ' title="Eliminar Empleados" class = 'delete'>  
             </form>          
          </td>  
    
          <td>         
            <form  action="Formulario_actualizar_empleados.php" method="post">                
   		  	    <input type = "hidden" value="<?php echo $row["id_empleado"]; ?> " name="id_empleado">
   		        <input type = "submit"  value= ' ' title="Actualizar empleados" class = 'update'>
            </form>
		   </td>	
			
		   <td>
			 <form  action="https://wa.me/+57<?php echo $Telefono; ?>?text=Â¡Estoy+interesado!"> <input type="submit" value=' ' title="whatsapp" class = 'whats'>
             </form>
		   </td>    
          </tr>   
       </table> 	
</div> 
	
<?php
} 
  
?>


</body>
</html>
