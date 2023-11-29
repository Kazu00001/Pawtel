<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Menú Cafeteria</title>
    <link rel="stylesheet" href="barra_nav_foot.css">
    <link rel="stylesheet" href="cafeteria.css">
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
                <div id="pic"><a href="usser_perf.php"><img src="<?php echo'imgs/'.$_SESSION['img']?>" ></a></div>
                </section>
            </article>
        </header>
        <aside>
            <img src="imgs/cafe3.jpg" id="imC">
        </aside>
        <main>
            <br><br>
            <h1 class="titCat">Categorias</h1><br>
            <article id=container_cats>
            <button class="categoria">
            <section>
                <form action="cafeteria_cat.php" method="post" id="form1">
                            <input type="hidden" name="id" value="Bebidas Calientes">
                            <div class="c_icon">
                                <img src="imgs/C-taza-café.png" class="icons" onclick="enviarFormulario()">
                                <p class="titS">Bebidas Calientes</p>
                            </div>
                    </form>
            </section>
            <script>
                        function enviarFormulario() {
                            document.getElementById('form1').submit();
                        }
                    </script>
            </button>
                
            <button class="categoria">
            <section>
                    <form action="cafeteria_cat.php" method="post" id="form2">
                            <input type="hidden" name="id" value="Bebidas Frias">
                            <div class="c_icon">
                                <img img src="imgs/C-café-frio.png" class="icons" onclick="enviarFormulario2()">
                                <p class="titS">Bebidas Frias</p>
                            </div>
                    </form>
            </section>
            <script>
                        function enviarFormulario2() {
                            document.getElementById('form2').submit();
                        }
                    </script>
            </button>
             
            <button class="categoria" >
            <section>
                    <form action="cafeteria_cat.php" method="post" id="form3">
                            <input type="hidden" name="id" value="Postres">
                            <div class="c_icon">
                                <img src="imgs/C-pastel.png" class="icons" onclick="enviarFormulario3()">
                                <p class="titS">Postres</p>
                            </div>
                    </form>
            </section>
            <script>
                        function enviarFormulario3() {
                            document.getElementById('form3').submit();
                        }
                    </script>
            </button>
            <button class="categoria" >
            <section>
                    <form action="cafeteria_cat.php" method="post" id="form4">
                            <input type="hidden" name="id" value="Aperitivos">
                            <div class="c_icon">
                            <img src="imgs/C-aperitivos.png" class="icons" onclick="enviarFormulario4()">
                            <p class="titS">Aperitivos</p>
                            </div>
                    </form>
            </section>
            <script>
                        function enviarFormulario4() {
                            document.getElementById('form4').submit();
                        }
                    </script>
            </button>
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
<script src="barr.js"></script>
</html>