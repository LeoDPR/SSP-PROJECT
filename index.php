<?php

include('./config.php');

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complejidad y gestion de las organizaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="shortcut icon" href="./images/Iconos/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/navbar_footer.css">
    <link rel="stylesheet" href="./css/styles2.css">
</head>

<body>

    <header class="hero">
        <?php include './views/navbar.php'; ?> <!-- Sirve para mostrar la barra de navegacion -->
    </header>

    <!-- /////////Inicio -->

    <div id="particles-js"></div>

    <div id="Inicio">
        <section class="inicio__container">
            <h1 class="inicio__title">Complejidad y gestion de las organizaciones</h1>
            <p class="inicio__paragraph">Complejidad, Gestion de la Innovacion: teoria y aplicaciones</p>
        </section>

        <main>
            <section class="news  container">
                <div class="news__container">
                    <h2 class="subtitle2">Eventos</h2>
                    <div class="articles__news" id="articles-news">

                        <?php
                        $select = mysqli_query($conn, "SELECT * FROM eventos ORDER BY id_evento DESC LIMIT 3");

                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>

                            <div class="new__card">
                                <figure>
                                    <a href="evento.php?page_view=<?php echo $row['id_evento']; ?>">
                                        <img src="./images/eventos/<?php echo $row['imagen_evento']; ?>"
                                            class="news__image" />
                                    </a>
                                </figure>
                                <div class="new__paragraph">
                                    <a href="evento.php?page_view=<?php echo $row['id_evento']; ?>">
                                        <h4 class="subtitle3">
                                            <?php echo $row['nombre']; ?>
                                        </h4>
                                    </a>
                                    <p class="subtitle3">
                                        <?php echo $row['descripcion']; ?>
                                    </p>
                                </div>
                            </div>

                        <?php }
                        ;
                        ?>
                    </div>
                </div>
            </section>
            <?php

            // Consulta SQL para recuperar las noticias
            $sqlInv = "SELECT * FROM libros ORDER BY fecha_publicacion DESC LIMIT 1;";
            $resultInv = mysqli_query($conn, $sqlInv);

            // Convertir los resultados a formato JSON
            $rowInv = mysqli_fetch_assoc($resultInv);

            ?>
            <section class="investigaciones container">
                <h2 class="subtitle2">Libros</h2>
                <div class="investigaciones__container">
                    <div class="investigaciones__texts">
                        <a href="info_trabajo.php?titulo=<?php echo $rowInv['titulo']; ?>&tipo=Libro">
                            <h2 class="subtitle2">
                                <?php echo $rowInv['titulo'] ?>
                            </h2>
                            <p class="investigaciones__paragraph">
                                <?php echo $rowInv['descripcion'] ?>
                            </p>
                        </a>
                    </div>

                    <figure class="investigaciones__picture">
                        <img src="trabajos\libros\images\<?php echo $rowInv['imagen'] ?>" alt="imagen de investigacion"
                            class="investigacion__img">
                    </figure>

                </div>

            </section>

            <section class="carousel  container">
                <h2 class="subtitle2 miembros-title">Miembros</h2>

                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <?php
                        $select = mysqli_query($conn, "SELECT * FROM autores where miembro=1");
                        // crear los indicadores para cada resultado de la consulta
                        $i = 0;
                        while ($row = mysqli_fetch_assoc($select)) {
                            $active = $i == 0 ? "active" : "";
                            echo '<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="' . $i . '" class="' . $active . '" aria-current="true" aria-label="Slide ' . ($i + 1) . '"></button>';
                            $i++;
                        }
                        ?>
                    </div>
                    <div class="carousel-inner">
                        <?php
                        // crear los elementos del carrusel para cada resultado de la consulta
                        mysqli_data_seek($select, 0);
                        $i = 0;
                        while ($row = mysqli_fetch_assoc($select)) {
                            $active = $i == 0 ? "active" : "";
                            echo '<div class="carousel-item ' . $active . '">';
                            echo '<img src="images/miembros/' . $row['imagen_autor'] . '" class="d-block w-100" alt="' . $row['nombre'] . '">';
                            echo '<div class="carousel-caption d-none d-md-block">';
                            echo '<h5>' . $row['nombre'] . " " . $row['apellido'] . '</h5>';
                            echo '</div>';
                            echo '</div>';
                            $i++;
                        }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <?php
                // cerrar la conexión a la base de datos
                mysqli_close($conn);
                ?>
            </section>


        </main>
    </div>





    <?php include './views/footer.php'; ?> <!-- Sirve para mostrar el footer -->


    <script src="./js/app.js"></script>
    <script src="./js/main2.js"></script>
    <script src="./js/particles.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script type="text/javascript"
        src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'es', includedLanguage: 'en, es' }, 'google_translate_element');
        }
    </script>
</body>

</html>