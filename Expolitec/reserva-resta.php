
<?php /*
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
                    <a href="inicio.php"><h1 id="tit">PawTel</h1></a>
                </section>
                <section id="barNav">
                <nav class="nave">
                    <ul class="menu">
                        <li class="men"><a href="inicio.php">Inicio</a></li>
                        <li class="men"><a href="#">Servicios</a>
                            <div class="topM"></div>
                            <ul class="menuv">
                                <li class="list"><a href="cafeteria.php">Cafeteria</a></li>
                            </ul>
                        </li>
                        <li class="men"><a href="#">Reservaciones</a>
                            <div class="topM"></div>
                            <ul class="menuv">
                                <li class="list"><a href="reservas.php">Reserva Hotel</a></li>
                                <li class="list"><a href="Reserva-resta.php">Reserva Restaurante</a></li>
                            </ul>
                        </li>
                    </ul>

                </nav>
                </section>
                <section id="perfil">
                    <div id="pic"></div>
                </section>
            </article>
        </header>
    <main> 
        <section id="cont1">

        </section>
        <section id="cont2">
        <section class="cont">
        <article id="container_add">
            <article id="left">
                <p class="tit"><b><span class="big">Reserva </span></b>Restaurante</p>
            </article>
            <article id="add_info">
                <form action="save-reservarest.php" method="post">
                    <br>
                    <div class="inputbox">
                        <input type="input" name="nombre" class="inp" placeholder="Name" required><br>
                        <span class="text_input">Nombre Completo</span>
                    </div>

                    <div class="inputbox">
                        <input type="email" placeholder="Name"name="correo" class="inp" required><br>
                        <span class="text_input">Correo</span>
                    </div>

                    <div class="inputbox">
                        <input type="time" name="hora" class="inp" placeholder=" "required><br>
                        <span class="text_input">Hora de la reserva</span>
                    </div>

                    <div class="inputbox">
                        <input type="date" name="date" class="inp" placeholder=" "required><br>
                        <span class="text_input">Fecha de la reserva</span>
                    </div>

                    <div class="inputbox">
                    <input type="number" name="personas" class="inp"required><br>
                        <span class="text_input">No. Personas</span>
                    </div>

                    <div class="inputbox">
                    <input type="tel" name="telefono" class="inp"required><br>
                        <span class="text_input">Telefono</span>
                    </div>

                    <div class="inputbox">
                    <input type="text" name="celebracion" class="inp"required><br>
                        <span class="text_input">¿Que celebras?</span>
                    </div>
                    <div class="avis">
                        <span class="text_input">Importante: Solo tendrás 10 min. de tolerancia.</span>
                    </div><br>
                    <input type="submit" value="Reservar" id="bot">
                </form>
            </article>

        </article> 
        </section>
        </section>
    </main>
</body>
<script src="barr.js"></script>
</html>