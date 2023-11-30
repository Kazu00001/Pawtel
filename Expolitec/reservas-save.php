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
    // Si hay un error en la conexión, salir y mostrar el mensaje de error
    exit('Fallo en la conexión de MySQL: ' . mysqli_connect_error());
}

// Obtener datos del formulario y de la sesión
$iduser = $_SESSION['id'];
$nom = $_POST['nombre'];
$nom2 = $_POST['apellido'];
$correo = $_POST['email'];
$icioestan = $_POST['icioestan'];
$finestan = $_POST['finestan'];
$habitaciones = $_POST['tipoHabitacion2'];
$telefono = $_POST['telefono'];
$mascota = $_POST['mascota'];
$mascota2 = $_POST['no_masc'];
$tipohab = $_POST['tipoHabitacion'];

echo "ID Usuario: $iduser, Tipo Habitación: $habitaciones, Inicio: $icioestan, Fin: $finestan, Nombres: $nom, Apellidos: $nom2, Tipo de Habitación: $tipohab, Email: $correo, Teléfono: $telefono, Mascota: $mascota, Número Mascotas: $mascota2";

// Sentencia SQL para la inserción de datos con sentencia preparada
$sql = "INSERT INTO reservas (`id_habitacion`, `id_usuario`, `fecha_inicio`, `fecha_fin`, `Nombres`, `Apellidos`, `Tipo_de_habitacion`, `email`, `telefono`, `mascota`, `Numero_mascotas`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Preparar la sentencia
if ($stmt = mysqli_prepare($Conexion, $sql)) {
    // Vincular parámetros
    mysqli_stmt_bind_param($stmt, "ssssssssssi", $habitaciones, $iduser, $icioestan, $finestan, $nom, $nom2, $tipohab, $correo, $telefono, $mascota, $mascota2);

    // Ejecutar la sentencia SQL
    $envio = mysqli_stmt_execute($stmt);

    // Verificar si hay errores en la ejecución de la consulta
    if (!$envio) {
        echo '<script>alert("Tu registro no se pudo registrar. Error de MySQL: ' . mysqli_error($Conexion) . '")</script>';
    } else {
        // Redirigir a la página de pagos si la inserción fue exitosa
        header('Location: pagos.php');
    }

    // Cerrar la sentencia preparada
    mysqli_stmt_close($stmt);
} else {
    echo '<script>alert("Error al preparar la sentencia. Error de MySQL: ' . mysqli_error($Conexion) . '")</script>';
}

// Cerrar la conexión a la base de datos
mysqli_close($Conexion);
?>
