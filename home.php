<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    session_destroy();
    exit();
}
?>

/*Creacion de cards con php*/
<?php
$cards = [
    [
        'image' => 'assets/images/Greta.jfif',
        'name' => 'Greta Thunberg',
        'description' => 'Joven activista sueca que ha inspirado a millones de personas a tomar medidas contra el cambio climático.',
        'link' => 'php/Greta.php'
    ],
    [
        'image' => 'assets/images/Al.jfif',
        'name' => 'Al Gore',
        'description' => 'Ex vicepresidente de los Estados Unidos y activista ambiental que ha ayudado a concienciar sobre el cambio climático.',
        'link' => 'php/Al.php'
    ],
    [
        'image' => 'assets/images/Ban.jfif',
        'name' => 'Ban Ki-moon',
        'description' => 'Ex Secretario General de las Naciones Unidas que ha jugado un papel clave en la negociación de acuerdos internacionales sobre el cambio climático.',
        'link' => 'php/Ban.php'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STWU</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style-home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>

    </style>
</head>

<body>
    <header>

        <div class="container__header">

            <div class="logo">
                <img src="assets/images/Logos/logo3.png" alt="Logo">
            </div>

            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="php/Impacto.php">Impacto ambiental</a></li>
                        <li><a href="php/Soluciones.php">Soluciones sostenibles</a></li>
                    </ul>
                </nav>


            </div>
            <i class="fa-solid fa-bars" id="icon_menu"></i>
            <div class="header__cerrar">

                <a href="php/cerrar_sesion.php" class="btn"><input type="button" class="btn__header-cerrar" value="Cerrar Sesion"></a>
            </div>
        </div>

    </header>

    <main>

        <div class="cover">

            <div class="text__information-cover">
                <h1>¡Actúa ahora para salvar nuestro planeta!</h1>

                <p>Descubre cómo puedes marcar la diferencia en la lucha contra el cambio climático.</p>

                <div class="buttons__cover">
                    <input type="button" class="btn__register-cover" value="Leer más">
                </div>

            </div>

            <div class="media__cover">
                <div id="cont_e3674a9afd2a0e7cab4d19029edd230c">
                    <script type="text/javascript" async src="https://www.meteored.mx/wid_loader/e3674a9afd2a0e7cab4d19029edd230c"></script>
                </div>
            </div>


        </div>

        <div class="container__banner">

            <div class="banner">
                <div class="banner__icon-world">
                    <img src="assets/images/earth.png" id="icon_world" alt="">
                </div>
                <div class="banner__icon-hand">
                    <img src="assets/images/hand.png" id="icon_hand" alt="">
                </div>
                <div class="banner__text">
                    <h2>Únete a la lucha por un planeta sostenible con nosotros.</h2>
                    <a href="#">Leer más</a>
                </div>
            </div>
            <script src="https://climateclock.world/widget-v2.js" async></script>
            <climate-clock />
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1 class="title">Descubre lideres en la lucha contra el cambio climatico</h1>

        <div class="container_card">
    <?php foreach ($cards as $card): ?>
        <div class="card1">
            <img src="<?= $card['image'] ?>">
            <h4><?= $card['name'] ?></h4>
            <p><?= $card['description'] ?></p>
            <a href="<?= $card['link'] ?>">Leer más</a>
        </div>
    <?php endforeach; ?>
</div>

    </main>



    <footer>

        <div class="container__footer">
            <div class="box__footer">
                <div class="logo">
                    <img src="assets/images/Logos/Logo4.png" alt="Logo">
                </div>
                <div class="terms">
                    <p>Sitio web diseñado por WSTU. © 2023 Todos los derechos reservados.</p>
                </div>
            </div>
            <div class="box__footer">
                <h2>Soluciones</h2>
                <a href="https://www.google.com">APIS empleadas</a>
                <a href="#">API SPORTS</a>
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

</body>

</html>