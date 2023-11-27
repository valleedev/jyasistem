<?php
session_start();
require_once("conexion.php");

// Comprueba si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tipo = $_POST["tipo"];
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $correo = $_POST["correo"];

    // Verifica si se ha subido un archivo PDF
    if (isset($_FILES['inventario'])) {
        $file = $_FILES['inventario'];

        // Obtiene información del archivo
        $fileName = $file['name'];
        $fileType = $file['type'];
        $fileTmpName = $file['tmp_name'];

        // Define la ruta de destino para guardar el archivo PDF
        $targetDirectory = 'uploads/';
        $targetFilePath = $targetDirectory . $fileName;

        // Mueve el archivo desde la ubicación temporal al destino
        if (move_uploaded_file($fileTmpName, $targetFilePath)) {
            $sql = "INSERT INTO proveedores (tipo, nombre, telefono, direccion, correo, inventario) 
            VALUES ('$tipo', '$nombre', '$telefono', '$direccion', '$correo', '$fileName')";

            $res = mysqli_query($con, $sql);

            if ($res) {
                echo "<script type='text/javascript'>
                    alert('Proveedor ingresado correctamente');
                    window.location='Formulario_Insert_proveedores.html';
                </script>";
            } else {
                echo "<script type='text/javascript'>
                    alert('No fue ingresado, intente nuevamente');
                    window.location='Formulario_Insert_proveedores.html';
                </script>";
            }
        } else {
            echo "<script type='text/javascript'>
                alert('Error al cargar el archivo PDF');
                window.location='Formulario_Insert_proveedores.html';
            </script>";
        }
    } else {
        echo "<script type='text/javascript'>
            alert('Por favor, seleccione un archivo PDF');
            window.location='Formulario_Insert_proveedores.html';
        </script>";
    }
}
?>
