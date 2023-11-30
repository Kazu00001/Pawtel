<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contratar Empleado</title>
    <link rel="stylesheet" href="edit-resv.css">
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
                <p class="tit"><b><span class="big">Editar </span></b>Reserva</p>
            </article>
            <article id="add_info">
                <form action="add_emp.php" method="post" enctype="multipart/form-data">
                    <br>
                    <div class="inputbox">
                        <input type="date" name="name" class="inp" placeholder=" " required><br>
                        <span class="text_input">Inicio de estancia</span>
                    </div>
                    <div class="inputbox">
                        <input type="date" name="date" class="inp" placeholder=" " required><br>
                        <span class="text_input">Fin de estancia</span>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="phone" class="inp" placeholder=" " required><br>
                        <span class="text_input">Nombres</span>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="email" class="inp" placeholder=" " required><br>
                        <span class="text_input">Apellidos</span>
                    </div>
                    <div class="inputbox">
                        <select name="workArea" id="jobArea" class="inp" required>
                            <option value=""></option>
                            <option value="Finanzas">Little Dog</option>
                            <option value="Seguridad">PetHabit</option>
                            <option value="Cocinero">CatStay</option>
                            <option value="Recamareras">KingPaw</option>
                        </select>
                        <span class="text_input">Tipo de Habitacion</span>
                    </div>
                    <div class="inputbox">
                        <input type="email" name="job" class="inp" placeholder=" " required><br>
                        <span class="text_input">Email</span>
                    </div>

                    <div class="inputbox">
                        <input type="tel" name="schedule" class="inp" placeholder=" " required><br>
                        <span class="text_input">Telefono</span>
                    </div>
                    <div class="inputbox">
                        <select name="workArea" id="jobArea" class="inp" required>
                            <option value=""></option>
                            <option value="Finanzas">Gato</option>
                            <option value="Seguridad">Perro</option>
                            <option value="Cocinero">Ambos</option>
                        </select>
                        <span class="text_input">Mascotas</span>
                    </div>
                    <div class="inputbox">
                        <select name="workArea" id="jobArea" class="inp" required>
                            <option value=""></option>
                            <option value="Finanzas">1</option>
                            <option value="Seguridad">2</option>
                            <option value="Cocinero">3</option>
                            <option value="Recamareras">4</option>
                        </select>
                        <span class="text_input">N° Mascotas</span>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="bank" class="inp" placeholder=" " required><br>
                        <span class="text_input">titular de la tarjeta</span>
                    </div>
                    <div class="inputbox">
                        <input type="number" name="salary" class="inp" placeholder=" " required><br>
                        <span class="text_input">Numero de Tarjeta</span>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="salary" class="inp" placeholder=" " required><br>
                        <span class="text_input">Fecha de Caducidad de Tarjeta</span>
                    </div><br>
                    <input type="submit" value="Guardar" id="bot">
                </form>
            </article>

        </article> 
    </main>
</body>
</html>