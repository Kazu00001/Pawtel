<?php
    require_once('conexion.php');
    
    $numHb=$_POST['tipoHabitacion2'];
    $inicio=$_POST['icioestan']:
    $fin=$_POST['finestan'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $tipoHb=$_POST['tipoHabitacion'];
    $email=$_POST['email'];
    $telefono=$_POST['telefono'];
    $mascota=$_POST['mascota'];
    $numMascota=$_POST['mascota2'];
    $nom=$_POST['namet'];
    $numTar=$_POST['numbertar'];
    $venc=$_POST['fechex'];


    $insertar=mysqli_query($Conexion, "INSERT INTO reservas(id_habitacion, id_usuario, fecha_inicio, fecha_fin, Nombres, Apellidos, Tipo_de_habitacion, email, telefono, mascota, Numero_mascotas, Nombre_propetario_target, Numero_de_targeta, Fecha_vencimiento_targeta) VALUES 
    ('$numHb', '$', '$inicio', '$fin', '$nombre', '$apellido', '$tipoHb', '$email', '$telefono', '$mascota', '$numMascota', '$nom', '$numTar', '$venc')");

    if($insertar){
        header('location:usser_perf.php');
    }else{
        echo= 'No jala wey';
    }
?>