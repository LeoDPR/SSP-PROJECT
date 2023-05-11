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
    <link rel="shortcut icon" href="./images/Iconos/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/navbar_footer.css">
    <link rel="stylesheet" href="./css/styles2.css">
    <!--<script src="./js/views.js"></script>-->
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

                    <?php
            $select = mysqli_query($conn, "SELECT * FROM eventos ORDER BY id_evento DESC LIMIT 3");

            while ($row = mysqli_fetch_assoc($select)) {
                ?>
                
                    <div class="new__card">
                        <figure>
                        <a href="evento.php?page_view=<?php echo $row['id_evento']; ?>">
                            <img src="./images/eventos/<?php echo $row['imagen_evento']; ?>" class="news__image" />
                        </a>
                        </figure>
                        <div class="new__paragraph">
                        <a href="evento.php?page_view=<?php echo $row['id_evento']; ?>">
                            <h4 class="subtitle3">
                                <?php echo $row['nombre']; ?>
                            </h4>
                        </a>
                            <p class="subtitle3"><?php echo $row['descripcion']; ?></p>
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
            $sqlInv = "SELECT * FROM investigaciones ORDER BY id_investigacion DESC LIMIT 1;";
            $resultInv = mysqli_query($conn, $sqlInv);

            // Convertir los resultados a formato JSON
            $rowInv = mysqli_fetch_assoc($resultInv);
            mysqli_close($conn);
            ?>
            <section class="investigaciones container">
                <h2 class="subtitle2">Investigaciones</h2>
                <div class="investigaciones__container">
                    <div class="investigaciones__texts">
                    <a href="info_trabajo.php?titulo=<?php echo $rowInv['titulo']; ?>&tipo=Investigación">
                        <h2 class="subtitle3"><?php echo $rowInv['titulo'] ?></h2>
                        <p class="investigaciones__paragraph"><?php echo $rowInv['descripcion'] ?></p>
                    </a>
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

    <script src="./js/app.js"></script>
    <script src="./js/main2.js"></script>
</body>

</html>