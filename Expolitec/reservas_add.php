<?php
    require_once('conexion.php');

    $inicio=$_POST['icioestan']:
    $fin=$_POST['finestan'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $tipoHb=$_POST['tipoHabitacion'];
    $numHb=$_POST['tipoHabitacion2'];
    $email=$_POST['email'];
    $telefono=$_POST['telefono'];
    $mascota=$_POST['mascota'];
    $numMascota=$_POST['mascota2'];


    $insertar=mysqli_query($Conexion, "INSERT INTO 0 () VALUES ('$inicio', '$fin', '$nombre', '$apellido', '$tipoHb', '$numHb', '$email', '$telefono', '$mascota', '$numMascota')");
?>