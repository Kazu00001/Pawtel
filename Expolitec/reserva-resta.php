
<?php
session_start();
if (!isset($_SESSION['loggedin'])) {

    header('Location: Login.html');
    exit;}

require_once('conexion.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reserva-resta.css">
    <link rel="stylesheet" href="barra_nav_foot.css">
    <link rel="stylesheet" href="footer.css">
    <title>Pawtel</title>
</head>
    <body>
    <header>
            <article id="titfo">
                <section id="titC">
                    <br>
                    <a href="/"><h1 id="tit">PawTel</h1></a>
                </section>
                <section id="barNav">
                <nav class="nave">
                    <ul class="menu">
                        <li><a href="/">Inicio</a></li>
                        <li><a href="#">Servicios</a>
                            <div class="topM"></div>
                            <ul class="menuv">
                                <li class="list"><a href="cafeteria.php">Cafeteria</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Reservaciones</a>
                            <div class="topM"></div>
                            <ul class="menuv">
                                <li class="list"><a href="reservas_prueba2.php">Reserva Hotel</a></li>
                                <li class="list"><a href="Reserva-resta.php">Reserva Restaurante</a></li>
                            </ul>
                        </li>
                    </ul>

                </nav>
                <section id="perfil">
                <a href="usser_perf.php"><div id="pic">
                    <?php
                        if(isset($_SESSION['loggedin'])){ ?>
                            <img id="imag" src="<?php echo'imgs/' . $_SESSION['foto']  ?>" >
                
                        <?php }
                    ?>
                        </div>
                    </a>

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
    <footer id="footer">
                <section id="aviso">
                    <span id="av">
                        PawTel no realiza activamente llamadas para ofrecer/vender vacaciones. Tampoco pide a través de SMS o de las redes sociales datos bancarios, tarjetas de crédito, clave NIP, <br>
                        contraseñas o datos sensibles de cualquier tipo. Si necesitas aclarar cualquier duda, puedes contactar con el Call Center en 800 225 5748.
                    </span>
                </section>
                <section id="logo">
                    <h1 id="log">PawTel</h1>
                    <p id="lo">© Reservation Shop S.L.U - I-AV-0000886.1· NIF B35978311·<br>
                        Declaración de Privacidad Términos y Condiciones Política de Cookies</p>
                </section>
                <section id="redes">
                    <a href="https://www.youtube.com/watch?v=0lapF4DQPKQ" target="_blank" rel="noopener noreferrer"><img src="imgs/instagram.png" class="ic"></a>
                    <a href="https://twitter.com/bts_bighit?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" rel="noopener noreferrer"><img src="imgs/twitter.png" class="ic"></a>
                    <a href="https://www.facebook.com/share/v/vE8F3jJBMivuGgHa/?mibextid=WC7FNe" target="_blank" rel="noopener noreferrer"><img src="imgs/facebook.png" class="ic"></a>
                    <a href="https://www.youtube.com/watch?v=0lapF4DQPKQ" target="_blank" rel="noopener noreferrer"><img src="imgs/youtube.png" class="ic"></a>
                    <a href="https://vm.tiktok.com/ZM6e1cn55/" target="_blank" rel="noopener noreferrer"><img src="imgs/tiktok.png" class="ic"></a>
                </section>
            </footer>
</body>
<script src="barr.js"></script>
</html>