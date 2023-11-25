<?php
session_start();

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'pawtel';

$Conexion = mysqli_connect($hostname, $username, $password, $database);

if (mysqli_connect_error()) {
    exit('Fallo en la conexión de MySQL: ' . mysqli_connect_error());
}

// Verifica y filtra los datos de entrada
$nom = isset($_POST['namet']) ? mysqli_real_escape_string($Conexion, $_POST['namet']) : '';
$numbertar = isset($_POST['numbertar']) ? mysqli_real_escape_string($Conexion, $_POST['numbertar']) : '';
$fechex = isset($_POST['fechex']) ? mysqli_real_escape_string($Conexion, $_POST['fechex']) : '';
$posion = isset($_SESSION['email']) ? mysqli_real_escape_string($Conexion, $_SESSION['email']) : '';

// Utiliza un UPDATE para intentar actualizar el registro
$sql_update = "UPDATE reserva SET Nombre_propetario_target = ?, Numero_de_targeta = ?, Fecha_vencimiento_targeta = ? WHERE correo = ?";

if ($stmt = mysqli_prepare($Conexion, $sql_update)) {
    mysqli_stmt_bind_param($stmt, "ssss", $nom, $numbertar, $fechex, $posion);
    $envio_update = mysqli_stmt_execute($stmt);

    if (!$envio_update) {
        // Registra el error en un archivo de registro
        error_log('Error de MySQL: ' . mysqli_error($Conexion), 3, 'ruta_del_archivo_de_registro.log');
        echo '<script>alert("Error al intentar actualizar el registro. Por favor, inténtalo de nuevo más tarde.");</script>';
    } else {
        echo 'Actualización exitosa o el registro no existía.';
        header('Location: Login.html');
    }

    mysqli_stmt_close($stmt);
} else {
    echo 'Error al preparar la sentencia de actualización: ' . mysqli_error($Conexion);
}

mysqli_close($Conexion);
?>
