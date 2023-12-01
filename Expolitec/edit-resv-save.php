<?php
require('conexion.php');

// Validar y escapar los datos del formulario
$inicio = mysqli_real_escape_string($Conexion, $_POST['inicio']);
$fin = mysqli_real_escape_string($Conexion, $_POST['fin']);
$names = mysqli_real_escape_string($Conexion, $_POST['names']);
$apellidos = mysqli_real_escape_string($Conexion, $_POST['apellidos']);
$Habitacion = mysqli_real_escape_string($Conexion, $_POST['Habitacion']);
$email = mysqli_real_escape_string($Conexion, $_POST['email']);
$telefono = mysqli_real_escape_string($Conexion, $_POST['telefono']);
$mascota = mysqli_real_escape_string($Conexion, $_POST['mascota']);
$nomasco = mysqli_real_escape_string($Conexion, $_POST['nomasco']);
$namepr = mysqli_real_escape_string($Conexion, $_POST['namepr']);
$numtarge = mysqli_real_escape_string($Conexion, $_POST['numtarge']);
$fechacadu = mysqli_real_escape_string($Conexion, $_POST['fechacadu']);
$posion = mysqli_real_escape_string($Conexion, $_POST['update']);

// Consulta SQL para actualizar la reserva
$sql = "UPDATE reservas SET 
        `fecha_inicio`='$inicio',
        `fecha_fin`='$fin',
        `Nombres`='$names',
        `Apellidos`='$apellidos',
        `Tipo_de_habitacion`='$Habitacion',
        `email`='$email',
        `telefono`='$telefono',
        `mascota`='$mascota',
        `Numero_mascotas`='$nomasco',
        `Nombre_propetario_target`='$namepr',
        `Numero_de_targeta`='$numtarge',
        `Fecha_vencimiento_targeta`='$fechacadu' 
        WHERE id_reserva='$posion'";

// Ejecutar la consulta
$envio = mysqli_query($Conexion, $sql);

// Verificar si la consulta se ejecutó correctamente
if ($envio) {
    header('Location: reservas-most.php');
} else {
    echo 'Hubo un problema al actualizar la reserva. Error: ' . mysqli_error($Conexion);
}

// Cerrar la conexión a la base de datos
mysqli_close($Conexion);
?>
