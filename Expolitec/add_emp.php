<?php
    require_once('conexion.php');

    $name=$_POST['name'];
    $birth=$_POST['date'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $workArea=$_POST['workArea'];
    $job=$_POST['job'];
    $schedule=$_POST['schedule'];
    $bank=$_POST['bank'];
    $salary=$_POST['salary'];

    // Verifica si el archivo es una imagen
if (isset($_FILES["image"])) {
    $image = basename($_FILES["image"]["name"]);
    $targetDirectory = "C:\wamp64\www\Pawtel\Expolitec\emp";  // Ajusta la ruta al directorio correcto
    $targetFile = $targetDirectory . $image;  // Ruta completa del archivo

    $esImagen = getimagesize($_FILES["image"]["tmp_name"]);
    if ($esImagen !== false) {
        // Mueve el archivo a la ubicación deseada
        if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $targetFile)) {
            echo "El archivo $image ha sido subido correctamente.";
        } else {
            echo "Hubo un error al subir el archivo.";
        }
    } else {
        echo "El archivo no es una imagen válida.";
    }
} else {
    echo "No se ha seleccionado ningún archivo.";
}
    $add=mysqli_query($Conexion, "INSERT INTO employees(nameEmp, birthEmp, phoneEmp, emailEmp, workArea, jobEmp, scheduleEmp, bankEmp, salary, imageEmp)
    VALUES ('$name','$birth','$phone','$email','$workArea','$job','$schedule','$bank','$salary','$image')");

    if($add){
        header('location: empleados.php');
    }else{
        echo 'No jaló wey';
    }
?>