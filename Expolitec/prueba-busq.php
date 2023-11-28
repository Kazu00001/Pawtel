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

$consulta_habitaciones = "SELECT nombre,precio, COUNT(*) as cantidad FROM habitaciones2 $where GROUP BY nombre";

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
        $precio_habitacion = $row_habitacion['precio'];
        $cantidad_habitaciones = $row_habitacion['cantidad'];

        echo '<section class="container_room">';
        echo '<div class="c_image">';
        echo '<img src="../Expolitec/rooms/room1.jpg"  class="img">';
        echo '</div>';
        echo '<div class="info_room">';
        echo '<p class="tit_hb">' . $nombre_habitacion . '</p>'; // Aquí corregí $row['nombre']
        echo '<p class="desc">Amplias y confortables, estas estancias de 34m2 cuentan con las mejores facilidades para disfrutar de tu estancia en Panamá. Las habitaciones Deluxe te ofrecen zona de estar con sofá, TV satélite, baño con bañera y lavabo doble, aire acondicionado, minibar, máquina de café y conexión WiFi.</p>';
        echo '</div>';
        echo '<div class="c_reserve">';
        echo '<form action="" method="post">';
        echo '<input type="submit" value="Reservar" class="bot_reserve">';
        echo '</form>';
        echo '<div class="c_precio">';
        echo '<p class="precio">$'. $precio_habitacion .'</p>';
        echo '</div>';
        echo '</div>';
        echo '</section>';
    }
} else {
    echo '<p>No hay habitaciones disponibles para el rango de fechas seleccionado.</p>';
}


// Cerrar la conexión a la base de datos
$Conexion->close();
?>
