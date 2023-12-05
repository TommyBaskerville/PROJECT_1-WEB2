<?php
session_start();
if (!isset($_SESSION['usuario'])) { // Si sesion no existe
    echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "../index.php";
            </script>
        ';
    // header("location: index.php");
    session_destroy();
    die();

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadios</title>
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/style-home.css">
    <link rel="stylesheet" href="../assets/css/style_carousen.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    <main>
    <center><h2>Los Mejores Estadios de la Historia</h2></center>
    <div class="image-section">
    
    <h3>Estadio Azteca</h3>
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
                <img src="../assets/images/azteca.webp" alt="Estadio 1 - Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/azteca5.webp" alt="Estadio 1 - Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/azteca3.webp" alt="Estadio 1 - Imagen 3">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/azteca4.webp" alt="Estadio 1 - Imagen 4">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/azteca2.webp" alt="Estadio 1 - Imagen 4">
            </div>
        </div>

        <!-- Carrusel Caption -->
        <div class="carousel-caption">
            <p style="background-color: black; border-radius: 5px; opacity: 0.8;">El Estadio Azteca es un estadio de fútbol ubicado en la Ciudad de México, México. Es el estadio más grande del país, con una capacidad de 83 264 espectadores.



El Estadio Azteca es uno de los estadios más emblemáticos del mundo. Ha sido sede de dos Copas Mundiales de la FIFA, dos Juegos Olímpicos, dos finales de la Copa América y dos finales de la Copa Libertadores.</p>
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


<div class="image-section">
    <h3>Estadio de Maracaná</h3>
    <div id="image-carousel-2" class="carousel slide" data-ride="carousel">
        <!-- Indicadores -->
        <ol class="carousel-indicators">
            <li data-target="#image-carousel-2" data-slide-to="0" class="active"></li>
            <li data-target="#image-carousel-2" data-slide-to="1"></li>
            <li data-target="#image-carousel-2" data-slide-to="2"></li> 
            <li data-target="#image-carousel-2" data-slide-to="3"></li>
            <li data-target="#image-carousel-2" data-slide-to="4"></li>
        </ol>

        <!-- Imágenes del carrusel para Estadio 2 -->
        <div class="carousel-inner">
        <div class="carousel-item active">
                <img src="../assets/images/maracana.webp" alt="Estadio 2 - Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/maracana2.webp" alt="Estadio 2 - Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/maracana3.webp" alt="Estadio 2 - Imagen 3">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/maracana4.webp" alt="Estadio 2 - Imagen 4">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/maracana5.webp" alt="Estadio 2 - Imagen 4">
            </div>

        </div>

        <!-- Carrusel Caption para Estadio 2 -->
        <div class="carousel-caption">
        <p style="background-color: black; border-radius: 5px; opacity: 0.8;">El Estadio Maracaná es un estadio de fútbol ubicado en la ciudad de Río de Janeiro, Brasil. Es el estadio más grande de América del Sur, con una capacidad de 78 838 espectadores.

El estadio fue construido en 1950 para albergar la Copa Mundial de la FIFA de 1950. Fue inaugurado el 19 de junio de 1950 con un partido amistoso entre Brasil y Uruguay.

El Estadio Maracaná es uno de los estadios más emblemáticos del mundo. Ha sido sede de dos Copas Mundiales de la FIFA, dos Juegos Olímpicos, dos finales de la Copa América y dos finales de la Copa Libertadores. </p>
        </div>

        <!-- Controles del carrusel para Estadio 2 -->
        <a class="carousel-control-prev" href="#image-carousel-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#image-carousel-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>

<div class="image-section">
    <h3>Estadio Camp Nou</h3>
    <div id="image-carousel-3" class="carousel slide" data-ride="carousel">
        <!-- Indicadores -->
        <ol class="carousel-indicators">
            <li data-target="#image-carousel-3" data-slide-to="0" class="active"></li>
            <li data-target="#image-carousel-3" data-slide-to="1"></li>
            <li data-target="#image-carousel-3" data-slide-to="2"></li> 
            <li data-target="#image-carousel-3" data-slide-to="3"></li>
            <li data-target="#image-carousel-3" data-slide-to="4"></li>
        </ol>

        <!-- Imágenes del carrusel para Estadio 2 -->
        <div class="carousel-inner">
        <div class="carousel-item active">
                <img src="../assets/images/campnou4.webp" alt="Estadio 3 - Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/campnou5.webp" alt="Estadio 3 - Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/campnou3.webp" alt="Estadio 3 - Imagen 3">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/campnou2.webp" alt="Estadio 3 - Imagen 4">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/Camp-Nou-1.webp" alt="Estadio 3 - Imagen 4">
            </div>
            <!-- Agrega más imágenes para Estadio 2 según sea necesario -->
        </div>

        <!-- Carrusel Caption para Estadio 2 -->
        <div class="carousel-caption">
        <p style="background-color: black; border-radius: 5px; opacity: 0.8;">El Camp Nou, ubicado en Barcelona, es uno de los estadios más icónicos del mundo. Es el hogar del FC Barcelona y ha sido testigo de innumerables momentos históricos en el fútbol. Con una capacidad para más de 99,000 espectadores, el Camp Nou es un coloso que rezuma pasión y tradición. Su arquitectura emblemática combina una estructura modernista con instalaciones de última generación. </p>
        </div>

        <!-- Controles del carrusel para Estadio 2 -->
        <a class="carousel-control-prev" href="#image-carousel-3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#image-carousel-3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>

<div class="image-section">
    <h3>Estadio Santiago Bernabéu</h3>
    <div id="image-carousel-4" class="carousel slide" data-ride="carousel">
        <!-- Indicadores -->
        <ol class="carousel-indicators">
            <li data-target="#image-carousel-4" data-slide-to="0" class="active"></li>
            <li data-target="#image-carousel-4" data-slide-to="1"></li>
            <li data-target="#image-carousel-4" data-slide-to="2"></li> 
            <li data-target="#image-carousel-4" data-slide-to="3"></li>
            <li data-target="#image-carousel-4" data-slide-to="4"></li>
        </ol>

        <!-- Imágenes del carrusel para Estadio 2 -->
        <div class="carousel-inner">
        <div class="carousel-item active">
                <img src="../assets/images/bernabeu5.webp" alt="Estadio 4 - Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/Bernabeu.webp" alt="Estadio 4 - Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/bernabeu3.webp" alt="Estadio 4 - Imagen 3">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/bernabeu4.webp" alt="Estadio 4 - Imagen 4">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/bernabeu2.webp" alt="Estadio 4 - Imagen 4">
            </div>
            <!-- Agrega más imágenes para Estadio 2 según sea necesario -->
        </div>

        <!-- Carrusel Caption para Estadio 2 -->
        <div class="carousel-caption">
        <p style="background-color: black; border-radius: 5px; opacity: 0.8;">El Estadio Santiago Bernabéu es un estadio de fútbol ubicado en Madrid, España. Es el estadio del Real Madrid, uno de los clubes de fútbol más exitosos del mundo.

El estadio tiene capacidad para 81 044 espectadores y es uno de los estadios de fútbol más grandes del mundo. Fue inaugurado en 1947 y ha sido sede de numerosos partidos internacionales y eventos deportivos, incluidas dos finales de la Copa Mundial de la FIFA.</p>
        </div>

        <!-- Controles del carrusel para Estadio 2 -->
        <a class="carousel-control-prev" href="#image-carousel-4" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#image-carousel-4" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>

<div class="image-section">
    <h3>Estadio Anfield</h3>
    <div id="image-carousel-5" class="carousel slide" data-ride="carousel">
        <!-- Indicadores -->
        <ol class="carousel-indicators">
            <li data-target="#image-carousel-5" data-slide-to="0" class="active"></li>
            <li data-target="#image-carousel-5" data-slide-to="1"></li>
            <li data-target="#image-carousel-5" data-slide-to="2"></li> 
            <li data-target="#image-carousel-5" data-slide-to="3"></li>
            <li data-target="#image-carousel-5" data-slide-to="4"></li>
        </ol>

        <!-- Imágenes del carrusel para Estadio 2 -->
        <div class="carousel-inner">
        <div class="carousel-item active">
                <img src="../assets/images/Anfield.webp" alt="Estadio 4 - Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/anfield2.jpg" alt="Estadio 4 - Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/anfield3.webp" alt="Estadio 4 - Imagen 3">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/anfield4.webp" alt="Estadio 4 - Imagen 4">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/anfield2.jpg" alt="Estadio 4 - Imagen 4">
            </div>
            <!-- Agrega más imágenes para Estadio 2 según sea necesario -->
        </div>

        <!-- Carrusel Caption para Estadio 2 -->
        <div class="carousel-caption">
        <p style="background-color: black; border-radius: 5px; opacity: 0.8;">Anfield es un estadio histórico, construido en 1884. Ha sido sede de algunos de los momentos más memorables de la historia del fútbol, ​​incluidos los tres títulos de la Copa de Europa del Liverpool en la década de 1970.

El estadio es conocido por su atmósfera eléctrica, que crea una experiencia de fútbol única para los fanáticos. Anfield es un lugar especial para los fanáticos del Liverpool y un lugar donde se han forjado grandes momentos deportivos.</p>
        </div>

        <!-- Controles del carrusel para Estadio 2 -->
        <a class="carousel-control-prev" href="#image-carousel-5" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#image-carousel-5" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>


</main>

    </main>
  
     <!-- js code -->
     <script src="/js/script-home.js"></script>



   
    <!-- Animacion de JS para el menu deplegable en la Nav -->
    <script>
    let dropdown1 = document.querySelector('#dropdown-btn1').parentNode;
    let dropdownBtn1 = document.getElementById('dropdown-btn1');

    dropdownBtn1.addEventListener('click', () => {
        dropdown1.classList.toggle('dropdown-active');
    });
    </script>

    <script>
    let dropdown2 = document.querySelector('#dropdown-btn2').parentNode;
    let dropdownBtn2 = document.getElementById('dropdown-btn2');

    dropdownBtn2.addEventListener('click', () => {
        dropdown2.classList.toggle('dropdown-active');
    });
    </script>

</body>



</html>