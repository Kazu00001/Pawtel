<?php
    $id= $_POST['id'];
    require_once('conexion.php');
    
    $cat=mysqli_query($Conexion, "SELECT DISTINCT subcategoria FROM cafeteria WHERE categoria = '$id'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $id;?></title>
    <link rel="stylesheet" href="barra_nav_foot.css">
    <link rel="stylesheet" href="cafeteria_cat.css">
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
      <br><br><br>
        <h1 class="titCat"><?php echo $id?></h1><br>
        
        <article id="container-dr">
            <?php while($categoria=mysqli_fetch_array($cat)) { ?>
            <section class="c_drink">
                <p class="titCate"><?php echo $categoria['subcategoria']?></p><br>
<!------------------------------------------------------------------------------------------------>
                <?php
                    $b=$categoria['subcategoria'];
                    $beb=mysqli_query($Conexion, "SELECT * FROM cafeteria WHERE subcategoria = '$b'");
                    while($bebida=mysqli_fetch_array($beb)) {
                ?>
                <section class="drink">
                    <div class="c_foto">
                        <img src="imgs/<?php echo $bebida['imagen']?>" class="foto">
                    </div>
                    <div class=ct_foto>
                        <br>
                        <p class="t_foto"><?php echo $bebida['nombreBebida']?></p>
                    </div>
                </section>
                <?php } ?>
<!------------------------------------------------------------------------------------------------>
            </section>
            <?php } ?>
        </article> 
    </main>
    <footer></footer>
</body>
</html>