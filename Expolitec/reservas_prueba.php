<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reservas</title>
    <link rel="stylesheet" href="barra_nav_foot.css">
    <link rel="stylesheet" href="reservas_prueba.css">
    <link rel="stylesheet" href="footer.css">
    <script type="text/javascript" src="barr.js"></script>
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
                        <li><a href="inicio.php">Inicio</a></li>
                        <li><a href="#">Servicios</a>
                            <div class="topM"></div>
                            <ul class="menuv">
                                <li class="list"><a href="cafeteria.php">Cafeteria</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Reservaciones</a>
                            <div class="topM"></div>
                            <ul class="menuv">
                                <li class="list"><a href="reservas_prueba.php">Reserva Hotel</a></li>
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
        <article id="process">
            <section class="select"> <p class="tit_process">Buscar habitacion</p><img src="imgs/flecha.png" class="ic"></section>
            <section class="step"> <p class="tit_process">Reserva</p></section>
            <section class="step"><p class="tit_process">Paga</p></section>
        </article>
        <article id="left">
            <section id="container_filter">
                <p class="text">Busqueda <br><hr class="line"></p>
                <form action="#" method="post">
                    <input class=controles type="hidden" name="nombre" value="">
                    <input class=controles type="hidden" name="correo" value="">
                    <div class="inputbox">
                        <input type="date" name="icioestan" id="icioestan" class="inp" placeholder=" " required><br>
                        <span class="text_input">Fecha de Entrada</span>
                    </div>
                    <div class="inputbox">
                        <input type="date" name="finestan" id="finestan" class="inp" placeholder=" " required><br>
                        <span class="text_input">Fecha de Salida</span>
                    </div>
                    <input id="bot" type="submit" name="reservar" id="reservar" value="Buscar">

                </form> 
            </section>
        </article>
        <article id="right">
            <br>
            <section class="container_room">
                <div class="c_image">
                    <img src="../Expolitec/rooms/room1.jpg"  class="img">
                </div>
                <div class="info_room">
                    <p class="tit_hb">Nombre de la Habitación</p>
                    <p class="desc">Amplias y confortables, estas estancias de 34m2 cuentan con las mejores facilidades para disfrutar de tu estancia en Panamá. Las habitaciones Deluxe te ofrecen zona de estar con sofá, TV satélite, baño con bañera y lavabo doble, aire acondicionado, minibar, máquina de café y conexión WiFi.</p>
                </div>
                <div class="c_reserve">
                    <form action="" method="post">
                        <input type="submit" value="Reservar" class="bot_reserve">
                    </form>
                    <div class="c_precio">
                        <p class="precio">$00.00</p>
                    </div>
                </div>
            </section>
            <section class="container_room">
                <div class="c_image">
                    <img src="../Expolitec/rooms/room1.jpg"  class="img">
                </div>
                <div class="info_room">
                    <p class="tit_hb">Nombre de la Habitación</p>
                    <p class="desc">Amplias y confortables, estas estancias de 34m2 cuentan con las mejores facilidades para disfrutar de tu estancia en Panamá. Las habitaciones Deluxe te ofrecen zona de estar con sofá, TV satélite, baño con bañera y lavabo doble, aire acondicionado, minibar, máquina de café y conexión WiFi.</p>
                </div>
                <div class="c_reserve">
                    <form action="" method="post">
                        <input type="submit" value="Reservar" class="bot_reserve">
                    </form>
                    <div class="c_precio">
                        <p class="precio">$00.00</p>
                    </div>
                </div>
            </section>            <section class="container_room">
                <div class="c_image">
                    <img src="../Expolitec/rooms/room1.jpg"  class="img">
                </div>
                <div class="info_room">
                    <p class="tit_hb">Nombre de la Habitación</p>
                    <p class="desc">Amplias y confortables, estas estancias de 34m2 cuentan con las mejores facilidades para disfrutar de tu estancia en Panamá. Las habitaciones Deluxe te ofrecen zona de estar con sofá, TV satélite, baño con bañera y lavabo doble, aire acondicionado, minibar, máquina de café y conexión WiFi.</p>
                </div>
                <div class="c_reserve">
                    <form action="" method="post">
                        <input type="submit" value="Reservar" class="bot_reserve">
                    </form>
                    <div class="c_precio">
                        <p class="precio">$00.00</p>
                    </div>
                </div>
            </section>
        </article>
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
<script>
  // Obtenemos el elemento #left
  var leftElement = document.getElementById('left');

  // Función que se ejecutará cada vez que ocurra un evento de desplazamiento
  window.onscroll = function() {
    // Obtenemos la posición del footer
    var footerPosition = document.getElementById("footer").offsetTop;

    // Obtenemos la posición actual de desplazamiento vertical
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    // Ajustamos la posición de #left en función del desplazamiento
    if (scrollTop >= footerPosition - window.innerHeight) {
      leftElement.style.position = "absolute";
      leftElement.style.top = footerPosition - window.innerHeight + "px";
    } else {
      leftElement.style.position = "fixed";
      leftElement.style.top = "8vh"; // Ajusta según tus necesidades
    }
  };
</script>
</html>