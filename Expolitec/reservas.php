<?php
session_start();
if (!isset($_SESSION['loggedin'])) {

    header('Location: Login.html');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
    <link rel="stylesheet" href="reservas.css">
</head>
<body>
    <header>
        <br><br>
        <h1>Has Tu Reservacion! </h1>
    </header>
    <main>
        <section id="izquierda">
            <div class="FormIzq">
                <form action="reservas-save.php" method="post">
                <input class=controles type="hidden" name="nombre" value="<?php $_SESSION['name'] ?>">
                <input class=controles type="hidden" name="correo" value="<?php $_SESSION['email'] ?>">
                <label for="icioestan">Fecha de Entrada</label>
                <input class=controles type="date" name="icioestan" id="icioestan"> <br>
                <label for="finestan">Fecha de Salida</label>
                <input class=controles type="date" name="finestan" id="finestan">
                    <legend>
                        <label for="habitaciones">Habitaciones:</label>
                    <select name="habitaciones" class="select">
                        <option value="1">Opción 1</option>
                        <option value="2">Opción 2</option>
                        <option value="3">Opción 3</option>
                        <option value="4">Opción 4</option>
                        <option value="5">Opción 5</option>
                        <option value="6">Opción 6</option>
                        <option value="7">Opción 7</option>
                        <option value="8">Opción 8</option>
                        <option value="9">Opción 9</option>
                        <option value="10">Opción 10</option>
                    </select>
                    <label for="huspedes">Huspedes:</label>
                    <select name="huspedes" class="select">
                        <option value="1">Opción 1</option>
                        <option value="2">Opción 2</option>
                        <option value="3">Opción 3</option>
                        <option value="4">Opción 4</option>
                        <option value="5">Opción 5</option>
                        <option value="6">Opción 6</option>
                        <option value="7">Opción 7</option>
                        <option value="8">Opción 8</option>
                        <option value="9">Opción 9</option>
                        <option value="10">Opción 10</option>
                    </select>
                    <label for="ninos">Niños:</label>
                    <select name="ninos" class="select">
                        <option value="1">Opción 1</option>
                        <option value="2">Opción 2</option>
                        <option value="3">Opción 3</option>
                        <option value="4">Opción 4</option>
                        <option value="5">Opción 5</option>
                        <option value="6">Opción 6</option>
                        <option value="7">Opción 7</option>
                        <option value="8">Opción 8</option>
                        <option value="9">Opción 9</option>
                        <option value="10">Opción 10</option>
                    </select>
                </legend>
                <label for="mascota">Mascota:</label>
                <input class=controles type="text" name="mascota" id="mascota">

                <!-- hace consulta con la base de datos y trae las habitaciones -->
                <label for="tipohab">Tipo de habitacion:</label>
                <select name="tipohab" id="tipohab">
                <?php 
                    include('conexion.php');
                    $produc="SELECT * FROM habitaciones";
                    $resul=mysqli_query($Conexion,$produc);
                    while($valores= mysqli_fetch_array($resul)){
                    echo '<option value="'.$valores['idh'].'">'.$valores['nomh'].'</option>';
                    }
                ?>
                </select>
                <p class=p>Estoy de Acuerdo con los <a href="#">Terminos y Condiciones</a></p>
                <input class="controles" type="submit" name="reservar" id="reservar" value="Reservar">
            </form> 
            </div>
        </section>
        <section>
                <!-- es la estructura del contenrdor de la habitacion -->
                <!-- llena los contendores con la informacion de las habotaciones y diseño ya es la maquetacion en codigo para que solo acomodes va -->
            <!-- little dog -->
            <?php	
            include('conexion.php');
            $produc="SELECT * FROM habitaciones";
            $resul=mysqli_query($Conexion,$produc);
            while($valores= mysqli_fetch_array($resul)){ ?> 
                <aside id="der">
                <img src="<?php echo $valores['Imagen']; ?>" alt="">  <!-- imagen de habitacion -->
                <h1 class="tituloHabitaciones"><?php echo $valores['nomh']; ?></h1>
                <hr>
                <img src="Expolitec/imgs/persona.png" alt=""><p><?php echo $valores['nomh']; ?></p>  <!-- foto persona  -->
                <img src="Expolitec/imgs/ducha.png" alt=""><p><?php echo $valores['duch']; ?></p>  <!-- ducha-->
                <img src="Expolitec/imgs/huella.png" alt="">  <!-- pata mascota -->
                <img src="Expolitec/imgs/cama.png" alt=""><p><?php echo $valores['cams']; ?></p>  <!-- camas  -->
                <p class="precios"><?php echo $valores['precio']; ?></p> 
                <hr>
                <p class="descrip"><?php echo $valores['descriph1']; ?></p>
                <hr>
                <img src="Expolitec/imgs/persona.png" alt=""><p><?php echo $valores['pers2']; ?></p>  <!-- foto persona  -->
                <img src="Expolitec/imgs/ducha.png" alt=""><p><?php echo $valores['duch2']; ?></p>  <!-- ducha-->
                <img src="Expolitec/imgs/huella.png" alt="">  <!-- pata mascota -->
                <img src="Expolitec/imgs/cama.png" alt=""><p><?php echo $valores['cams2']; ?></p>  <!-- camas  -->
                <p class="precios"><?php echo $valores['precio2']; ?></p> 
                <hr>
                <p class="descrip"><?php echo $valores['descriph2']; ?></p>
            </aside>
            <?php }
            ?>
        </section>
    </main>
</body>
</html>