<?php
    include ('./config.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Trabajos</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/Iconos/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/styles2.css">

  </head>
  <body>
    <?php include './views/navbar.php'; ?>
    
    

   <!-- //////////Trabajos////////////// -->

   <div id="Trabajos" class="">
    <div class="trab__img">

    </div>
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

        <div id="Investigaciones">
            <div class="cards">
                <?php
                    $select = mysqli_query($conn, "SELECT * FROM investigaciones");

                    while($row = mysqli_fetch_assoc($select)) {
                ?>
                
                    <div class="card__container">
                        <div class="card hidework">
                            <figure>
                                <img src="trabajos/investigaciones/images/Riti.png" class="card__img"/>
                            </figure>
                            <div class="card__paragraph">
                                <h4 class="card__title"><?php echo $row['titulo']; ?></h4>
                                <a href="info_trabajo.php?titulo=<?php echo $row['titulo']; ?>&tipo=Investigación" class="modal__open">Leer Más</a>
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
                        <div class="card hidework">
                            <figure>
                                <img src="trabajos/libros/images/<?php echo $libros['imagen']; ?>" class="card__img"/>
                            </figure>
                            <div class="card__paragraph">
                                <h4 class="card__title"><?php echo $libros['titulo']; ?></h4>
                                <a href="info_trabajo.php?titulo=<?php echo $libros['titulo']; ?>&tipo=Libro" class="modal__open">Leer Más</a>
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
                        <div class="card hidework">
                            <figure>
                                <img src="trabajos/articulos/images/<?php echo $articulos['imagen']; ?>" class="card__img"/>
                            </figure>
                            <div class="card__paragraph">
                                <h4 class="card__title"><?php echo $articulos['nombre']; ?></h4>
                                <a href="info_trabajo.php?titulo=<?php echo $articulos['nombre']; ?>&tipo=Artículo" class="modal__open">Leer Más</a>
                            </div>
                        </div>
                    </div>
                <?php }; ?>
            </div>
        </div>
    </div>


    <?php include './views/footer.php'; ?> <!-- Sirve para mostrar el footer -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
    <script src="./js/main2.js"></script>
  </body>
</html>