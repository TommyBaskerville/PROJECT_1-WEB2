<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
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
    <title>Gavi</title>
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/style-greta.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

        <a href="php/cerrar_sesion.php" class="btn"><input type="button" class="btn__header-cerrar" value="Cerrar Sesion"></a>
    </div>
</div>

</header>


    <main>
        <br>
        <center>
            <h1>Greta Thunberg</h1>
        </center>
        <div class="cover1">
            <img src="../assets/images/Greta.jfif" class="img" id="image_gavi" alt="">

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
        <center>
            <h2>Skill de Gavi</h2>
        </center>




        <div class="cover1">
            <div class="containerSkill">
                <div class="skill-box">
                    <span class="title">ACELERACION</span>

                    <div class="skill-bar">
                        <span class="skill-per html">
                            <span class="tooltipp">77%</span>
                        </span>
                    </div>
                </div>

                <div class="skill-box">
                    <span class="title">FUERZA</span>

                    <div class="skill-bar">
                        <span class="skill-per css">
                            <span class="tooltipp">58%</span>
                        </span>
                    </div>
                </div>
                <div class="skill-box">
                    <span class="title">AGILIDAD</span>

                    <div class="skill-bar">
                        <span class="skill-per javascript">
                            <span class="tooltipp">86%</span>
                        </span>
                    </div>
                </div>
                <div class="skill-box">
                    <span class="title">SPRINT</span>

                    <div class="skill-bar">
                        <span class="skill-per nodejs">
                            <span class="tooltipp">75%</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>


        <br>
        <br>
        <center>
            <H2>Trofeos Ganados</H2>
        </center>

        <div class="cover2">


            <div class="cardd">
                <div class="personaje">
                    <div class="imagen_personaje"></div>
                    <div class="detalle">
                        <div class="titulo_trofeo">
                            <h3>LaLiga</h3>
                        </div>
                        <div class="parrafo_trofeo">
                            <p>El FC Barcelona ganó la Liga española 2023-24, su primer título de liga en tres años. Gavi,
                                un centrocampista ofensivo de
                                18 años, fue un jugador clave del equipo, disputando 33 partidos de liga, 29 de ellos como
                                titular. Gavi anotó dos goles
                                y dio cuatro asistencias en la liga..</p>
                        </div>


                    </div>
                </div>
            </div>

            <div class="cardd">
                <div class="personaje_2">
                    <div class="imagen_personaje_2"></div>
                    <div class="detalle_2">
                        <div class="titulo_trofeo">
                            <h3>Spanish Super Cup</h3>
                        </div>

                        <div class="parrafo_trofeo">
                            <p>El FC Barcelona ganó la Supercopa de España 2023, su primer título en este torneo desde
                                2018.
                                Gavi, un centrocampista ofensivo
                                de 17 años, fue un jugador clave del equipo, disputando 4 partidos, 3 de ellos como
                                titular.
                                Gavi anotó un gol y dio
                                una asistencia en la Supercopa.</p>
                        </div>


                    </div>
                </div>
            </div>

            <div class="cardd">
                <div class="personaje_3">
                    <div class="imagen_personaje_3"></div>
                    <div class="detalle_3">
                        <div class="titulo_trofeo">
                            <h3>Golden Boy</h3>
                        </div>
                        <div class="parrafo_trofeo">
                            <p>
                                Gavi ganó el Premio Golden Boy 2022, que reconoce al mejor jugador joven del mundo. El
                                centrocampista ofensivo del FC Barcelona, ​​entonces de 17 años,
                                fue elegido por un jurado de periodistas deportivos de todo el mundo.</p>
                        </div>


                    </div>
                </div>
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

    <!-- js code -->
    <script src="/js/script-home.js"></script>


</body>

</html>