<?php 
session_start();
require_once('conexion.php');
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <Title>Inicio</Title>
        <link rel="stylesheet" href="inicio.css">
        <link rel="stylesheet" href="barra_nav_foot.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="barr.js">
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
                <section id="perfil">
                <div id="pic"><a href="usser_perf.php"><img src="<?php echo'imgs/' . $_SESSION['foto']  ?>" ></a></div>
                </section>
            </article>
        </header>
        <div id="progre"></div>
        <div class="publicidad"><!-- Esta sección es para colocar una imagen de publicidad-->
            <div class= "carruseles">
            </div>
        </div>
        <main>
            <article id="paquetes"><!--Toda esta parte contendrá los diferentes tipos de habitaciones-->
                <h1 class="tits">Planes de Habitaciones</h1>
                <section id="container-roomsC">
                <section class="habitacion"><section id="uno"></section></section>
                    <section class="habitacion"><section id="dos"></section></section>
                    <section class="habitacion"><section id="tres"></section></section>
                    <section class="habitacion2"></section>
                </section>
            </article><!-------------------------------------------------------------------------------->

            <aside class="imagen"></aside> <!--Imagen de publicidad-->


            <article class="servicios"> <!--Esta parte contendrá una vista rapid de los serviios que ofrece el hotel-->
                <br><br> 
                <section class="serv">
                    <h1 class="titc">Servicios</h1>
                    <p class="titet">
                    En nuestras instalaciones, nos dedicamos a ofrecer una experiencia excepcional tanto para nuestros clientes como para sus queridas mascotas, con servicios y espacios diseñados pensando en su bienestar y comodidad.
                    </p>
                </section>
                <section id="container-rooms">
                    <section class="square_s">
                        <div class="c_icon">
                            <img src="icons/taza-de-cafe.png" class="icons">
                        </div>
                        <div class="titSer">
                            <p class="titS">Cafeteria</p>
                        </div>
                    </section>
                    <section class="square_s">
                        <div class="c_icon">
                            <img src="icons/cena.png" class="icons">
                        </div>
                        <div class="titSer">
                            <p class="titS">Restaurante</p>
                        </div>
                    </section>
                    <section class="square_s">
                        <div class="c_icon">
                            <img src="icons/wifi.png" class="icons">
                        </div>
                        <div class="titSer">
                            <p class="titS">Wifi</p>
                        </div>
                    </section>
                    <!--<section class="square_s">
                        <div class="c_icon">
                            <img src="icons/mascotas-permitidas.png" class="icons">
                        </div>
                        <div class="titSer">
                            <p class="titS">Cuidado de Mascotas</p>
                        </div>
                    </section>-->
                    <section class="square_s">
                        <div class="c_icon">
                            <img src="icons/television.png" class="icons">
                        </div>
                        <div class="titSer">
                            <p class="titS">Television de Cable</p>
                        </div>
                    </section>
                    <section class="square_s">
                        <div class="c_icon">
                            <img src="icons/spa.png" class="icons">
                        </div>
                        <div class="titSer">
                            <p class="titS">Spa</p>
                        </div>
                    </section>
                    <section class="square_s">
                        <div class="c_icon">
                            <img src="icons/gimnasio.png" class="icons">
                        </div>
                        <div class="titSer">
                            <p class="titS">Gimnasio</p>
                        </div>
                    </section>
                    <section class="square_s">
                        <div class="c_icon">
                            <img src="icons/hombre-nadando.png" class="icons">
                        </div>
                        <div class="titSer">
                            <p class="titS">Piscina</p>
                        </div>
                    </section>
                    <section class="square_s">
                        <div class="c_icon">
                            <img src="icons/veterinario.png" class="icons">
                        </div>
                        <div class="titSer">
                            <p class="titS">Veterinaria</p>
                        </div>
                    </section>
                    <section class="square_s">
                        <div class="c_icon">
                            <img src="icons/tijeras-abiertas-forma-de-herramienta.png" class="icons">
                        </div>
                        <div class="titSer">
                            <p class="titS">Estetica Canina</p>
                        </div>
                    </section>
                    <section class="square_s">
                        <div class="c_icon">
                            <img src="icons/tazon-de-agua.png" class="icons">
                        </div>
                        <div class="titSer">
                            <p class="titS">Bebederos</p>
                        </div>
                    </section>
                </section>
            </article><!-------------------------------------------------------------------------------->

            <aside class="imagen2"></aside><!--imagen de publicidad-->

            <article class="servicios"> <!--Esta parte contendrá una vista rapida de las actividades existentes en el hotel-->
                <br><br> 
                <section class="serv">
                    <h1 class="titc">Actividades</h1>
                    <p class="titet">
                    Contamos con diversas actividades cuidadosamente diseñadas para ofrecer experiencias de calidad, propiciando así momentos enriquecedores tanto para usted como para sus seres queridos, incluyendo a sus mascotas.
                    </p>
                </section>
                <p></p>
                <section id="container-roomsdo">
                    <section class="square_ss">
                        <div class="c_icon">
                            <img src="icons/paseo-perro.png" class="icons">
                        </div>
                        <div class="titSer">
                            <p class="titSS">Paseo al Aire Libre</p>
                        </div>
                    </section>
                    <section class="square_ss">
                        <div class="c_icon">
                            <img src="icons/competencia-de-perros.png" class="icons">
                        </div>
                        <div class="titSer">
                            <p class="titSS">Juegos con tu Mascota</p>
                        </div>
                    </section>
                    <section class="square_ss">
                        <div class="c_icon">
                            <img src="icons/vino.png" class="icons">
                        </div>
                        <div class="titSer">
                            <p class="titSS">Cata de vinos</p>
                        </div>
                    </section>
                    <section class="square_ss">
                        <div class="c_icon">
                            <img src="icons/mapa.png" class="icons">
                        </div>
                        <div class="titSer">
                            <p class="titSS">Recorridos por la ciudad</p>
                        </div>
                    </section>
                    <section class="square_ss">
                        <div class="c_icon">
                            <img src="icons/camara.png" class="icons">
                        </div>
                        <div class="titSer">
                            <p class="titSS">Fotografias con tu Mascota</p>
                        </div>
                    </section>
                    <section class="square_ss">
                        <div class="c_icon">
                            <img src="icons/consola.png" class="icons">
                        </div>
                        <div class="titSer">
                            <p class="titSS">Sala de juegos</p>
                        </div>
                    </section>
                    <br><br><br>
                </section>
                
            </article><!------------------------------------------------------------------------------->
            <section class="conbut">
                    <button class="but" onclick='ress()'><span>Reserva Ahora</span></button>
                </section>
                <footer>
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
        </main>
    </body>
    <script>
        function ress() {
            location.href ='reservas.php';
        }
        
    </script>
    <script src="barr.js"></script>
</html>