<?php
require('conexion.php');

$columas = ['idemp', 'emplenom', 'categoriaemple', 'sueldo', 'antiguedadme', 'fotemple', 'telempl'];
$columas2 = ['emplenom'];

$table = "allemployee";
$campo = isset($_POST['searP']) ? $Conexion->real_escape_string($_POST['searP']) : null;
$where = '';

if ($campo != null) {
    $where = "AND (";
    $cont = count($columas2);

    for ($i = 0; $i < $cont; $i++) {
        $where .= $columas2[$i] . " LIKE '%" . $campo . "%' OR ";
    }

    $where = substr_replace($where, "", -3);
    $where .= ")";
}

// Consulta para obtener las categorías y los resultados del filtrado
$consult = "SELECT DISTINCT categoriaemple FROM $table";
$Conexion->set_charset("utf8");
$resultCategorias = $Conexion->query($consult);

if ($resultCategorias === false) {
    die("Error in query: " . $Conexion->error);
}

while ($categoria = mysqli_fetch_assoc($resultCategorias)) {
    $categoriaNombre = $categoria['categoriaemple'];

    // Mostrar el nombre de la categoría
    echo '<h1 class="tit">' . $categoriaNombre . '</h1>';

    // Consulta para obtener los resultados del filtrado
    $consultFiltrado = "SELECT * FROM $table WHERE categoriaemple = '$categoriaNombre' $where";
    $resultFiltrado = $Conexion->query($consultFiltrado);;

    if ($resultFiltrado === false) {
        die("Error in query: " . $Conexion->error);
    }

    $num_rows = $resultFiltrado->num_rows;

    if ($num_rows > 0) {
        while ($row = mysqli_fetch_array($resultFiltrado)) {
            echo '<button class="emp" onclick="enviarFormulario()">';
            echo '<div class="c_image">';
            echo '<img src="emp/' . $row['fotemple'] . '" class="image">';
            echo '</div>';
            echo '<div class="c_name">';
            echo '<p class="nameEm">' . $row['emplenom'] . '</p>';
            echo '</div>';
            echo '<p class="puesto">' . $row['categoriaemple'] . '</p>';
            echo '</button>';
        }
    } else {
        echo '<p>No hay empleados en esta categoría</p>';
    }
}

echo '<script>';
echo 'function enviarFormulario() {';
echo 'document.getElementById("form1").submit();';
echo '}';
echo '</script>';
?>
