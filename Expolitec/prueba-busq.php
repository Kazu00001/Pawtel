<?php
require('conexion.php');

$inicio_estan = isset($_POST['inicioestan']) ? $Conexion->real_escape_string($_POST['inicioestan']) : null;
$fin_estan = isset($_POST['finestan']) ? $Conexion->real_escape_string($_POST['finestan']) : null;

$where = '';

if ($inicio_estan != null && $fin_estan != null) {
    $where = "WHERE id_habitacion IN (
        SELECT id_habitacion FROM habitaciones2
        WHERE id_habitacion NOT IN (
            SELECT id_habitacion FROM reservas
            WHERE (
                (fecha_inicio >= '$inicio_estan' AND fecha_inicio <= '$fin_estan') OR
                (fecha_fin >= '$inicio_estan' AND fecha_fin <= '$fin_estan') OR
                ('$inicio_estan' >= fecha_inicio AND '$inicio_estan' <= fecha_fin) OR
                ('$fin_estan' >= fecha_inicio AND '$fin_estan' <= fecha_fin)
            )
        )
    )";
}

$consulta_habitaciones = "SELECT nombre, COUNT(*) as cantidad FROM habitaciones2 $where GROUP BY nombre";

$Conexion->set_charset("utf8");
header('Content-Type: text/html; charset=utf-8');
$resultado_habitaciones = $Conexion->query($consulta_habitaciones);

if ($resultado_habitaciones === false) {
    die("Error en la consulta de habitaciones: " . $Conexion->error);
}

$num_rows_habitaciones = $resultado_habitaciones->num_rows;

if ($num_rows_habitaciones > 0) {
    while ($row_habitacion = $resultado_habitaciones->fetch_assoc()) {
        $nombre_habitacion = $row_habitacion['nombre'];
        $cantidad_habitaciones = $row_habitacion['cantidad'];

        // Ahora, puedes usar $nombre_habitacion y $cantidad_habitaciones para construir tu HTML
        echo '<section class="container_room">';
        echo '<div class="c_image">';
        echo '<img src="../Expolitec/rooms/room1.jpg" class="img">';
        echo '</div>';
        echo '<div class="info_room">';
        echo "<p>$nombre_habitacion</p>";
        echo "<p>Cantidad disponible: $cantidad_habitaciones</p>";
        // Imprime más información si es necesario
        echo '</div>';
        echo '<div class="c_reserve">';
        // Aquí puedes incluir el formulario de reserva o cualquier otra información relacionada
        echo '</div>';
        echo '</section>';
    }
} else {
    echo '<p>No hay habitaciones disponibles para el rango de fechas seleccionado.</p>';
}

// Cerrar la conexión a la base de datos
$Conexion->close();
?>
