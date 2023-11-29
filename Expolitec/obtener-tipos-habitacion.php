<?php
// obtener-tipos-habitacion.php

require('conexion.php'); // Asegúrate de tener tu archivo de conexión aquí

// Realiza la consulta para obtener los tipos de habitaciones
$consulta_tipos = "SELECT DISTINCT tipo FROM habitaciones3";
$resultado_tipos = $Conexion->query($consulta_tipos);

if ($resultado_tipos === false) {
    die("Error en la consulta de tipos de habitación: " . $Conexion->error);
}

$tipos_habitacion = array();

while ($row_tipo = $resultado_tipos->fetch_assoc()) {
    $tipos_habitacion[] = $row_tipo['tipo'];
}

// Devuelve los tipos de habitaciones como un JSON
header('Content-Type: application/json');
echo json_encode($tipos_habitacion);

// Cerrar la conexión a la base de datos
$Conexion->close();
?>
