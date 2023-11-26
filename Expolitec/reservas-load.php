<?php
require('conexion.php');

$columas = ['numorder','nombreclient','correo','iniestan','finestan','habitaciones','huspedes','ninos','Nombrpaq','Nombre_propetario_target','Numero_de_targeta','Fecha_vencimiento_targeta'];
$table = "reserva";
$columas2 = ['numorder','nombreclient'];
$campo = isset($_POST['searRev']) ? $Conexion->real_escape_string($_POST['searRev']) : null;
$where = '';

if ($campo != null) {
    $where = "WHERE (";
    $cont = count($columas2);

    for ($i = 0; $i < $cont; $i++) {
        $where .= $columas2[$i] . " LIKE '%" . $campo . "%' OR ";
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
        echo '<td>' . $row['numorder'] . '</td>';
        echo '<td>' . $row['nombreclient'] . '</td>';
        echo '<td>' . $row['correo'] . '</td>';
        echo '<td>' . $row['iniestan'] . '</td>';
        echo '<td>' . $row['finestan'] . '</td>';
        echo '<td>' . $row['habitaciones'] . '</td>';
        echo '<td>' . $row['huspedes'] . '</td>';
        echo '<td>' . $row['ninos'] . '</td>';
        echo '<td>' . $row['Nombrpaq'] . '</td>';
        echo '<td>' . $row['Nombre_propetario_target'] . '</td>';
        echo '<td>' . $row['Numero_de_targeta'] . '</td>';
        echo '<td>' . $row['Fecha_vencimiento_targeta'] . '</td>';
        echo '<td> <form action="eliminar.php" method="post">
        <input type="hidden" name="eliminar" value="'. $row['numorder'] . '">
        <button class="Btn" onclick="enviarFormulario3()">
  
        <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
  
        <div class="text"><pre>   Eliminar</pre></div>
        </button>
        
        </form></td>
        <script>
        function enviarFormulario3() {
            document.getElementById("form3").submit();
        }
        </script>
        </button>'
        ;
        echo '<td> <a href="">Eliminar</a></td>';
        echo '</tr>';
    }
} else {
    echo '<tr>';
    echo '<td colspan="15">Sin resultados</td>';
    echo '</tr>';
}
?>
