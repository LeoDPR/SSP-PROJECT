<?php

    include ('./config.php');

    if (isset($_GET['page_view'])) {

        $titulo = $_GET['page_view'];

        

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


    <!-- //////////Contacto////////////// -->


    <div id="Contacto" class="hidden">
        <h1>Contacto</h1>
    </div>


    <?php include './views/footer.php'; ?> <!-- Sirve para mostrar la barra de navegacion -->

    <script src="./js/funciones.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/app.js"></script>
</body>

</html>