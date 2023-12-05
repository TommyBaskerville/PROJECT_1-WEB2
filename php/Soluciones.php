<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
    session_destroy();
    exit();
}
?>
<?php
$solutions = [
    [
        'name' => 'Energia solar',
        'images' => [
            '../assets/images/paneles1.jpg',
            '../assets/images/paneles2.jpeg',
            '../assets/images/paneles3.jpg',
            '../assets/images/paneles4.jpg',
        ],
        'description' => 'Los paneles solares convierten la luz solar en electricidad mediante células fotovoltaicas.
        Cuando la luz del sol golpea los paneles, los fotones en la luz mueven electrones en las células, generando corriente eléctrica continua.'
    ],
    [
        'name' => 'Energia eolica',
        'images' => [
            '../assets/images/eolica1.jpg',
            '../assets/images/eolica2.jpg',
            '../assets/images/eolica3.webp',
            '../assets/images/eolica4.webp',
        ],
        'description' => 'Las turbinas eólicas capturan la energía cinética del viento y la convierten en electricidad.
        Las aspas de la turbina giran al ser impactadas por el viento, activando un generador que produce electricidad.'
    ],
    [
        'name' => 'Transporte electrico',
        'images' => [
            '../assets/images/transporte1.jpg',
            '../assets/images/transporte2.jpeg',
            '../assets/images/transporte3.jpg',
            '../assets/images/transporte4.jpeg',
        ],
        'description' => 'Vehículos eléctricos (EV) incluyen coches, autobuses y bicicletas eléctricas; funcionan con baterías recargables.
        Cargarlos requiere infraestructura como estaciones de carga rápida y doméstica.
        Reducción significativa de emisiones y dependencia de combustibles fósiles.'
    ],
    [
        'name' => 'Reciclaje',
        'images' => [
            '../assets/images/reciclaje1.jpg',
            '../assets/images/reciclaje2.jpg',
            '../assets/images/reciclaje3.webp',
            '../assets/images/reciclaje4.jpg',
        ],
        'description' => 'Reciclar reduce la cantidad de desechos enviados a vertederos, conservando recursos.
        El compostaje convierte residuos orgánicos en fertilizantes naturales.'
    ],
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
    <?php foreach ($solutions as $index => $stadium): ?>
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

</body>



</html>