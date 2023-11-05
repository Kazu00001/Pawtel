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
            <button class="categoria" onclick="cambiar()">
            <section>
                <form action="cafeteriacat.php" method="post">
                    <input type="hidden" name="id" value="Bebidas Calientes">
                        <div class="c_icon">
                            <img src="imgs/C-taza-café.png" class="icons">
                        </div>
                        <div class="titSer">
                        <input type="submit" name="id" class="titS" value="Bebidas Calientes">
                        </div>
                </form>
            </section>
            </button>
                
            <button class="categoria" onclick="cambiar()">
                <section>
                
                    <div class="c_icon">
                        <img src="imgs/C-café-frio.png" class="icons">
                    </div>
                
                    <script type="text/javascript">
                    function cambiar(){
                    
                        document.location.href ="cafeteria_cat.php";
                    }
                    </script>

                    <div class="titSer">
                        <p class="titS">Bebidas Frias</p>
                    </div>
                </section>
                </button>
                <section class="categoria">
                    <div class="c_icon">
                        <img src="imgs/C-pastel.png" class="icons">
                    </div>
                    <div class="titSer">
                        <p class="titS">Postres</p>
                    </div>
                </section>
                <section class="categoria">
                    <div class="c_icon">
                        <img src="imgs/C-aperitivos.png" class="icons">
                    </div>
                    <div class="titSer">
                        <p class="titS">Aperitivos</p>
                    </div>
                </section>
            </article>
        </main>
    
</body>
</html>