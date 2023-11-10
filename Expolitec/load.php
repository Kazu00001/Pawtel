<?php
require('conexion.php');

$columas = ['idh', 'Imagen', 'nomh', 'pers', 'duch', 'cams', 'precio', 'descriph1', 'pers2', 'duch2', 'cams2', 'precio2', 'descriph2', 'no_h', 'dispo', 'extras'];
$table = "habitaciones";
$campo = isset($_POST['campo']) ? $Conexion->real_escape_string($_POST['campo']) : null;
$where = '';

if ($campo != null) {
    $where = "WHERE (";
    $cont = count($columas);

    for ($i = 0; $i < $cont; $i++) {
        $where .= $columas[$i] . " LIKE '%" . $campo . "%' OR ";
    }

    $where = substr_replace($where, "", -3);
    $where .= ")";
}

$consult = "SELECT " . implode(",", $columas) . " FROM $table $where";
$Conexion->set_charset("utf8");
header('Content-Type: text/html; charset=utf-8');
$result = $Conexion->query($consult);

if ($result === false) {
    die("Error in query: " . $Conexion->error);
}

$num_rows = $result->num_rows;

if ($num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['idh'] . '</td>';
        echo '<td>' . $row['Imagen'] . '</td>';
        echo '<td>' . $row['nomh'] . '</td>';
        echo '<td>' . $row['pers'] . '</td>';
        echo '<td>' . $row['duch'] . '</td>';
        echo '<td>' . $row['cams'] . '</td>';
        echo '<td>' . $row['precio'] . '</td>';
        echo '<td>' . $row['descriph1'] . '</td>';
        echo '<td>' . $row['pers2'] . '</td>';
        echo '<td>' . $row['duch2'] . '</td>';
        echo '<td>' . $row['cams2'] . '</td>';
        echo '<td>' . $row['precio2'] . '</td>';
        echo '<td>' . $row['descriph2'] . '</td>';
        echo '<td>' . $row['no_h'] . '</td>';
        echo '<td>' . $row['dispo'] . '</td>';
        echo '<td>' . $row['extras'] . '</td>';
        echo '<td> <a href="">Editar</a></td>';
        echo '<td> <a href="">Eliminar</a></td>';
        echo '</tr>';
    }
} else {
    echo '<tr>';
    echo '<td colspan="17">Sin resultados</td>';
    echo '</tr>';
}
?>
