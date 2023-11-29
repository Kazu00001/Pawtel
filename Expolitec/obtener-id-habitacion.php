<?php
// obtener-id-habitacion.php

require('conexion.php'); // Asegúrate de tener tu archivo de conexión aquí

$tipo_habitacion = isset($_GET['tipo']) ? $Conexion->real_escape_string($_GET['tipo']) : '';
$inicio_estan = isset($_GET['inicioestan']) ? $Conexion->real_escape_string($_GET['inicioestan']) : '';
$fin_estan = isset($_GET['finestan']) ? $Conexion->real_escape_string($_GET['finestan']) : '';

// Realiza la consulta para obtener los ID y nombres de habitaciones disponibles
$consulta_habitaciones = "SELECT id_habitacion, nombre FROM habitaciones3
                            WHERE tipo = '$tipo_habitacion'
                            AND id_habitacion NOT IN (
                                SELECT id_habitacion FROM reservas
                                WHERE ('$inicio_estan' BETWEEN fecha_inicio AND fecha_fin)
                                OR ('$fin_estan' BETWEEN fecha_inicio AND fecha_fin)
                                OR (fecha_inicio BETWEEN '$inicio_estan' AND '$fin_estan')
                                OR (fecha_fin BETWEEN '$inicio_estan' AND '$fin_estan')
                            )";

$resultado_habitaciones = $Conexion->query($consulta_habitaciones);

if ($resultado_habitaciones === false) {
    die("Error en la consulta de habitaciones: " . $Conexion->error);
}

$habitaciones = array();

while ($row_habitacion = $resultado_habitaciones->fetch_assoc()) {
    $habitaciones[] = $row_habitacion;
}

// Devuelve la información de habitaciones como JSON
header('Content-Type: application/json');
echo json_encode($habitaciones);

// Cerrar la conexión a la base de datos
$Conexion->close();
?>
