<?php
// Configuración de la conexión a la base de datos
$host = 'localhost'; // Si MySQL se encuentra en el mismo servidor que PHP
$puerto = '3306'; // Puerto MySQL por defecto
$usuario = 'root';
$contrasena = '';
$base_de_datos = 'encuestas_db';

// Conexión a la base de datos
$conexion = new mysqli($host . ':' . $puerto, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Procesar los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["origen"])) {
        $origen = $_POST["origen"];
        $fecha_encuesta = date('Y-m-d H:i:s'); // Obtiene la fecha y hora actual en formato "AAAA-MM-DD HH:MM:SS"

        // Aquí puedes realizar la lógica necesaria, como insertar los datos en la base de datos con la fecha
        // Por ejemplo:
        $sql = "INSERT INTO encuesta (origen, fecha_encuesta) VALUES ('$origen', '$fecha_encuesta')";
        if ($conexion->query($sql) === TRUE) {
            // Redirigir a la página de agradecimiento (gracias.html)
            header("Location: gracias.html");
            exit; // Asegura que el script se detenga después de la redirección
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }
    }
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>

C4:41:1E:E9:29:43

C81567CBA2