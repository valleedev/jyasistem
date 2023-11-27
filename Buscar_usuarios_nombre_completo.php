<?php
require_once("conexion.php");

$sql="select * from usuarios where nombre_completo = '".$_POST["nombre_completo"]."'";

$resul = mysqli_query($con, $sql);

?> 

<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="css/ximena.css">
 	<script language="JavaScript">
		function pregunta() 
			{
 				if (!(confirm('¿Estas seguro que desea eliminar el usuario?'))){ 
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

     
<p class="cl" align="center">USUARIOS</p>

<a href="ver_caja_usuarios.php">
		 <img src="images/arrow-back-regular-24.png" class="img" alt="imagen no encontrada">
		</a>
<p align="center"></p>


<?php
	
	
while ($row = mysqli_fetch_array($resul)){

 /*almacenamos el nombre de la ruta en la variable $ruta_img*/ 
    $Cedula = $row["cedula"];
    $Foto = $row["foto"]; 
	$Nombre_Completo = $row["nombre_completo"];
	$Contrasena = $row["contrasena"];
    $Correo_Electronico = $row["correo_electronico"];
	$Telefono = $row["telefono"];
    $Cargo = $row["cargo"];;

 ?>

<div class="card">  <br>
    <img class="img" src="./images/<?php echo $Foto; ?>" alt="Error Al Cargar La Foto" height="130px" width="130px" /> <br> <br> 

    CÉDULA: <?php echo $Cedula; ?>  <br>
	NOMBRE: <?php echo $Nombre_Completo; ?> <br> 
	CONTRASEÑA: <?php echo $Contrasena; ?><br>
    CORREO: <?php echo $Correo_Electronico; ?><br>
    TELÉFONO: <?php echo $Telefono; ?><br>
    CARGO: <?php echo $Cargo; ?><br>


	<br>  <br>  <br> 
	<table>        
    	<tr>
          <td> 
            <form  action="Eliminar_usuarios.php" method="post" onsubmit="return pregunta();"><input type = "hidden" value="<?php echo $row["cedula"]; ?> " name="cedula">
               <input type = "submit"  value= ' ' title="Eliminar usuarios" class = 'delete'>  
             </form>          
          </td>  
    
          <td>         
            <form  action="Formulario_Actualizar_usuarios.php" method="post">                
   		  	    <input type = "hidden" value="<?php echo $row["id_usuario"]; ?> " name="id_usuario">
   		        <input type = "submit"  value= ' ' title="Actualizar Desempleados" class = 'update'>
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
