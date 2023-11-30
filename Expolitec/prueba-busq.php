<?php
require('conexion.php');

$inicio_estan = isset($_POST['inicioestan']) ? date('Y-m-d', strtotime($_POST['inicioestan'])) : null;
$fin_estan = isset($_POST['finestan']) ? date('Y-m-d', strtotime($_POST['finestan'])) : null;


$consulta_habitaciones = "SELECT id_habitacion,nombre,tipo,precio,descrip,imagen, COUNT(*) as cantidad FROM habitaciones3 WHERE id_habitacion IN (SELECT id_habitacion FROM habitaciones3 WHERE id_habitacion NOT IN ( SELECT id_habitacion FROM reservas WHERE (('$inicio_estan' BETWEEN fecha_inicio AND fecha_fin) OR ('$fin_estan' BETWEEN fecha_inicio AND fecha_fin) OR (fecha_inicio BETWEEN '$inicio_estan' AND '$fin_estan') OR (fecha_fin BETWEEN '$inicio_estan' AND '$fin_estan')))) GROUP BY nombre;";

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
        $tipo_habitacion = $row_habitacion['tipo'];
        $precio_habitacion = $row_habitacion['precio'];
        $descrip_habitacion =$row_habitacion['descrip'];
        $imagen_habitacion = $row_habitacion['imagen'];
        $cantidad_habitaciones = $row_habitacion['cantidad'];

        echo '<section class="container_room">';
        echo '<div class="c_image">';
        echo '<img src="'. $imagen_habitacion .'"  class="img">';
        echo '</div>';
        echo '<div class="info_room">';
        echo '<p class="tit_hb">' . $nombre_habitacion . '</p>'; 
        echo '<p class="tit_hb"> Habitaciones disponibles: '.$cantidad_habitaciones.'</p>';
        echo '<p class="desc">'. $descrip_habitacion .'</p>';
        echo '<p class="desc">Tipo de habitacion: '. $tipo_habitacion .'</p>';
        echo '</div>';
        echo '<div class="c_reserve">';
        echo '<form action="reservasdos.php" method="post">';
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
