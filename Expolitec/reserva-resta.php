
<?php/*
session_start();
if (!isset($_SESSION['loggedin'])) {

    header('Location: Login.html');
    exit;
}*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reserva-resta.css">
    <title>Pawtel</title>
</head>
<body>
    <header>
        <h1>Restaurante food dog</h1>
    </header>
    <main> 
        <section class="cont">
            <section class="form">
                <form action="save-reservarest.php" method="post">
                    <label for="nombre">Nombre Completo:</label><br>
                    <input type="text" name="nombre" class="inputs" required><br>
                    <label for="correo">Correo:</label><br>
                    <input type="email" name="correo" class="inputs" required><br>
                    <!--Falto la Fecha :(((-->
                    <label for="hora">Hora de la reservacion</label><br>
                    <input type="time" name="hora" class="inputs" required><br>
                    <label for="personas">No. Personas</label><br>
                    <input type="number" name="personas" class="inputs"required><br>
                    <label for="telefono">Telefono:</label><br>
                    <input type="tel" name="telefono" class="inputs"required><br>
                    <label for="celebracion">¿Que celebras?</q></label><br>
                    <input type="text" name="celebracion" class="inputs"><br>
                    <p>Importante: Solo tendrás 10 min. de tolerancia.</p>
                    <input type="submit" value="Reservar" class="reservar">
                </form>
            </section>
        </section>
    </main>
</body>
</html>