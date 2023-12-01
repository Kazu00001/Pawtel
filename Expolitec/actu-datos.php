<?php
session_start();

// Database access credentials
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'pawtel';

// Database connection
$conexion = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (mysqli_connect_error()) {
    exit('MySQL Connection Failed: ' . mysqli_connect_error());
}

// Validate the existence of data in the form
if (!isset($_POST['nombre'], $_POST['correo'], $_POST['fecha'], $_POST['telefono'], $_POST['ideup'])) {
    // Redirect in case of missing data
    header('Location: Actualizar-perf.php');
    exit();
}

// Collect form data
$nom = mysqli_real_escape_string($conexion, $_POST['nombre']);
$correo = mysqli_real_escape_string($conexion, $_POST['correo']);
$fecha = mysqli_real_escape_string($conexion, $_POST['fecha']);
$telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
$idup = mysqli_real_escape_string($conexion, $_POST['ideup']);

// Update statement without prepared statement
$sql = "UPDATE usser SET nombres = '$nom', correo = '$correo', fech = '$fecha', telefono = '$telefono' WHERE id = '$idup'";
$envio = mysqli_query($conexion, $sql);

// Check if the update was successful
if ($envio) {
    header('Location: login.hmtl');
} else {
    echo 'There was a problem updating the reservation. Error: ' . mysqli_error($conexion);
}

// Close the connection
mysqli_close($conexion);
?>
