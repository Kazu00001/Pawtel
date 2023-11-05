
<?php
session_start();
if (!isset($_SESSION['loggedin'])) {

    header('Location: Login.html');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawtel</title>
</head>
<body>
    <head>
        <h1>Restaurante food dog</h1>
    </head>
    <main> 
        <form action="save-reservarest.php" method="post">
        <label for="nombre">Nombre (Es el nombre cual se va quedar la reserva)</label>
        <input type="text" name="nombre" class="inputs" required>
        <label for="correo">Correo:</label>
        <input type="email" name="correo" class="inputs" required>
        <label for="hora">Hora de la reservacion</label>
        <input type="time" name="hora" class="inputs" required>
        <label for="personas">No. Personas</label>
        <input type="number" name="personas" class="inputs"required>
        <label for="telefono">Telefono:</label>
        <input type="tel" name="telefono" class="inputs"required>
        <label for="celebracion">¿Que celebras?</q></label>
        <input type="text" name="celebracion" class="inputs">
        <p>Importante: Solo tendrás 10 min. de tolerancia.</p>
        <input type="submit" value="Reservar">
        </form>
    </main>
</body>
</html>