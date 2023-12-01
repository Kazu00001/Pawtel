<?php
session_start();
// Credenciales de acceso a la base de datos
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'ventex';

// Conexión a la base de datos
$Conexion = mysqli_connect($hostname, $username, $password, $database);

// Verificar la conexión
if (mysqli_connect_error()) {
    exit('Fallo en la conexión de MySQL:' . mysqli_connect_error());
}

// Validar la existencia de los datos en el formulario
if (!isset($_POST['nombre'], $_POST['correo'], $_POST['fecha'], $_POST['telefono'])) {
    // Redireccionar en caso de datos faltantes
    header('Location: Actualizar-perf.php');
    exit();
}

// Recoger los datos del formulario
$idup = $_POST['ideup'];
$Nom = $_POST['nombre'];
$correo = $_POST['correo'];
$fecha = $_POST['fech'];
$telefono = $_POST['telefono'];

// Hacer la sentencia de actualización (UPDATE) con sentencia preparada
$sql = "UPDATE users SET nameUser = ?, email = ?, birthdate = ?, phone = ? WHERE id = $idup";
$stmt = mysqli_prepare($Conexion, $sql);

// Vincular parámetros
mysqli_stmt_bind_param($stmt, "sssi", $Nom, $correo, $fecha, $telefono);

// Ejecutar la sentencia de actualización
$envio = mysqli_stmt_execute($stmt);

// Verificar si hubo errores en la consulta
if (!$envio) {
    // Mostrar un mensaje de error y detalles de MySQL
    echo '<SCRIPT> alert("Tu registro no se pudo actualizar")</SCRIPT>';
    echo 'Error de MySQL: ' . mysqli_error($Conexion);
} else {
    // Redireccionar si todo está bien y cambiar nombre
    
    // Hacer la segunda sentencia de actualización (UPDATE) con sentencia preparada
    $sql2 = "UPDATE sellerprofile SET nameSeller = ? WHERE idddfi = $idup";
    
    
    // Verificar la conexión antes de preparar la segunda sentencia
    if ($Conexion) {
        $stmt2 = mysqli_prepare($Conexion, $sql2);

        // Verificar la preparación de la segunda sentencia
        if ($stmt2) {
            mysqli_stmt_bind_param($stmt2, "s", $Nom);
            $envio2 = mysqli_stmt_execute($stmt2);

            // Verificar si hubo errores en la consulta
            if (!$envio2) {
                // Mostrar un mensaje de error y detalles de MySQL
                echo '<SCRIPT> alert("Error al actualizar el perfil del vendedor")</SCRIPT>';
                echo 'Error de MySQL: ' . mysqli_error($Conexion);
            } else {
                header('Location: Incios.html');
            }
        } else {
            // Mostrar un mensaje de error si la preparación falla
            echo 'Error al preparar la segunda sentencia SQL';
        }
    } else {
        // Mostrar un mensaje de error si la conexión no está establecida
        echo 'Error en la conexión a la base de datos';
        die;
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($Conexion);
}