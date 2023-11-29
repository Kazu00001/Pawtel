<?php
    require_once('conexion.php');

    //$pues=mysqli_query($Conexion, "SELECT DISTINCT categoriaemple FROM allemployee;");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista Empleados</title>
    <link rel="stylesheet" href="empleados.css">
    <link rel="stylesheet" href="admin_bar_foot.css">
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
                        <li><a href="empleados.php">Empleados</a></li>
                        <li><a href="inventario-mostr.php">Inventario</a></li>
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
    <main>
        <article id="container">
            <section id="container_search">
                <form action="" method="post">
                    <input type="text" name="searP" id="searP" onkeyup="getData()" placeholder="Buscar">
                </form>
                <form action="form_addEmp.html" method="post">
                    <input type="submit" value="Contratar Empleado" id="addEmp">
                </form>
            </section>
                <?php /*while($puesto=mysqli_fetch_array($pues)) { 
                
                $selEmp=$puesto['categoriaemple'];
                $emp=mysqli_query($Conexion, "SELECT * FROM allemployee WHERE categoriaemple = '$selEmp';");
                */
                ?>

            <section class="container_employees" id="container_employees">
                <!-- <h1 class="tit"><?php //echo $puesto['categoriaemple']?></h1> -->
                <?php // while($empleado=mysqli_fetch_array($emp)) { ?>
                <!--<button  class="emp" onclick="enviarFormulario()">
                    <div class="c_image">
                        <img src="emp/<?php //echo $empleado['fotemple']?>" class="image">
                    </div>
                    <div class="c_name">
                        <p class="nameEm"><?php //echo $empleado['emplenom']?></p>
                    </div>
                    <p class="puesto"><?php //echo $empleado['categoriaemple']?></p>
                </button>
                <script>
                        function enviarFormulario() {
                            document.getElementById('form1').submit();
                        }
                    </script -->
                        <script>
                            document.addEventListener("DOMContentLoaded", getData);

                            function getData() {
                                let input = document.getElementById("searP").value;
                                let content = document.getElementById("container_employees");
                                let url = "load_empleados.php";
                                let formData = new FormData();
                                formData.append('searP', input);

                                fetch(url, {
                                        method: "POST",
                                        body: formData
                                }).then(response => response.text())
                                    .then(data => {
                                    console.log(data);
                                    content.innerHTML = data;
                                    }).catch(err => console.log(err));
                            }
                        </script>
            </section>
                <?php //} ?>
<!-------------------------------------------------------------------------->
        </article>
    </main>
</body>
</html>