<?php

    include ('./config.php');

    if (isset($_GET['page_view'])) {

        $titulo = $_GET['page_view'];

        header('location: index.php#Documentos');

        /*if ($investigacion = mysqli_query($conn, "SELECT * FROM investigaciones WHERE titulo = $titulo")) {

            header('location: index.php#Documentos');

        } elseif ($lib = mysqli_query($conn, "SELECT * FROM libros WHERE titulo = $titulo")) {
            # code...
        } elseif ($art = mysqli_query($conn, "SELECT * FROM articulos WHERE nombre = $titulo")) {
            # code...
        }*/

    }
    

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complejidad y gestion de las organizaciones</title>
    <link rel="shortcut icon" href="./images/Iconos/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/sheet.css">
    <script src="./js/views.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous"> -->
</head>

<body>

    <header class="hero">
        <?php include './views/navbar.php'; ?> <!-- Sirve para mostrar la barra de navegacion -->
    </header>

    <!-- /////////Inicio -->

    <div id="Inicio">
        <section class="inicio__container">
            <h1 class="inicio__title">Complejidad y gestion de las organizaciones</h1>
            <p class="inicio__paragraph">Complejidad, Gestion de la Innovacion: teoria y aplicaciones</p>
        </section>

        <main>
            <section class="news  container">
                <div class="news__container">
                    <h2 class="subtitle2">Noticias/Eventos</h2>
                    <div class="articles__news" id="articles-news">

                    </div>
                </div>
            </section>

            <section class="investigaciones container">
                <h2 class="subtitle2">Investigaciones</h2>
                <div class="investigaciones__container">
                    <div class="investigaciones__texts">

                        <h2 class="subtitle3">Lorem Ipsum</h2>
                        <p class="investigaciones__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Donec
                            pulvinar tempus es
                            t, ac convallis sapien blandit at. In hac habitasse platea dictumst. Donec
                            eros lorem, blandi
                            t ac commodo at, malesuada et mauris.</p>
                    </div>

                    <figure class="investigaciones__picture">
                        <img src="./images/varias/research.jpg" alt="imagen de investigacion"
                            class="investigacion__img">
                    </figure>

                </div>

            </section>
        </main>
    </div>

    <!-- //////////Noticias////////// -->

    <div id="Noticias" class="hidden">
        <h1>Noticias</h1>
    </div>


    <!-- //////////Miembros//////////// -->

    <div id="Miembros" class="hidden">
        <h1>Miembros</h1>
    </div>


    <!-- //////////Trabajos////////////// -->

    <div id="Trabajos" class="hidden">
        <aside class="sidebar">
            <ul class="aside__list">
                <li class="sidebar__item">
                    <h2>Trabajos</h2>
                </li>
                <li class="sidebar__item"><a href="#" class="aside__links"
                        onclick="mostrar_ocultarInvestigaciones()">Investigaciones</a></li>
                <li class="sidebar__item"><a href="#" class="aside__links" onclick="mostrar_ocultarLibros()">Libros</a>
                </li>
                <li class="sidebar__item"><a href="#" class="aside__links"
                        onclick="mostrar_ocultarArticulos()">Articulos</a></li>
            </ul>
        </aside>
        <main id="main__trabajos">
            <section class="info__trabajo">
                <div class="info__container">
                    <!--<figure class="info__picture">
                        <img src="./images/libros/modelo de interaccion.jpg" alt="imagen de trabajo" class="info__img">
                    </figure>
                    <div class="titulo__descripcion">
                        <h3 class="subtitle3">Lorem Ipsum</h3>
                        <p class="info__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Donec
                            pulvinar tempus es
                            t, ac convallis sapien blandit at. In hac habitasse platea dictumst. Donec
                            eros lorem, blandi
                            t ac commodo at, malesuada et mauris.</p>
                    </div> -->
                </div>
            </section>
        </main>

        <!--  /////////////////////   Mostrar Investigaciones /////////////////   -->

        <!--  /////////////////////   Idea para mostrar, hacer 3 funciones, 1 para comparar /////////////////   -->

        <div id="Investigaciones">
            <div class="cards">
                <?php
                    $select = mysqli_query($conn, "SELECT * FROM investigaciones");

                    while($row = mysqli_fetch_assoc($select)) {
                ?>
                
                    <div class="card__container">
                        <div class="card">
                            <figure>
                                <img src="trabajos/investigaciones/images/Riti.png" class="card__img"/>
                            </figure>
                            <div class="card__paragraph">
                                <h4 class="card__title"><?php echo $row['titulo']; ?></h4>
                                <input type="hidden" name="titulo" value="<?php echo $row['titulo']; ?>" />
                                <button onclick="sendRequest(); mostrar_ocultarDocumentos();" >Ajax</button>
                                <a href="#Documentos?page_view=<?php echo $row['titulo']; ?>" class="modal__open" onclick="sendRequest('<?php echo $row['titulo']; ?>', 'investigacion'); mostrar_ocultarDocumentos();">Leer Más</a>
                            </div>
                        </div>
                    </div>
                <?php }; ?>
            </div>
        </div>

        <!--  ///////////////////// Mostrar Libros /////////////////   -->

        <div id="Libros" class="hidden">
            <div class="cards">
                <?php
                    $libro = mysqli_query($conn, "SELECT * FROM libros");

                    while($libros = mysqli_fetch_assoc($libro)) {
                ?>
                    <div class="card__container">
                        <div class="card">
                            <figure>
                                <img src="trabajos/libros/images/<?php echo $libros['imagen']; ?>" class="card__img"/>
                            </figure>
                            <div class="card__paragraph">
                                <h4 class="card__title"><?php echo $libros['titulo']; ?></h4>
                                <a href="#Documentos?page_view=<?php echo $libros['titulo']; ?>" class="modal__open" onclick="sendRequest('<?php echo $libros['titulo']; ?>', 'libro'); mostrar_ocultarDocumentos();">Leer Más</a>
                            </div>
                        </div>
                    </div> 
                <?php }; ?>
            </div>
        </div>

        <!--  /////////////////////   Mostrar Articulos /////////////////   -->

        <div id="Articulos" class="hidden">
            <div class="cards">
                <?php
                    $articulo = mysqli_query($conn, "SELECT * FROM articulos");

                    while($articulos = mysqli_fetch_assoc($articulo)) {
                ?>
                    <div class="card__container">
                        <div class="card">
                            <figure>
                                <img src="trabajos/articulos/images/<?php echo $articulos['imagen']; ?>" class="card__img"/>
                            </figure>
                            <div class="card__paragraph">
                                <h4 class="card__title"><?php echo $articulos['nombre']; ?></h4>
                                <button onclick="sendRequest()">Ajax</button>
                                <a href="#Documentos?page_view=<?php echo $articulos['nombre']; ?>" class="modal__open" onclick="sendRequest('<?php echo $articulos['nombre']; ?>', 'articulo'); mostrar_ocultarDocumentos();">Leer Más</a>
                            </div>
                        </div>
                    </div>
                <?php }; ?>
            </div>
        </div>
    </div>


    <!-- //////////Contacto////////////// -->


    <div id="Contacto" class="hidden">
        <h1>Contacto</h1>
    </div>


    <!-- //////////Nosotros///////// -->

    <div id="Nosotros" class="hidden">
        <div class="nosotros__container">
            <aside class="nosotros__nav slideInUp">
                <a href="#nosotros__menu" class="nosotros__links" onclick="mostrar_ocultar_Subnosotros()">Nosotros</a>
                <hr class="hr__nav" style="box-shadow: 1px 1px 2px 2px gray; border: 1px solid black">
                <a href="#historia__container" class="nosotros__links" onclick="mostrar_ocultarHistoria()">Historia</a>
                <hr class="hr__nav">
                <a href="#universidad__container" class="nosotros__links"
                    onclick="mostrar_ocultarUniversidad()">Universidad</a>
                <hr class="hr__nav">
            </aside>
            <div id="Nosotros2">
                <div class="nosotros__menu">
                    <div class="quienes__container hide">
                        <div>
                            <img src="./images/varias/Quienes somos.jpg" class="nosotros__imagen"
                                alt="Miembros del cuerpo academico">
                        </div>
                        <div class="quienes__p">
                            <h2>¿Quiénes Somos?</h2>
                            <p class="quienes__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                pulvinar
                                tempus est, ac convallis sapien blandit at. In hac habitasse platea dictumst. Donec eros
                                lorem,
                                blandit ac commodo at, malesuada et mauris.</p>
                        </div>
                    </div>
                    <hr class="separacion">
                    <div class="mision__container hide">
                        <div class="mision__p">
                            <h2>Misión</h2>
                            <p class="quienes__paragraph">Contribuir a la comprensión y aplicación de Ciencias de la
                                Complejidad con investigaciones y redes transdisciplinarias que promuevan
                                el bienestar de la sociedad por medio de la solución de problemas complejos</p>
                        </div>
                        <div>
                            <img src="./images/varias/Mision.jpg" class="nosotros__imagen"
                                alt="Conferencia del cuerpo academico">
                        </div>
                    </div>
                    <hr class="separacion">
                    <div class="mision__container hide">
                        <div>
                            <img src="./images/varias/Vision.jpg" class="vision__imagen" alt="Explanada con alumnos ">
                        </div>
                        <div class="quienes__p">
                            <h2>Visión</h2>
                            <p class="vision__paragraph">Ser un centro de investigación transdisciplinario con amplio
                                reconocimiento a nivel nacional e internacional que aborde los problemas complejos que
                                impactan a la sociedad,
                                por medio de la realización de proyectos de investigación y capital humano
                                transdisciplinario basado en las ciencias de la complejidad.</p>
                        </div>
                    </div>
                    <hr class="separacion">
                    <div class="ubi__container hide">
                        <h1 class="ubicacion__titulo">Ubicación</h1>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1656.8180002520467!2d-116.9617410394941!3d32.5326583601202!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d947c983eecfb7%3A0xafe78c95d676a6ce!2sEdificio%20de%20Posgrado%20FCA!5e0!3m2!1ses!2smx!4v1679282317359!5m2!1ses!2smx"
                            width="900" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="ubicacion"></iframe>
                    </div>
                </div>
            </div>
            <div id="Historia" class="hidden">
                <div class="origen__container hide">
                    <h1>Origen</h1>
                    <p class="origen__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar
                        tempus est, ac convallis sapien blandit at. In hac habitasse platea dictumst. Donec eros lorem,
                        blandit ac commodo at, malesuada et mauris.</p>
                </div>
                <hr class="separacion">
                <div class="nombre__container hide">
                    <h1>Nombre</h1>
                    <div class="nombres hide">
                        <div class="nombre hide">
                            <h2 style="margin-bottom: 1em;">Viejo</h2>
                            <p>Gestión de la Inovación y Tecnología</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar
                                tempus est, ac convallis sapien blandit at. In hac habitasse platea dictumst. Donec eros
                                lorem,
                                blandit ac commodo at, malesuada et mauris.</p>
                        </div>
                        <div class="nombre hide">
                            <h2 style="margin-bottom: 1em;">Nuevo</h2>
                            <p>Complejidad y Gestión en las Organizaciones</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar
                                tempus est, ac convallis sapien blandit at. In hac habitasse platea dictumst. Donec eros
                                lorem,
                                blandit ac commodo at, malesuada et mauris.</p>
                        </div>
                    </div>
                </div>
                <hr class="separacion">
                <h1 style="text-align: center; margin-top: 1em;" class="hide">Logo</h1>
                <div class="nombres hide">
                    <div class="nombre">
                        <h2>Viejo</h2>
                        <img src="./images/logos/Logo viejo.png" class="logos">
                    </div>
                    <div class="nombre">
                        <h2>Nuevo</h2>
                        <img src="./images/logos/Cecob.jpg" class="logos">
                    </div>
                </div>
            </div>
            <div id="Universidad" class="hidden hide">
                <h1 style="margin-top: 2em;">Universidad Autónoma de Baja California</h1>
                <div class="universidad__container">
                    <div>
                        <img src="./images/logos/escudo-actualizado-2022.png" class="UABC__logo">
                    </div>
                    <div style="margin-top: 2em;">
                        <h4><strong><i>Mensaje del Rector</i></strong></h4>
                        <p class="p__rector">Les doy la más cordial bienvenida a la Universidad Autónoma de Baja
                            California, institución líder en educación superior en el noroeste de México;
                            que ha merecido la confianza de la sociedad bajacaliforniana por más de 65 años,
                            con la formación de profesionistas competentes que contribuyen a la solución de problemas de
                            la región y del país.</p>
                        <p class="p__rector">Para la UABC los estudiantes son nuestra más alta prioridad, por lo que nos
                            esforzamos día a día para ofrecer una formación profesional de calidad, que atienda a los
                            avances disciplinares;
                            así como a las transformaciones sociales, económicas, ambientales y tecnológicas. Además, se
                            busca que esta formación sea una experiencia de verdadero desarrollo humano,
                            que considere la adquisición de competencias para el trabajo y fortalezca las actitudes y
                            valores que hagan posible la vida comunitaria.</p>
                        <p class="p__rector">Contamos con una comunidad académica consolidada que, ostenta altos
                            reconocimientos ante las instancias educativas y de investigación a nivel federal.
                            Buena parte de las y los docentes, son al mismo tiempo, destacados profesionales en sus
                            respectivos campos de ocupación.</p>
                    </div>
                    <p style="margin-top: 3em; width: 95%; margin-bottom: 3em;">Somos una institución preocupada por
                        generar conocimiento que sea útil a la sociedad identificada en los objetivos del desarrollo
                        sostenible,
                        como una obligación que deriva de la propia misión universitaria. Somos una universidad de
                        oportunidades para todas las personas, sin distingos de origen, de identidad, de campus o de
                        edad… en unión, somos UABC.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- //////////  Documentos  ///////// -->

    <div id="Documentos" class="hidden">

        <h1>Hola</h1>

        <?php

        if (isset($_GET['page_view'])) {

            $titulo = $_GET['page_view'];

            header('location: index.php#Documentos');

            if ($investigacion = mysqli_query($conn, "SELECT * FROM investigaciones WHERE titulo = $titulo")) {

                header('location: index.php#Documentos');

            } elseif ($lib = mysqli_query($conn, "SELECT * FROM libros WHERE titulo = $titulo")) {
                # code...
            } elseif ($art = mysqli_query($conn, "SELECT * FROM articulos WHERE nombre = $titulo")) {
                # code...
            }

        }

            /*if (isset($_GET['page_view'])) {

                if ($investigaciones = mysqli_fetch_assoc($investigacion)) {

                    ?>

                        <div class="inv">
                            <p><?php echo $investigaciones['titulo']; ?></p>
                        </div>

                    <?php
        
                } elseif ($libs = mysqli_fetch_assoc($lib)) {
                        
                    echo "Estas en libros";
        
                } elseif ($arts = mysqli_fetch_assoc($art)) {
                        
                    echo "Estas en articulos";
        
                }

            };*/

        ?>

    </div>

    <?php include './views/footer.php'; ?> <!-- Sirve para mostrar la barra de navegacion -->

    <script src="./js/funciones.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/app.js"></script>
</body>

</html>