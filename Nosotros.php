<?php
    include ('./config.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Nosotros</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/Iconos/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/styles2.css">
    <link rel="stylesheet" href="./css/navbar_footer.css">
  </head>
  <body>
    <?php include './views/navbar.php'; ?>


    <!-- //////////Nosotros///////// -->

    <div id="Nosotros" class="">
        <div class="nosotros__container">
            <aside class="nosotros__nav">
                <h3>¿Quiénes Somos?</h3>
                <hr class="hr__nav">
                <a href="#nosotros__menu" class="nosotros__links" onclick="mostrar_ocultar_Subnosotros()">Nosotros</a>
                <hr class="hr__nav">
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
                    <div class="separator hide">
                        <h2 class="title__separator">Misión</h2>
                    </div>
                    <div class="mision__container hide">
                        <div class="mision__p">
                            <p class="quienes__paragraph">Contribuir a la comprensión y aplicación de Ciencias de la
                                Complejidad con investigaciones y redes transdisciplinarias que promuevan
                                el bienestar de la sociedad por medio de la solución de problemas complejos</p>
                        </div>
                        <div>
                            <img src="./images/varias/Mision.jpg" class="nosotros__imagen"
                                alt="Conferencia del cuerpo academico">
                        </div>
                    </div>
                    <div class="separator hide">
                        <h2 class="title__separator">Visión</h2>
                    </div>
                    <div class="mision__container hide">
                        <div>
                            <img src="./images/varias/Vision.jpg" class="vision__imagen" alt="Explanada con alumnos ">
                        </div>
                        <div class="quienes__p">
                            <p class="vision__paragraph">Ser un centro de investigación transdisciplinario con amplio
                                reconocimiento a nivel nacional e internacional que aborde los problemas complejos que
                                impactan a la sociedad,
                                por medio de la realización de proyectos de investigación y capital humano
                                transdisciplinario basado en las ciencias de la complejidad.</p>
                        </div>
                    </div>
                    <div class="ubi__container hide">
                        <div class="separator">
                            <h2 class="title__separator">Ubicación</h2>
                        </div>
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
                <div class="separator hide">
                    <h1 class="title__separator">Nombre</h1>
                </div>
                <div class="nombre__container hide">
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
                <div class="separator hide">
                    <h1 class="title__separator">Logos</h1>
                </div>
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



    <?php include './views/footer.php'; ?> <!-- Sirve para mostrar el footer -->
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="./js/app.js"></script>
    <script src="./js/main2.js"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'es', includedLanguage: 'en, es'}, 'google_translate_element');
        }
    </script>
</body>

</html>