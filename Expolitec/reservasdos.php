<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reservas</title>
    <link rel="stylesheet" href="barra_nav_foot.css">
    <link rel="stylesheet" href="reservasdos.css">
    <link rel="stylesheet" href="footer.css">
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
                        <li><a href="#">Paquetes</a></li>
                        <li><a href="#">Servicios</a>
                            <div class="topM"></div>
                            <ul class="menuv">
                                <li class="list"><a href="cafeteria.php">Cafeteria</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Reservaciones</a>
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
        <article id="process">
            <section class="select"> <p class="tit_process">Buscar habitacion</p><img src="imgs/flecha.png" class="ic"></section>
            <section class="select"> <p class="tit_process">Reserva</p><img src="imgs/flecha.png" class="ic"></section>
            <section class="step"><p class="tit_process">Paga</p></section>
        </article>
        <article id="left">
            <section id="container_filter">
                <p class="text">Ingresa tus datos<br><hr class="line"></p>
                <p class="textt"> Datos de Contacto</p>
                <form action="#" method="post">
                    <input class=controles type="hidden" name="nombre" value="">
                    <input class=controles type="hidden" name="correo" value="">
                    
                    <div class="inputboxx">
                        <input type="text" name="nombre" id="mascota" class="inpt" placeholder=" " required><br>
                        <span class="text_input">Nombres</span>
                    </div>

                    <div class="inputboxx">
                        <input type="text" name="apellido" id="mascota" class="inpt" placeholder=" " required><br>
                        <span class="text_input">Apellidos</span>
                    </div>

                    <div class="inputboxxx">
                        <input type="email" name="email" id="mascota" class="inptt" placeholder=" " required><br>
                        <span class="text_input">Email</span>
                    </div>
                    <div class="inputboxxx">
                        <input type="tel" name="telefono" id="mascota" class="inptt" placeholder=" " required><br>
                        <span class="text_input">Telefono</span>
                    </div>

                    <div class="inputboxSm">
                        <select name="mascota" class="inp">
                            <option value=""></option>
                            <option value="1">Perro</option>
                            <option value="2">Gato</option>
                            <option value="3">Ambos</option>
                        </select>
                        <span class="text_input">Mascota</span>
                    </div>
                    <div class="inputboxSm">
                    <select name="huspedes" class="inp">
                            <option value=""></option>
                            <option value="1">Opción 1</option>
                            <option value="2">Opción 2</option>
                            <option value="3">Opción 3</option>
                            <option value="4">Opción 4</option>
                        </select>
                        <span class="text_input">Numero de Mascotas</span>
                    </div>  
                    <input id="bot" type="submit" name="reservar" id="reservar" value="Buscar">

                </form> 
               
            </section>
            <section id="container_tras">
                <p class="teext">Servicion de Traslado<br><hr class="line"></p>
                <form action="#" method="post">
                    <input type="checkbox" name="tras" class="chec">
                    <span class="textt">Sí, deseo contratar el servicio de traslados</span>
                </form> 
            </section>
            
        </article>
        <article id="right">
            <section id="contres">
                <p class="text">Resumen<br><hr class="line"></p>
                <div class="habpic"></div>
                <section class="detalles">
                    <h1 class="texxt">Habitacion:<span class="tod">Todo Incluido</span></h1>
                    <h1 class="texxt">Fecha de entrada:<span class="tod">Todo Incluido</span></h1>
                    <h1 class="texxt">Fecha de Salida:<span class="tod">Todo Incluido</span></h1>
                    <h1 class="texxt">Días de Estadia:<span class="tod">Todo Incluido</span></h1>
                    <h1 class="texxt">Regimen:<span class="tod">Todo Incluido</span></h1><br>
                    <!--<section id="container_res">-->
                        
                    <!--</section>-->
                </section>
                <p class="text"><br><hr class="line"></p>
                        <p class="rese"><span id="rem">No reembolsable</span> <br>Esta tarifa no admite 
                            cambios ni devoluciones. En caso de cancelación o de no presentarse el
                            día de la llegada, no se realizará ningún reembolso.</p>
                        <section class="conbut">
                            <button class="but" onclick='ress()'><span>Reservar</span></button>
                        </section>
            </section>
            
        </article>
    </main>
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
</body>
<script>
        function ress() {
            location.href ='pagos.php';
        }
        
    </script>
<script src="barr.js"></script>
</html>