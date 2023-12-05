<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
    session_destroy();
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greta</title>
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/style-person.css">
    <link rel="stylesheet" href="../assets/css/style-carousen.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style-home.css">
    <link rel="stylesheet" href="../assets/css/style_carousen.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<header>

<div class="container__header">

    <div class="logo">
        <a href="../home.php"><img src="../assets/images/Logos/logo3.png" alt="Logo">
    </div>

    <div class="menu">
        <nav>
            <ul>
                <li><a href="Impacto.php">Impacto ambiental</a></li>
                <li><a href="Soluciones.php">Soluciones sostenibles</a></li>
            </ul>
        </nav>


    </div>
    <i class="fa-solid fa-bars" id="icon_menu"></i>
    <div class="header__cerrar">

        <a href="../php/cerrar_sesion.php" class="btn"><input type="button" class="btn__header-cerrar" value="Cerrar Sesion"></a>
    </div>
</div>

</header>


    <main>
        <br>
        <center>
            <h1>Greta Thunberg</h1>
        </center>
        <div class="cover1">
            <img src="../assets/images/Greta.jfif" class="img" id="image_greta" alt="">

            <br>
            <div class="rectangulo">
                <p class="p">
                Una joven activista sueca que se convirtió en una de las voces más prominentes en la lucha contra el cambio climático. Comenzó a protestar sola frente al parlamento sueco en 2018, y su movimiento "Escuela en huelga por el clima" se ha extendido por todo el mundo. Thunberg ha sido nominada al Premio Nobel de la Paz y ha sido elogiada por su coraje y determinación. 
               </p>
            </div>
        </div>


        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <center>
            <H2>Logro</H2>
        </center>
        <div class="image-section">
    
    <h3></h3>
    <div id="image-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicador para las imagenes -->
        <ol class="carousel-indicators">
            <li data-target="#image-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#image-carousel" data-slide-to="1"></li>
            <li data-target="#image-carousel" data-slide-to="2"></li> 
            <li data-target="#image-carousel" data-slide-to="3"></li>
            <li data-target="#image-carousel" data-slide-to="4"></li>
        </ol>

        <!-- Imágenes del carrusel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/images/greta1.jfif" >
            </div>
            <div class="carousel-item">
                <img src="../assets/images/greta2.webp" >
            </div>
            <div class="carousel-item">
                <img src="../assets/images/greta3.jpg" >
            </div>
            <div class="carousel-item">
                <img src="../assets/images/greta4.jfif" >
            </div>
        </div>

        <!-- Carrusel Caption -->
        <div class="carousel-caption">
            <p style="background-color: black; border-radius: 5px; opacity: 0.8;">Thunberg inspiró a millones de personas en todo el mundo a tomar medidas contra el cambio climático. Su movimiento "Escuela en huelga por el clima" ha llevado a protestas en todo el mundo, y ha inspirado a los jóvenes a participar en la política.</p>
        </div>

        <!-- Controles del carrusel -->
        <a class="carousel-control-prev" href="#image-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#image-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>

    </main>



    <footer>

<div class="container__footer">
    <div class="box__footer">
        <div class="logo">
            <img src="../assets/images/Logos/Logo4.png" alt="Logo">
        </div>
        <div class="terms">
            <p>Sitio web diseñado por WSTU. © 2023 Todos los derechos reservados.</p>
        </div>
    </div>
    <div class="box__footer">
                <h2>Soluciones</h2>
                <a href="https://www.google.com">Widgets empleados</a>
            </div>

    <div class="box__footer">
        <h2>Compañia</h2>
        <a href="#">Acerca de</a>
        <a href="#">Servicios</a>
    </div>

    <div class="box__footer">
        <h2>Redes Sociales</h2>
        <a href="#"> <i class="fab fa-facebook-square"></i> Facebook</a>
        <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
        <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
        <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
    </div>

</div>

<div class="box__copyright">
    <hr>
    <p>Todos los derechos reservados © 2023 <b>STWU</b></p>
</div>
</footer>

    <!-- js code -->
    <script src="/js/script-home.js"></script>


</body>

</html>