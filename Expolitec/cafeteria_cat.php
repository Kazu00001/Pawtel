<?php
    $id= $_POST['id'];
    require_once('conexion.php');
    session_start();

    
    $cat=mysqli_query($Conexion, "SELECT DISTINCT subcategoria FROM cafeteria WHERE categoria = '$id'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $id;?></title>
    <link rel="stylesheet" href="barra_nav_foot.css">
    <link rel="stylesheet" href="cafeteria_cat.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>
<header>
            <article id="titfo">
                <section id="titC">
                    <br>
                    <a href="index.php"><h1 id="tit">PawTel</h1></a>
                </section>
                <section id="barNav">
                <nav class="nave">
                    <ul class="menu">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="#">Servicios</a>
                            <div class="topM"></div>
                            <ul class="menuv">
                                <li class="list"><a href="cafeteria.php">Cafeteria</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Reservaciones</a>
                            <div class="topM"></div>
                            <ul class="menuv">
                                <li class="list"><a href="reservas_prueba2.php">Reserva Hotel</a></li>
                                <li class="list"><a href="Reserva-resta.php">Reserva Restaurante</a></li>
                            </ul>
                        </li>
                    </ul>

                </nav>
                <section id="perfil">
                <a href="usser_perf.php"><div id="pic">
                    <?php
                        if(isset($_SESSION['loggedin'])){ ?>
                            <img id="imag" src="<?php echo'imgs/' . $_SESSION['foto']  ?>" >
                
                        <?php }
                    ?>
                        </div>
                    </a>

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
<script src="barr.js"></script>
</html>