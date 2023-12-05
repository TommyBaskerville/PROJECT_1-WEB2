<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
    session_destroy();
    exit();
}
?>
<?php
$stadiums = [
    [
        'name' => 'Estadio Santiago Bernabéu',
        'images' => [
            '../assets/images/bernabeu5.webp',
            '../assets/images/Bernabeu.webp',
            '../assets/images/bernabeu3.webp',
            '../assets/images/bernabeu4.webp',
        ],
        'description' => 'El Camp Nou, ubicado en Barcelona, es uno de los estadios más icónicos del mundo. Es el hogar del FC Barcelona y ha sido testigo de innumerables momentos históricos en el fútbol. Con una capacidad para más de 99,000 espectadores, el Camp Nou es un coloso que rezuma pasión y tradición. Su arquitectura emblemática combina una estructura modernista con instalaciones de última generación.'
    ],
    // add more stadiums if necessary
];
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
    <center><h2>Soluciones Sostenibles</h2></center>
    <?php foreach ($stadiums as $index => $stadium): ?>
    <section class="image-section">
        <h3><?= $stadium['name'] ?></h3>
        <div id="image-carousel-<?= $index ?>" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php foreach ($stadium['images'] as $imageIndex => $image): ?>
                    <li data-target="#image-carousel-<?= $index ?>" data-slide-to="<?= $imageIndex ?>" class="<?= $imageIndex === 0 ? 'active' : '' ?>"></li>
                <?php endforeach; ?>
            </ol>

            <!-- Carousel images -->
            <div class="carousel-inner">
                <?php foreach ($stadium['images'] as $imageIndex => $image): ?>
                    <div class="carousel-item <?= $imageIndex === 0 ? 'active' : '' ?>">
                        <img src="<?= $image ?>" alt="Estadio <?= $index ?> - Imagen <?= $imageIndex + 1 ?>">
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Carousel caption -->
            <div class="carousel-caption">
                <p><?= $stadium['description'] ?></p>
            </div>

            <!-- Carousel controls -->
            <a class="carousel-control-prev" href="#image-carousel-<?= $index ?>" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#image-carousel-<?= $index ?>" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </section>
<?php endforeach; ?>


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