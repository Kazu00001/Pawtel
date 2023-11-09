
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
    <link rel="stylesheet" href="barra_nav_foot.css">
    <title>Pawtel</title>
</head>
<body>
<header>
            <article id="titfo">
                <section id="titC">
                    <br>
                    <a href="Inicio.php"><h1 id="tit">PawTel</h1></a>
                </section>
                <section id="search">
                    <br><br><br>
                    <input type="search" id="sear">
                </section>
                <section id="perfil">
                    <div id="pic"></div>
                </section>
            </article>
            <section id="bnav">
                <nav class="nave">
                    <ul class="menu">
                        <li><a href="Inicio.php">Inicio</a></li>
                        <li><a href="#">Paquetes</a></li>
                        <li><a href="">Servicios</a>
                            <ul class="menuv">
                                <li><a href="cafeteria.php">Cafeteria</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Reservaciones</a>
                            <ul class="menuv">
                                <li><a href="reservas.php">Reserva Hotel</a></li>
                                <li><a href="Reserva-resta.php">Reserva Restaurante</a></li>
                            </ul>
                        </li>
                    </ul>

                </nav>
            </section>
            
        </header>
        <div class="publicidad"><!-- Esta sección es para colocar una imagen de publicidad-->
            <div class= "carruseles">
                <section class="slider-carrusel"><img src="imgs/res1.jpg"></section>
                <section class="slider-carrusel"><img src="imgs/res2.jpg"></section>
                <section class="slider-carrusel"><img src="imgs/res3.jpg"></section>
                <section class="slider-carrusel"><img src="imgs/res4.jpg" ></section>
            </div>
        </div>
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