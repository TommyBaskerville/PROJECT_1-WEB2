<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
    session_destroy();
    exit();
}
?>
<?php
$impact = [
    [
        'name' => 'Elevacion de temperaturas',
        'images' => [
            '../assets/images/temperatura2.webp',
            '../assets/images/temperatura1.jpeg',
            '../assets/images/temperatura3.webp',
        ],
        'description' => 'A medida que se eleva la concentración de gases de efecto invernadero, también lo hace la temperatura de la superficie del planeta. En la última década, del 2011 al 2020, se ha registrado el mayor calentamiento hasta la fecha. Desde los años 80, cada década ha sido más cálida que la anterior. En casi todas las zonas se han producido más olas de calor y días más calurosos. La elevación de las temperaturas provoca un aumento en las enfermedades relacionadas con el calor y hace que trabajar en exteriores sea más difícil. Se producen incendios incontrolados con mayor facilidad y se extienden más rápidamente cuando el ambiente es más cálido. Las temperaturas del Ártico se han elevado al menos el doble de rápido que la media mundial.'
    ],
    [
        'name' => 'Desaparicion de especies',
        'images' => [
            '../assets/images/especies1.jpg',
            '../assets/images/especies2.jpg',
            '../assets/images/especies3.jpg',
        ],
        'description' => 'El cambio climático pone en riesgo la supervivencia de las especies terrestres y oceánicas. Estos riesgos aumentan a medida que ascienden las temperaturas. Debido a la potencia del cambio climático exacerbado, en el mundo se extinguen especies a un ritmo 1000 veces mayor que en cualquier otra época de la que se tenga constancia en la historia humana. Un millón de especies están en riesgo de extinguirse en las próximas décadas. Los incendios forestales, un clima extremo y la invasión de plagas con la aparición de enfermedades, todo esto está entre las amenazas relacionadas con el cambio climático. Algunas especies serán capaces de adaptarse geográficamente, pero otras, no.'
    ],
    [
        'name' => 'Aumento del nivel del mar',
        'images' => [
            '../assets/images/mar1.jpg',
            '../assets/images/mar2.jpg',
            '../assets/images/mar3.jpg',
        ],
        'description' => 'VEl océano absorbe la mayor parte del calor generado por el calentamiento global. El ritmo al que se ha elevado el calentamiento del océano ha aumentado considerablemente durante las últimas dos décadas a todas las profundidades. A medida que se calienta el océano, su volumen aumenta porque el agua se expande. El deshielo de las placas de hielo y los icebergs hace que se eleve el nivel del mar amenazando a las comunidades litorales e insulares. Además, el océano absorbe dióxido de carbono y evita su acumulación en la atmósfera. Pero un mayor contenido de dióxido de carbono hace que el océano se acidifique más, lo que pone en peligro tanto a las especies marinas como a los arrecifes de coral.'
    ],
    
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impacto</title>
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/style-home.css">
    <link rel="stylesheet" href="../assets/css/style_carousen.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    <?php foreach ($impact as $index => $stadium): ?>
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