<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contratar Empleado</title>
    <link rel="stylesheet" href="inventario-add.css">
    <link rel="stylesheet" href="admin_bar_foot.css">
</head>
<body>
    <header>
        <article id="titfo">
            <section id="titC">
                <br>
                <a href="#"><h1 id="tit">PawTel</h1></a>
            </section>
            <section id="barNav">
            <nav class="nave">
                <ul class="menu">
                <li><a href="#">Reservaciones</a>
                        <div class="topM"></div>
                        <ul class="menuv">
                            <li class="list"><a href="reservas-most.php">Mostrar Reservaciones</a></li>
                            <li class="list"><a href="Tipodehb.php">Mostrar Habitaciones</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Empleados</a>
                        <div class="topM"></div>
                        <ul class="menuv">
                            <li class="list"><a href="empleados.php">Lista de Empleados</a></li>
                        </ul>
                    </li>
                    <li><a href="inventario-mostr.php">Inventario</a></li>
                </ul>

            </nav>
            </section>
            <section id="perfil">
                <div id="pic"></div>
            </section>
        </article>
    </header>
    <main>
        <article id="container_add">
            <article id="left">
                <p class="tit"><b><span class="big">Añadir </span></b>Producto</p>
            </article>
            <article id="add_info">
                <form action="inven-add.php" method="post" enctype="multipart/form-data">
                    <br>
                    <div class="inputbox">
                        <input type="text" name="name" class="inp" placeholder=" " required><br>
                        <span class="text_input">Nombre del Producto</span>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="descrip" class="inp" placeholder=" " required><br>
                        <span class="text_input">Descripcion</span>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="exist" class="inp" placeholder=" " required><br>
                        <span class="text_input">Existencia del Mes Pasado</span>
                    </div>
                    <div class="inputbox">
                        <input type="number" name="stock" class="inp" placeholder=" " required><br>
                        <span class="text_input">Stock</span>
                    </div>
                    <br>
                    <input type="submit" value="Añadir" id="bot">
                </form>
            </article>

        </article> 
    </main>
</body>
</html>