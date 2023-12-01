<?php
session_start();

// Credenciales de acceso a la base de datos
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'pawtel';

// Conexión a la base de datos
$Conexion = mysqli_connect($hostname, $username, $password, $database);

// Verificar la conexión
if (mysqli_connect_error()) {
    exit('Fallo en la conexión de MySQL:' . mysqli_connect_error());
}

// Validar la existencia de los datos en el formulario
if (!isset($_POST['nombre'], $_POST['correo'], $_POST['fecha'], $_POST['telefono'], $_POST['ideup'])) {
    // Redireccionar en caso de datos faltantes
    header('Location: Actualizar-perf.php');
    exit();
}

// Recoger los datos del formulario
$Nom = $_POST['nombre'];
$correo = $_POST['correo'];
$fecha = $_POST['fecha'];
$telefono = $_POST['telefono'];
$idup = $_POST['ideup'];

// Hacer la sentencia de actualización (UPDATE) con sentencia preparada
$sql = "UPDATE usser SET nombres = $Nom , correo = $correo, fech = $fecha, telefono = $telefono WHERE id = '$idup'";
$envio = mysqli_query($Conexion, $sql);

if ($envio) {
    header('Location: reservas-most.php');
} else {
    echo 'Hubo un problema al actualizar la reserva. Error: ' . mysqli_error($Conexion);
} 
mysqli_close($Conexion);
?>
