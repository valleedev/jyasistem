<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "";
$password = "";
$dbname = "jyasistem";

// Crear una nueva conexión
$conn = new mysqli($servername, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Consulta SQL para obtener los datos de la tabla de ingresos y calcular el total
$sql = "SELECT ingresos, SUM(campo_total) AS total FROM ingresos GROUP BY ingresos";
$result = $conn->query($sql);

// Crear un array para almacenar los datos de la consulta
$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Agregar los datos al array
        $data[] = array(
            "ingresos" => $row["ingresos"],
            "total" => $row["total"]
        );
    }
}

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Ingresos</title>
</head>
<body>
    <h1>Reporte de Ingresos</h1>
    
    <table>
        <thead>
            <tr>
                <th>Ingresos</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row): ?>
                <tr>
                    <td><?php echo $row["ingresos"]; ?></td>
                    <td><?php echo $row["total"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
