<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Menú Cafeteria</title>
    <link rel="stylesheet" href="barra_nav_foot.css">
    <link rel="stylesheet" href="cafeteria.css">
</head>
<body>
        <header>
            <article id="titfo">
                <section id="titC">
                    <br>
                    <h1 id="tit">PawTel</h1>
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
                        <li>Inicio</li>
                        <li>Paquetes</li>
                        <li>Servicios</li>
                        <li>Reservaciones</li>
                    </ul>

                </nav>
            </section>
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
    
</body>
</html>